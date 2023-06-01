
@extends('layouts.master')

@section('title')
    Application Process (Page 4)
@endsection

@section('content')
    <div class="container-fluid">
        <h1>  <img src="{{ asset('./images/Logo.png') }}"  alt="Responsive image">
        </h1>
        <style> html{background-color: gray} div{background-color: gray} h1,img{text-align: center}</style>
        <br>
        <h2 class="display-1" style="text-align: center">Application sent!</h2>
    <body>
    <br>  <br>



    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Thank you <?php echo Session::get("fname");?>!</h4>
        <p> We are delighted that you have chosen to apply to work with us.</p>
        <hr>
        <p class="mb-0">You have skills that we are looking for. And we will be in touch by email within 5 working days</p>
    </div>
    </body>
<br>
    <button type="button" class="btn btn-primary">Home</button>
    </div>
@endsection
