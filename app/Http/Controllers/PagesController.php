<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
		public function about(){
    		return view('about');
		}

		public function login(){
    		return view('login');
		}

		public function register(){
    		return view('register');
		}		

		public function home(){
    		return view('home');
		}

		public function event(){
    		return view('eventList');
		}
}
