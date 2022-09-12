<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Social;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        $socials = Social::all();
        $backgrounds = Background::where('isActive', true)->first();
        $data = [
            'socials' => $socials,
            'backgrounds' => $backgrounds
        ];

        return view('welcome', compact('data'));
    }
}
