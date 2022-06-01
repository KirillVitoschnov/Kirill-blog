<?php

namespace App\Http\Controllers;

use App\Events\PostHasViewed;

use App\Models\News;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        return view('cabinet.profile',compact('user'));
    }
}
