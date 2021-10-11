<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Website\UserRequest;

class UserController extends Controller
{    
    /**
     * register
     *
     * @param  mixed $request
     * @return void
     */
    public function register(Request $request)
    {
        # If request is post then regiter user
        if ($request->isMethod('post')) {
            # validation
            $request->validate(UserRequest::register());
            
            # Making new entry to the users table
            $user = \App\Models\User::create($request->all());
            
            # checking user is register or not accordingly flashing the message
            if ($user) {
                return back()->with('success','Registered successfully.');
            }else{
                return back()->with('error','Unable to register.');
            }
            
        }
        if (\Auth::user()) {
            return \Redirect::to("website/home");
        }
        # if request is not post then render the register page 
        return view('website.pages.register');
    }
    
    /**
     * signin
     *
     * @param  mixed $request
     * @return void
     */
    public function signin(Request $request)
    {
       
        # If request is post then regiter user
        if ($request->isMethod('post')) {
            # validation
            $request->validate(UserRequest::signin());
            # Making new entry to the users table
            if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return \Redirect::to("website/home");
            }else{
                return \Redirect::route("website.signin")->withError('Opps! Invalid Credentials.');
            }
        }
        if (\Auth::user()) {
            return \Redirect::to("website/home");
        }
        # if request is not post then render the register page 
        return view('website.pages.signin');
    }
    
    /**
     * logout
     *
     * @param  mixed $request
     * @return void
     */
    public function logout(Request $request) {
        \Auth::logout();
        return \Redirect::route("website.signin")->withSuccess('Logout successfully.');
    }
    
}
