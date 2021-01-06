<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use App\Http\Middleware\StrTools;

class ItemController extends Controller
{
    
    public function home(Request $request)
    {
        $paginate = $request->input('paginate' , 1);

        switch($paginate):

            case 1:
                $content = Item::orderBy('id' , 'desc')->paginate(5);
                break;
            case 0:
                $content = Item::orderBy('id' , 'desc')->get();
                break;
            
        endswitch;
        
        return view('items.home' , compact('content'));
    }

    public function item($slug)
    {
        $item = Item::where('slug' , $slug)-> firstOrFail();

        return view('items.singleItem' , compact('item'));
    }

    public function edit($id)
    {
        $item = Item::where('id' , $id)-> firstOrFail(); 

        return view('items.edit' , compact('item'));
    }

    public function save($id , Request $request)
    {
        $item = Item::where('id' , $id)-> firstOrFail();

        $itemToUpdate = $request->except('_token');

        $itemToUpdate['slug'] = StrTools::cleanUrl($itemToUpdate['slug']);

        $item->update($itemToUpdate);
        
        return redirect()->route('item.route' , $item->slug);
    }

    public function delete($id)
    {
        Item::where('id' , $id)->delete();

        return redirect()->route('home.route');
    }

    public function addNewGet()
    {
        return view('items.addnew');
    }

    public function addNewPost(Request $request)
    {
        $newItem = $request->except('_token');

        $newItem['slug'] = StrTools::cleanUrl($newItem['slug']);
        
        Item::insertGetID($newItem);

        return redirect()->route('home.route');
    }

}
