<?php

namespace App\Http\Controllers;

use App\Rules\ReCaptcha;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    use ValidatesRequests;

    public function home()
    {
        return view('landing-pages.home');
    }

    public function about()
    {
        return view('landing-pages.about');
    }

    public function contact()
    {
        return view('landing-pages.contact');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        try {
            $content = "Name : $request->name\n"
                . "Phone : $request->phone\n"
                . "Email : $request->email\n\n"
                . "Message : $request->message";
            Mail::raw($content, function ($message) use ($request) {
                $message->to('official@sovet.id');
                $message->subject('User Messages');
            });
            sleep(2);
            return redirect()->back()->with('success', 'Message sent successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'There is a problem, please try again for a while');
        }
    }
}
