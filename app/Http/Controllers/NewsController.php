<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('news')
            ->with('news', $news);
    }

    public function show($id)
    {
        $article = News::find($id);
        $year = Carbon::now();
        $year = $year->year;

        return view('shownews')
            ->with('article', $article)
            ->with('year', $year);
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
