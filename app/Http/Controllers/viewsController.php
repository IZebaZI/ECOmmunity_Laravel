<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    //ADMIN VIEWS --------------------------------------------------------
    public function companiesList(){
        return view('admin.company-list');
    }
    
    public function pickupPointsList(){
        return view('admin.pickup-points-list');
    }
    
    public function userProfile(){
        return view('admin.admin-user-profile');
    }


    //USER VIEWS -------------------------------------------------------
    public function myProfile(){
        return view('user.my-profile');
    }

    public function myPickups(){
        return view('user.my-pickups');
    }

    public function myPost(){
        return view('user.my-post');
    }

    public function userPickupPoints(){
        return view('user.pickup-points-user');
    }


    //COMMUNITY VIEWS ---------------------------------------------------
    public function communityHome(){
        return view('community.home-community');
    }

    public function guestPostView(){
        return view('community.guest-post-view');
    }

    public function guestUserProfile(){
        return view('community.guest-user-profile');
    }
}
