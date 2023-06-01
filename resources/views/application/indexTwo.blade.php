
@extends('layouts.master')

@section('title')
    Application Process (Page 2)
@endsection

@section('content')
    <div class="container-fluid">
        <h1>  <img src="{{ asset('./images/Logo.png') }}"  alt="Responsive image">
        </h1>
        <style> html{background-color: gray} div{background-color: gray} h1,img{text-align: center}</style>
    <body>

    <h2 class="display-7" style="text-align: center">Please answer the following questions:</h2>
    <br>
    <form action="{{ route("page-2.store")  }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Date of birth</label>
            <input type="date" class="form-control" id="dob" name="dob" placeholder="15/12/1999" required>
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect2">How many years experience</label>
            <select multiple class="form-control" id="experience" name="experience" required>
                <option>Less than 5</option>
                <option>5+</option>
                <option>10+</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
    </body>
<br>
    </div>
@endsection
