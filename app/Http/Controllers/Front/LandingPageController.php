<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactForm;
use App\Models\Contact;
use App\Models\LandingPages;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{

    public function index()
    {
        $data = LandingPages::where('platform_slug', 'tik-tok')->first();
        if (!$data) {
            abort(404);
        }
        return view('pages.contact', compact('data'));
    }




    public function create(Request $request)
    {
        $sender =  Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
        ]);

        Mail::to(config('settings.email'))
        ->queue(new ContactForm($sender));
    }
}
