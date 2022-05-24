<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Grade;
use App\Models\Sale;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
     public function register(){
       $url='https://reqres.in/api/register';
       $details=[ "email"=>"george.bluth@reqres.in",
       "password"=>"cityslicka1"];

       $res=Http::asForm()
       ->post($url,$details);
       $response=json_decode($res);
       return  $response;
       return $response->token;
  }

  public function users(){
       $url='https://reqres.in/api/users';
       $details=['page'=>'1','per_page'=>'12'];
       $res=Http::asForm()
       ->get($url,$details);

       $users=json_decode(json_encode($res['data']));
       return view ('users',['users'=>$users]);
  }

  public function user(Request $req){
       $url='https://reqres.in/api/users/'.$req->id;
       $details=[];
       $res=Http::asForm()
       ->get($url,$details);
       $user=json_decode(json_encode($res['data']));

       return view ('user',['user'=>$user]);
  }

  public function gift(){

       $details=[ "email"=>"george.bluth@reqres.in",
       "password"=>"cityslicka1"];

       return  $details;
      //  $details=[ "email"=>"george.bluth@reqres.in",
       //            "password"=>"cityslicka1"];
       //$details=Item::where('id','1')->get();
     //return  $details;
  $details=Grade::where('id','1')->get();
  return  $details;
}


public function grades(){
     $res=Grade::get();
      //return view ('grades',['grades'=>$res]);
     return  $res;
}

public function getGrades(){

 $url='http://127.0.0.1:8000/api/grades';
 $details=[];
 $res=Http::asForm()
 ->get($url,$details);
        //$grades=json_decode(json_encode($res));
 return $res;
      //  return view ('grades',['grades'=>$res]);

}

public function index()
{
   $x=Grade::All();
   return view('grades', ['grades' => $x ]);
}

public function sales(){
     $res=Sale::get();
      //return view ('sales',['sales'=>$res]);
     return  $res;
}

public function getSales(){

 $url='http://127.0.0.1:8000/api/sales';
 $details=[];
 $res=Http::asForm()
 ->get($url,$details);
        //$sales=json_decode(json_encode($res));
 return $res;
      //  return view ('sales',['sales'=>$res]);

}


}
