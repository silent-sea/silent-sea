<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemGroup;
use Illuminate\Http\Request;

use App\Http\Requests;

class ItemsController extends Controller
{
    public function index()
    {
        $groups = ItemGroup::all();
        $items = Item::all();

        return view('catalogue')
            ->with('groups', $groups)
            ->with('items', $items);
    }

    public function create(Requests\ItemRequest $request)
    {
        $name       = $request->name;
        $shortdesc  = $request->shortdesc;
        $desc       = $request->desc;
        $price      = $request->price;
        $id         = $request->id;

        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        $random_string_length = 12;

        for ($i = 0; $i < $random_string_length; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }

        $imageName = $name . '_' . $string . '.' .
            $request->file($id . 'image')->getClientOriginalExtension();

        $item = new Item();

        $item->name         = $name;
        $item->shortdesc    = $shortdesc;
        $item->desc         = $desc;
        $item->image        = $imageName;
        $item->group_id     = $id;
        $item->price        = $price;

        $item->save();

        $request->file($id . 'image')->move(
            base_path() . '/public/upload/itemimages/', $imageName
        );

        return redirect('admin/catalogue');
    }
}
