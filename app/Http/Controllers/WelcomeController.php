<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	App\Course;

class WelcomeController extends Controller
{
   public function index()
   {

   	$SeleniumCourses=Course::where('course_name', '=', 'Selenium')->get();
   	$UFTCourses=Course::where('course_name', '=', 'UFT')->get();

   	
   	return view('welcome', compact('SeleniumCourses','UFTCourses'));
   }
}
