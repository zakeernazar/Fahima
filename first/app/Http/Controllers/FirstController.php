<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class FirstController extends Controller
{
    public function myfunction(){
    //     $a = 10;
    //     $b = 20;
    //     $c = $a + $b;
    //     $age = 30;
    //     $name = 'fahima';
    //     return view('home',compact('c','age','name'));
            // // // $users = User::all(); //select * from User
            $users = User::find(1); // select * from user  where id = 43
            // // // return $users -> name;
            // // // $user = User::where('status',1)->get();
            // // $users = User::whereIn('number',[1,2])->get();
            // $users = User::active()->get();
            // // $users = User::active()->count();
            return $users;
            // return $users;
            return view('/');
 

    }
    // public function testt(){
    //     return view('test');
    // }
    public function for_contact_page(){
        return view('contact');
    }
public function for_test_page(){
    return view('test');
}
public function about_page(){
    return view('about',compact('users'));
}
}
