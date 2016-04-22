<?php

namespace App\Http\Controllers;

use App\ItemGroup;
use Illuminate\Http\Request;

use App\Http\Requests;

class ItemGroupController extends Controller
{
    public function create(Requests\ItemGroupRequest $request)
    {
        $name       = $request->name;
        $shortdesc  = $request->shortdesc;
        $desc       = $request->desc;

        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        $random_string_length = 12;

        for ($i = 0; $i < $random_string_length; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }

        $imageName = $name . '_' . $string . '.' .
            $request->file('image')->getClientOriginalExtension();

        $group = new ItemGroup();

        $group->name = $name;
        $group->shortdesc = $shortdesc;
        $group->desc = $desc;
        $group->image = $imageName;

        $group->save();

        $request->file('image')->move(
            base_path() . '/public/upload/groupimages/', $imageName
        );

        return redirect('admin/catalogue');
    }
}
