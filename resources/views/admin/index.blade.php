@extends('admin/base')
@section('title')
Dashboard | Hiraya
@endsection
@section('content')

<div class="row">
    <div class="mt-3 col-6 px-5">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px;">
            <h2 style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Gallery</h2>
            <span style="font-size:40px; font-weight:bold">{{$gallery}}</span>
        </div>
    </div>
    <div class="mt-3 col-6 px-5">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px;">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Project</h2>
            <span style="font-size:40px; font-weight:bold">{{$projects}}</span>
        </div>
    </div>
    <div class="mt-3 col-6 px-5">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px;">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">Total Messages</h2>
            <span style="font-size:40px; font-weight:bold">{{$messages}}</span>
        </div>
    </div>
    <div class="mt-3 col-6 px-5">
        <div class="count_box" style="background: #7186ba;color: white;padding: 35px;">
            <h2  style="font-size:25px; text-transform:uppercase; font-weight:bold">3D Images</h2>
            <span style="font-size:40px; font-weight:bold">{{$threed}}</span>
        </div>
    </div>
</div>


<script>
  active = document.getElementById('dashboard')
  active.classList.add('mm-active')
</script>
@endsection
