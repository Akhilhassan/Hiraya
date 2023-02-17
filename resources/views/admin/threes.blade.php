@extends('admin/base')
@section('title')
3D | Hiraya
@endsection
@section('content')
<div class="row mt-5 px-5">
@foreach ($threed as $data)
<form action="{{url('account/delete-3d',$data->id)}}" method="POST" class="mt-3 col-md-4 col-12 img_gl_box px-3">
    <img src="{{asset('/uploads/Threed/'.$data->image)}}" alt="" class="gallery_img img-fluid">
    <p class="title">{{$data->title}}</p>
    @csrf
    @method('DELETE')

    <button type="submit"><i class="fa-solid fa-trash"></i></button>
</form>
@endforeach
</div>


<script>
  active = document.getElementById('threed_page')
  active.classList.add('mm-active')
</script>
@endsection
