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
            $news = News::where('title', 'LIKE', "%{$search}%")->paginate(10);
        } else {
            $news = News::paginate(10);
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
