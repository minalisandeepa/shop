<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Sale;
use App\Models\Item;
use DB;

use Illuminate\Http\Request;

class saleController extends Controller
{
/**
 * Show the profile for a given user.
 *
 * @param  int  $id
 * @return \Illuminate\View\View
 */
public function index()
{

    
    try{
     $sales=Sale::with('item')->get();
          // dd($x);
     return view('sales', ['sales' => $sales ]);
 }
 catch(\Exception $e)
 {
    return $e->getMessage();
}

}

public function newSale()
{
    $items=Item::All();
       // dd($items);
    return view('newSale',['items'=>$items]);
}


public function saveSale(Request $request)
{
        //dd($request->all());
    $sale = new Sale;
    $sale->itemId = $request->itemId;
    $sale->Quantity = $request->quantity;
    $sale->save();

    $x=Sale::All();
    return view('sales', ['sales' => $x ])->with('item');
}

public function editSale(Request $request)
{
   $items=Item::All();
   $x =Sale::find($request->saleId); 
   return view('editSale',['sale'=>$x,'items'=>$items]);
}


public function updateSale(Request $request)
{
        //dd($request->all());
 
 $sale =Sale::find($request->itemId);
 $sale->itemId = $request->id;
 $sale->Quantity = $request->quantity;
 $sale->save();

 $x=Sale::All();
 return view('sales', ['sales' => $x ]);
}

public function deleteSale(Request $request)
{
        //dd($request->all());
 
 $sale =Sale::find($request->saleId);
 $sale->delete();

 $x=Sale::All();
 return view('sales', ['sales' => $x ]);
}

public function viewSale(Request $request)
{
        //dd($request->all());
 
 $sale =Sale::find($request->saleId);
 return view('viewSale', ['sale' => $sale ]);
}


public function search()
{

    
    try{
     $sales=Sale::with('item')->get();
          // dd($x);
     return view('sales', ['sales' => $sales ]);
 }
 catch(\Exception $e)
 {
    return $e->getMessage();
}

}


}

