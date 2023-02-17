<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Threed;
use App\Models\Interiorthreed;
use App\Models\Contact;
use App\Models\Projects;
use Session;


class ProductController extends Controller
{
    //
    function index(){
        if(session::has('user')){
            $messages =Contact::count();
            $projects =Projects::count();
            $gallery =Gallery::count();
            $threed =Threed::count();
            $interior =Interiorthreed::count();
            return view('admin.index', compact('gallery', 'messages', 'threed', 'projects', 'interior'));
        }
        else{
            return redirect('account/form/login');
        }

    }


    function home(){
        $galleries= Gallery::all();
        $projects= Projects::all();
        $threed= Threed::all();
        $interior= Interiorthreed::all();

        return view('frontend.index', compact('galleries','projects', 'threed','interior'));
    }

    function about(){
        return view('frontend.about');
    }

    function services(){
        return view('frontend.service');
    }

    function projects(){
        $projects= Projects::all();
        return view('frontend.projects', compact('projects'));
    }

    function threed(){
        $threed= Threed::all();
        $interior= Interiorthreed::all();
        return view('frontend.threed', compact('threed','interior'));
    }

    function contact(){
        return view('frontend.contact');
    }


    function inner_project($id){
        $project=Projects::findOrFail($id);
        return view('frontend.inner-project', compact('project'));
    }
}
