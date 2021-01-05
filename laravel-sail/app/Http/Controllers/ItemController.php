<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    
    public function home(){

        $content = Item::get();
        
        return view('items.home' , compact('content'));
    }

    public function item($slug){
        $item = Item::where('slug' , $slug)-> firstOrFail();

        return view('items.singleItem' , compact('item'));
    }

    public function edit($id , Request $request){
        $item = Item::where('id' , $id)-> firstOrFail(); 

        return view('items.edit' , compact('item'));
    }

    public function save($id , Request $request){
        $item = Item::where('id' , $id)-> firstOrFail();

        $itemUpdate = $item->update($request->except('_token'));

        return redirect()->route('item.view' , $item->slug);
    }

}
