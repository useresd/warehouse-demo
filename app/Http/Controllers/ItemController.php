<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return response()->json($items);
    }

    public function show($id)
    {
        $item = Item::find($id);

        return response()->json($item);
    }

    public function store(Request $request)
    {
        $request = $request->only('name');

        $item = Item::create($request);

        return response()->json([
            "message" => "Item Created!",
            "item" => $item
        ]);
    }
}