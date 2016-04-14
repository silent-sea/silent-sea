<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests;

class NewsController extends Controller
{
    public function index()
    {
        return view('news');
    }

    public function show($id)
    {
        $article = News::find($id);

        return view('shownews')
            ->with('article', $article);
    }

    public function create(Requests\CreateNewsRequest $request)
    {
        $title = $request->title;
        $shortdesc = $request->shortdesc;
        $content = $request->fullcontent;

        $news = new News();

        $news->title = $title;
        $news->shortdesc = $shortdesc;
        $news->content = $content;

        $news->save();

        return redirect('admin/news');
    }
}
