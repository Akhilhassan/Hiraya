<?php

namespace App\Http\Controllers;
use App\Models\Threed;
use Session;
use Illuminate\Http\Request;

class ThreedController extends Controller
{
    //
    public function index(){
        if(Session::has('user')){
            $threed= Threed::all();
            return view('admin.threes', compact('threed'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function store(Request $request)
    {
        if(Session::has('user')){
            $threed = new Threed;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Threed/', $filename);
                $threed->image = $filename;
            }
            $threed->title = $request->title;

            $threed->save();
            return redirect('account/3d')->with('success','3d Image Upload Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function threed_form(){
        if(Session::has('user')){
            return view('admin.three-form');
        }
        else{
            return redirect('account/form/login');
        }

    }

    public function destroy($id){
        if(Session::has('user')){
            $threed = Threed::find($id);
            $threed->delete();
            return redirect('account/3d')->with('success','3d Image Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }


}
