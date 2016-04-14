<?php

namespace App\Http\Controllers;

use App\Owl;
use App\Http\Requests;
use Session;
use File;

class AdminController extends Controller
{
    public function index()
    {
        $owl = Owl::all();
        return view('admin')
            ->with('owl', $owl);
    }
    public function createOwl(Requests\CreateOwlRequest $request)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        $random_string_length = 12;
        $name = $request->name;

        for ($i = 0; $i < $random_string_length; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }

        $imageName = $name . '_' . $string . '.' .
            $request->file('image')->getClientOriginalExtension();

        $owl = new Owl;

        $owl->name = $name;
        $owl->url = $imageName;

        $owl->save();

        $request->file('image')->move(
            base_path() . '/public/upload/hero/', $imageName
        );

        Session::flash('success', 'Upload Successful. ');
        return redirect('admin');
    }

    public function deleteOwl(Requests\CreateOwlRequest $request)
    {
        $id = $request->owlsid;
        $owl = Owl::find($id);

        $filename = 'upload/hero/' . $owl->url;
        File::delete($filename);

        $owl->delete();

        return redirect('admin');
    }

    public function activeOwl(Requests\CreateOwlRequest $request)
    {
        $id = $request->owlsid;
        $owl = Owl::find($id);

        if($owl->active === 0)
        {
            $owl->active = 1;

        }
        else if ($owl->active === 1)
        {
            $owl->active = 0;
        }
        else {
            print 'error toggling owl';
        }

        $owl->save();

        return redirect('admin');
    }
}
