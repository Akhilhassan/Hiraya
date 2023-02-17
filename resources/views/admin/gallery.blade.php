@extends('admin/base')
@section('title')
Galleries | Hiraya
@endsection
@section('content')
<div class="row mt-5 px-5">
@foreach ($galleries as $data)
<form action="{{url('account/delete-gallery',$data->id)}}" method="POST" class="mt-3 col-md-4 col-12 img_gl_box px-3">
    <img src="{{asset('/uploads/Gallery/'.$data->gallery)}}" alt="" class="gallery_img img-fluid">
    @csrf
    @method('DELETE')

    <button type="submit"><i class="fa-solid fa-trash"></i></button>
</form>
@endforeach
</div>

<script>
  active = document.getElementById('gallery_page')
  active.classList.add('mm-active')
</script>
@endsection
