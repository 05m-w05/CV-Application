
@extends('layouts.master')

@section('title')
    Application Process
@endsection

@section('content')


    <div class="container-fluid">

      <h1>  <img src="{{ asset('./images/Logo.png') }}"  alt="Responsive image">
        </h1>
        <style> html{background-color: gray} div{background-color: gray} h1,img{text-align: center}</style>
    <body>


    <h2 class="display-7" style="text-align: center">Please answer the following questions:</h2>
    <br>
    <form action="{{ route("page-1.store")  }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Surname/Family name</label>
            <input type="text" class="form-control" id="sname" name="sname" placeholder="Dingle" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="John" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label>
            <select class="form-control" id="gender" name="gender" required>
                <option>Male</option>
                <option>Female</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Highest level of education</label>
            <select multiple class="form-control" id="education" name="education" required>
                <option>PHD</option>
                <option>Masters</option>
                <option>Bachelors degree</option>
                <option>College</option>
                <option>High school</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
    </body>
<br>
    </div>
@endsection
