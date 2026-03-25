<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Yaha mail ya database save kar sakte ho

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function sendOtp(Request $request)
    {

    $otp = rand(100000,999999);

    Session::put('otp',$otp);

    // email pe bhej sakte ho
    Mail::raw("Your OTP is: ".$otp, function($message) use ($request){

        $message->to($request->email)
        ->subject('OTP Verification');

    });

    return response()->json([
        'success'=>true
    ]);

    }

    public function verifyOtp(Request $request)
    {

    if(Session::get('otp') == $request->otp){

        return response()->json([
            'success'=>true
        ]);

    }

    return response()->json([
        'success'=>false
    ]);

    }

    public function sendmail(Request $request)
    {

    // save message or send mail

    return response()->json([
        'success'=>true
    ]);

    }
}
