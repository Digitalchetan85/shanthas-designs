<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home_view');
	}
        
        public function about()
        {
            return view('about_view');
        }
        
        public function contact()
        {
            return view('contact_view');
        }
       
}
