<?php

namespace App\Http\Controllers;
use App\Events\PostHasViewed;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news', compact('news'));
    }
    public function detailPage($id)
    {
        $news = News::findorfail($id);
        event('postHasViewed', $news);
        return view('newsDetail', compact('news'));
    }
}
