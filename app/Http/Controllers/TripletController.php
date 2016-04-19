<?php

namespace App\Http\Controllers;

use App\Triplet;
use Illuminate\Http\Request;

use App\Http\Requests;

class TripletController extends Controller
{
    public function index()
    {
        $triplets = Triplet::all();

        return view('triplet')
            ->with('triplets', $triplets);
    }

    public function create(Requests\TripletRequest $request)
    {
        $title = $request->title;
        $content = $request->cont;
        $icon = $request->icon;

        $triplet = new Triplet();

        $triplet->title = $title;
        $triplet->content = $content;
        $triplet->icon = $icon;

        $triplet->save();

        return redirect('admin/triplets');

    }

    public function update(Requests\TripletRequest $request)
    {
        $id = $request->id;
        $title = $request->title;
        $cont = $request->cont;
        $icon = $request->icon;

        $triplet = Triplet::find($id);

        $triplet->title = $title;
        $triplet->content = $cont;
        $triplet->icon = $icon;

        $triplet->save();

        return redirect('admin/triplets');
    }
}
