
@extends('layouts.master')

@section('title')
    Application Process (Page 3)
@endsection

@section('content')
    <div class="container-fluid">
        <h1>  <img src="{{ asset('./images/Logo.png') }}"  alt="Responsive image">
        </h1>
        <style> html{background-color: gray} div{background-color: gray} h1,img{text-align: center}</style>
    <body>
    <br>  <br>

    <h2 class="display-7" style="text-align: center">What countries do you have experience working in?</h2>

    <br>
    <form action="{{ route("page-3.store")  }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect2">Continent</label>
            <select multiple class="form-control" id="continent" name="continent" required>
                <option>Asia</option>
                <option>Africa</option>
                <option>Europe</option>
                <option>Australia</option>

            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Country</label>
            <select multiple class="form-control" id="country" name="country" required>
                <option>United Kingdom</option>
                <option>Turkey</option>
                <option>United States</option>
                <option>India</option>
                <option>Pakistan</option>
                <option>United States</option>
                <option>Malaysia</option>
                <option>Sweden</option>
                <option>Germany</option>

            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Is there any countries not listed that is relevant to your application?</label>
            <textarea class="form-control" id="relcountry" name="relcountry" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">What languages do you speak?</label>
            <textarea class="form-control" id="languages" name="languagesInput" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Is there anything else you wish to add?</label>
            <textarea class="form-control" id="anythingelse" name="anythingelse" rows="3" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
    </body>
<br>
    </div>
@endsection
