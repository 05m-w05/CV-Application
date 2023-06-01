
@extends('layouts.master')

@section('title')
    Application Process (Page 4)
@endsection

@section('content')
    <div class="container-fluid">
        <h1>  <img src="{{ asset('./images/Logo.png') }}"  alt="Responsive image">
        </h1>
        <style> html{background-color: gray} div{background-color: gray} h1,img{text-align: center}</style>
    <body>

    <h2 class="display-7" style="text-align: center">Please upload the necessary documents:</h2>
    <br>  <br>
    <form action="{{ route("store")  }}" method="POST" enctype='multipart/form-data' >
    @csrf

        <div class="form-group">
            <label for="exampleFormControlFile1">Please upload a file</label>
            <input type="file" class="form-control-file" id="file" name="cv" required>
        </div>
        <br>

        <div class="form-group">
            <label for="exampleFormControlFile1">Please upload a recent photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
    </body>
<br>
    </div>
@endsection
