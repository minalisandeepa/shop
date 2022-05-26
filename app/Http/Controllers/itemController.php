<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Item;

use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
public function index()
{
    
        $x = Item::All();
    return view('items',['items'=>$x]);
    }

    public function newItem()
    {
      return view('newItem');
  }


  public function saveItem(Request $request)
  {
            //dd($request->all());
    $item = new Item;
    $item->Name = $request->name;
    $item->Price = $request->price;
    $item->save();

    $x=Item::All();
    return view('items', ['items' => $x ]);
}

public function editItem(Request $request)
{
  $x =Item::find($request->itemId); 
  return view('editItem',['item'=>$x]);
}


public function updateItem(Request $request)
{
            //dd($request->all());

 $item =Item::find($request->id);
 $item->Name = $request->name;
 $item->Price = $request->price;
 $item->save();

 $x=Item::All();
 return view('items', ['items' => $x ]);
}

public function deleteItem(Request $request)
{
            //dd($request->all());

 $item =Item::find($request->itemId);
 $item->delete();

 $x=Item::All();
 return view('items', ['items' => $x ]);
}

public function viewItem(Request $request)
{
            //dd($request->all());

 $item =Item::find($request->itemId);
 return view('viewItem', ['item' => $item ]);
}

public function search(Request $req)
{
    
  $x = Item::where('Name','Like','%'.$req->sText.'%')->
            orwhere('Price',$req->sText)->
            get();
    return view('items',['items'=>$x]);
    }


}

