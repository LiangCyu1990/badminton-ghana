<?php

    namespace App\Http\Controllers;

    use App\School;
    use App\Setting;


    class SchoolController extends Controller
    {

        public function index(){

            $settings = Setting::pluck('value', 'key');
            $schools = School::all();
            var_dump($schools);
            return view('schools',compact('settings','schools'));
        }
    }
