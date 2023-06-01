<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\ApplicationEmail;

class ApplicationController extends Controller
{

    public function page1store(Request $request){

        Session::put('sname', $request->sname);
        Session::put('fname', $request->fname);
        Session::put('email', $request->email);
        Session::put('gender', $request->gender);
        Session::put('education', $request->education);

        if ( Session::get("education")== "High school" ) {

            return view("application.sorry");
        }
        else
        {
            return redirect()->route("page-2.create");
        }
    }

    public function page2create(){

        return view("application.indexTwo");
    }
    public function page2store(Request $request){

        Session::put('dob', $request->dob);
        Session::put('experience', $request->experience);
        if ( Session::get("experience")== "Less than 5" ) {

            return view("application.sorryTwo");
        }
        else
        {
            return redirect()->route("page-3.create");
        }


    }

    public function page3create(){

        return view("application.indexThree");
    }
    public function page3store(Request $request){

        Session::put('continent', $request->continent);
        Session::put('country', $request->country);
        Session::put('relcountry', $request->relcountry);
        Session::put('languages', $request->languagesInput);
        Session::put('anythingelse', $request->anythingelse);

        return redirect()->route("page-4.create");
    }

    public function page4create(){

        return view("application.indexFour");
    }
    public function store(Request $request){




        if($request->hasFile('cv') && $request->hasFile('photo')){
            $application = new Application;

            $application->fname = Session::get("fname");
            $application->sname = Session::get("sname");
            $application->email = Session::get("email");
            $application->gender = Session::get("gender");
            $application->education = Session::get("education");
            $application->dob = Session::get("dob");
            $application->experience = Session::get("experience");
            $application->continent = Session::get("continent");
            $application->country = Session::get("country");
            $application->relcountry = Session::get("relcountry");
            $application->languages = Session::get("languages");
            $application->anythingelse = Session::get("anythingelse");
            $application->cv = $request->file('cv')->getClientOriginalName();
            $application->photo = $request->file('photo')->getClientOriginalName();

            $data = array(
                "fname" => Session::get("fname"),
                "sname" => Session::get("sname"),
                "email" => Session::get("email"),
                "gender" => Session::get("gender"),
                "education" => Session::get("education"),
                "dob" => Session::get("dob"),
                "experience" => Session::get("experience"),
                "continent" => Session::get("continent"),
                "country" => Session::get("country"),
                "relcountry" => Session::get("relcountry"),
                "languages" => Session::get("languages"),
                "anythingelse" => Session::get("anythingelse"),
            );

            if ($application->save()) {
                // Store the files
                Mail::send('emails.application', ['data' => $data], function($message) use ($data, $request) {
                    $message->to("mirsab.wasim@hotmail.com")
                        ->subject($data["fname"]);


                    $message->attach($request->file('cv'));
                    $message->attach($request->file('photo'));
                });
            }
        }

        return redirect()->route("page-5.create");
    }

    public function page5create(){

        return view("application.complete");
    }
}
