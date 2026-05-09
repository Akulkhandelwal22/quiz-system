<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        DB::table('feedbacks')->insert($data + [
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Mail::to(config('mail.from.address'))->send(new ContactUs($data));

        Log::info('Contact Form:', $data);

        return back()->with('success', 'Your message has been delivered!');
    }
}