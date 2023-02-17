@extends('admin/base')
@section('title')
Gallery | Form
@endsection
@section('content')
<form id="amenities-form" class="mt-5 d-flex justify-content-center align-items-center" action="{{ url('account/add-gallery') }}" method="POST"  enctype="multipart/form-data">
    @csrf
   <div class="shadow w-100 row py-3" style="max-width: 400px; border-radius: 10px;">
    <div class="col-12">
      <p>Gallery Image </p>
      <div>
        <div class="m-0 box">
          <div class="js--image-preview"></div>
          <div class="upload-options">
            <label>
              <input type="file" class="image-field image-upload" name="image" accept="image/*">
            </label>
          </div>
        </div>
      </div>
    <input type="submit" class="button">
   </div>

</form>


<script>
  active = document.getElementById('gallery_form')
  active.classList.add('mm-active')
</script>

@endsection
