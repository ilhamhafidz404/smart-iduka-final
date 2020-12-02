

@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/upload.css')}}">
@endsection

@section('content')

  <div class="container">
    <div class="upload-container">
      <div class="upload-header bg-info">
        <h1>UPLOAD Surat keterangan dokter</h1>
      </div>
      <div class="upload-body">
        <div class="row">
          <div class="col-md">
            <form method="POST" action="{{route('skd.up',auth()->user()->id)}}" enctype="multipart/form-data">
              @csrf
              <input type="file" name="skd" value="{{$skd->skd}}" class="btn btn-outline-info">
              <button type="submit" class="btn btn-info">Upload</button>
            </form>
          </div>
          <div class="col-md">
            @php $path = Storage::url('skd/'.$skd->skd); @endphp
              <tr>
                <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
                <td><a href="{{ url($path) }}">Download</a></td>
              </tr>

              {{$skd->skd}}
          </div>
        </div>
      </div>
    </div>
    <a href="/user/upload">kembali</a>
  </div>

@endsection

