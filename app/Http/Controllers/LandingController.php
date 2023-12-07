<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Rules\ReCaptcha;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    use ValidatesRequests;

    public function home(): View
    {
        $galerys = Galery::where('status', Galery::STATUS_ACTIVE)->orderBy('created_at', 'DESC')->get();
        return view('landing-pages.home', compact('galerys'));
    }

    public function about(): View
    {
        return view('landing-pages.about');
    }

    public function contact(): View
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

    public function listImage(Request $request)
    {
        try {
            $model = Galery::where([
                'id' => Crypt::decryptString($request->slug),
                'status' => Galery::STATUS_ACTIVE
            ])->first();
            if (isset($model->image)) {
                return response()->json([
                    'statusCode' => 200,
                    'status' => 'successfully',
                    'message' => 'Message sent successfully',
                    'data' => [
                        'name' => $model->name,
                        'slug' => $model->slug,
                        'image' => json_decode($model->image)
                    ]
                ]);
            } else {
                return response()->json([
                    'statusCode' => 404,
                    'status' => 'failed',
                    'message' => 'Not Found',
                    'data' => []
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'statusCode' => 500,
                'status' => 'failed',
                'message' => 'There is a problem, please try again for a while',
                'data' => []
            ]);
        }
    }
}
