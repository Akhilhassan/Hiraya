<?php

namespace App\Http\Controllers;
use App\Models\Interiorthreed;
use Session;
use Illuminate\Http\Request;

class InteriorthreedController extends Controller
{
    //

    //
    public function index(){
        if(Session::has('user')){
            $threed= Interiorthreed::all();
            return view('admin.interior', compact('threed'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $threed = new Interiorthreed;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/InteriorThreed/', $filename);
                $threed->image = $filename;
            }
            $threed->title = $request->title;

            $threed->save();
            return redirect('account/3d/interior')->with('success','Interior 3d Image Upload Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function threed_form(){
        if(Session::has('user')){
            return view('admin.interior-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $threed = Interiorthreed::find($id);
            $threed->delete();
            return redirect('account/3d/interior')->with('success','Interior 3d Image Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}
