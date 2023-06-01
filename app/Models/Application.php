<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ApplicationEmail;

class Application extends Model
{
    use HasFactory;

    public $table="application";

//    public static function boot() {
//
//        parent::boot();
//
//        static::created(function ($item) {
//
//            $adminEmail = "w015467j@student.staffs.ac.uk";
//            Mail::to($adminEmail)->send(new ApplicationEmail($item));
//        });
//
//
//    }
}
