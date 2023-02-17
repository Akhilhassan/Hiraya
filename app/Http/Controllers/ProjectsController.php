<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Image;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects=Projects::all();
        return view('admin.projects')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move('uploads/Cover/', $imageName);

            $projects =new Projects([
                "title" =>$request->title,
                "location" =>$request->location,
                "area" =>$request->area,
                "client" =>$request->client,
                "cover" =>$imageName,
            ]);
           $projects->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['projects_id']=$projects->id;
                    $request['image']=$imageName;
                    $file->move('uploads/Images/', $imageName);
                    Image::create($request->all());

                }
            }

            return redirect("account/projects");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project=Projects::findOrFail($id);

        $project->delete();
        return back();
    }
}
