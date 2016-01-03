<?php

namespace jags\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use jags\Http\Requests;
use jags\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $data = [];
        $data['class_name'] = 'home';
        return view('home.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function about()
    {
        //
        $data = [];
        $data['class_name'] = 'about';
        return view('home.about',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function contact()
    {
        //
        $data = [];
        $data['class_name'] = 'contact';
        return view('home.contact',$data);


    }

    /**
     * Collect data/information from contact form and send email
     *
     * @params object form data
     * @return Session flash message and redirect
     */
    public function post_contact(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'email' => 'required|email',
        'phone' =>'required',
        'message' =>'required'
      ]);
      Mail::send('emails.welcome',['request'=>$request], function($message) use ($request)
      {
        $subject = "Mr {$request->input('name')} send an Project request";
        $message->from($request->input('email'), 'Jags');
        $message->to('sibinx7@gmail.com', 'Sibin Xavier')->subject($subject);
        $message->getSwiftMessage();
      });
      return redirect(action('HomeController@contact'))->with('message','Thanks for sending email, We will contact you soon');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function service($id)
    {
        //
    }
}
