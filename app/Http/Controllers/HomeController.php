<?php

namespace App\Http\Controllers;

use App\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return view('hello');
	}
        
        public function memberships_types_list()
        {
            return view('membership_types.MembershipTypesList'); 
        }
        
        public function available_memberships_types()
        {
            return view('membership_types.AvailableMembershipsTypes');             
        }

        public function unavailable_memberships_types()
        {
            return view('membership_types.UnavailableMembershipsTypes');             
        }
        
        public function active_memberships()
        {
            return view('memberships.ActiveMemberships');             
        }        

        public function inactive_memberships()
        {
            return view('memberships.InactiveMemberships');             
        }    
        
        public function expiring_memberships()
        {
            return view('memberships.ExpiringMemberships');             
        }    
        
        public function memberships_sold()
        {
            return view('memberships.MembershipsSold');             
        }    
        
        public function memberships_paymets()
        {
            return view('paymets.MembershipsPaymets');             
        }    
        public function members_list()
        {
            return view('members.MembersList');             
        }                   
}
