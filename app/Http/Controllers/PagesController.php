<?php

namespace App\Http\Controllers;

use View;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'metaTitle' => 'Начално',
            'pageName' => 'homepage',
            'templateName' => 'homepage'
        ];

        $result = $request->filled('result');

        return View::make($data['templateName'], compact('data', 'result'));
    }

    public function saveEmail(SaveRequest $request)
    {
        Mail::to(env('MAIL_TO'))->queue(new SaveMade($request->all()));

        return redirect(route('homepage', ['result' => 'success']));
    }
}
