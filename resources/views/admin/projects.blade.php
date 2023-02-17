@extends('admin/base')
@section('title')
Projects | Hiraya
@endsection
@section('content')

<div class="container" style="margin-top: 50px;">

<h3 class="text-center text-danger"><b>PROJECTS</b> </h3>
<a style="float: right; margin-top: 24px; margin-bottom: 40px" href="{{ url('account/create/project') }}" class="btn btn-outline-success">Add New Project</a>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Location</th>
        <th>Area</th>
        <th>Client</th>
        <th>Cover</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>


        @foreach ($projects as $project)
     <tr>
           <th scope="row">{{ $project->id }}</th>
           <td>{{ $project->title }}</td>
           <td>{{ $project->location }}</td>
           <td>{{ $project->area }}</td>
           <td>{{ $project->client }}</td>
           <td><img src="{{asset('/uploads/Cover/'.$project->cover)}}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
           <td>
               <form action="{{ url('account/delete/project/' .$project->id) }}" method="post">
                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                @csrf
                @method('delete')
            </form>
           </td>

       </tr>
       @endforeach

    </tbody>
  </table>
</div>


<script>
  active = document.getElementById('projects_page')
  active.classList.add('mm-active')
</script>
@endsection
