@extends('admin/base')
@section('title')
Form | Project
@endsection
@section('content')


       <div class="container" style="margin-top: 50px;">
            <div class="row">


                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center text-danger mb-5"><b>Add New Project</b> </h3>
				    <div class="form-group">
                        <form action="{{ url('account/post/project') }}" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input required type="text" name="title" class="form-control m-2" placeholder="Enter Project Title">
        				 <input required type="text" name="location" class="form-control m-2" placeholder="Enter Project location">
        				 <input required type="text" name="area" class="form-control m-2" placeholder="Enter Area (sqft)">
        				 <input required type="text" name="client" class="form-control m-2" placeholder="Enter Client Name">
                         <label class="m-2">Cover Image</label>
                         <input style="padding:4px" required type="file" id="input-file-now-custom-3" class="form-control m-2 mt-1" name="cover">

                         <label class="m-2">Images</label>
                         <input style="padding:4px" type="file" id="input-file-now-custom-3" class="form-control m-1" name="images[]" multiple>

                        <button type="submit" style="float:right; padding: 10px 25px;" class="btn btn-danger mt-4 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>

<script>
  active = document.getElementById('add_projects')
  active.classList.add('mm-active')
</script>
@endsection
