<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	App\Course;

class WelcomeController extends Controller
{
   public function index(Request $request)
   {


   	// $SeleniumCourses=Course::where('course_name', '=', 'Selenium')->get();
   	// $UFTCourses=Course::where('course_name', '=', 'UFT')->get();

   	
   	// return view('welcome', compact('SeleniumCourses','UFTCourses'));

   	if($request->has('titlesearch')){
    		$items = Course::search($request->titlesearch)
    			->paginate(8);
          
    	}else{
    		$items = Course::paginate(8);
    	}

    	return view('welcome',compact('items'));
   }
}
