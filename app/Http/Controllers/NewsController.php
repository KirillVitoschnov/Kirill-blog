<?php

namespace App\Http\Controllers;

use App\Events\PostHasViewed;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $news = News::where('title', 'LIKE', "%{$search}%")->get();
        } else {
            $news = News::all();
        }
        return view('news', compact('news'));
    }

    public function detailPage($id)
    {
        $news = News::findorfail($id);
        event('postHasViewed', $news);
        return view('newsDetail', compact('news'));
    }
}
