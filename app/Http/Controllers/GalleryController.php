<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Session;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function store(Request $request)
    {

        if(Session::has('user')){
            $gallery = new Gallery;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/Gallery/', $filename);
                $gallery->gallery = $filename;
            }

            $gallery->save();
            return redirect('account/galleries')->with('success','Gallery Image Upload Successfully');
        }
        else{
            return redirect('account/form/login');
        }

    }



    public function galleries(){
        if(Session::has('user')){
            $galleries= Gallery::all();
            return view('admin.gallery',compact('galleries'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    public function gallery_form(){
        if(Session::has('user')){
            return view('admin.gallery-form');
        }
        else{
            return redirect('account/form/login');
        }
    }


    public function destroy($id){
        if(Session::has('user')){
            $gallery = Gallery::find($id);
            $gallery->delete();
            return redirect('account/galleries')->with('success','Gallery Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }

    }
}
