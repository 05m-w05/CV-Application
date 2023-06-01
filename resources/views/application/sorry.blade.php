
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






    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Sorry <?php echo Session::get("fname");?>, you are required to have at minimum a college qualification</h4>
        <p>              See you in a few years!                     </p>
        <hr>
        <p class="mb-0">Your application has been closed</p>
    </div>


    </body>
<br>
    <button type="button" class="btn btn-primary">Next</button>

    </div>
@endsection
