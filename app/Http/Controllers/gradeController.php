<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use App\Models\Grade;

use Illuminate\Http\Request;
 
class gradeController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
        {
            $x=Grade::All();
        return view('grades', ['grades' => $x ]);
    }

 public function newGrade()
        {
          return view('newGrade');
         }


    public function saveGrade(Request $request)
        {
            //dd($request->all());
            $grade = new Grade;
            $grade->Subject = $request->subject;
            $grade->Result = $request->result;
            $grade->save();

            $x=Grade::All();
        return view('grades', ['grades' => $x ]);
    }

     public function editGrade(Request $request)
        {
          $x =Grade::find($request->gradeId); 
      //dd($x);
          return view('editGrade',['grade'=>$x]);
         }


public function updateGrade(Request $request)
        {
            //dd($request->all());
           
           $grade =Grade::find($request->id);
           $grade->Subject = $request->subject;
           $grade->Result = $request->result;
            $grade->save();

            $x=Grade::All();
        return view('grades', ['grades' => $x ]);
    }

public function deleteGrade(Request $request)
        {
            //dd($request->all());
           
           $grade =Grade::find($request->gradeId);
           $grade->delete();

            $x=Grade::All();
        return view('grades', ['grades' => $x ]);
    }

public function viewGrade(Request $request)
        {
            //dd($request->all());
           
           $grade =Grade::find($request->gradeId);
        return view('viewGrade', ['grade' => $grade ]);
    }


}