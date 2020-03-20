<?php

    namespace App\Http\Controllers;

    use App\School;
    use App\Setting;


    class SchoolController extends Controller
    {

        public function index(){

            $settings = Setting::pluck('value', 'key');
            $school = School::all();
            return view('school',compact('settings','school'));
        }
    }
