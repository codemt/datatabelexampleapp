<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Students;
use Yajra\DataTables\DataTables;
class DataTableController extends Controller
{
    //

    public function index(){    


            $all_students = Students::paginate(10);


     
            return view('index.index4')->with('all_students',$all_students);


    }

    public function getIndex(){    


       // $all_students = Students::all();


 
        return view('index.index5');


}


    public function yajratables(){



       // $students = Students::select([ 'name', 'phone', 'email']);

        return Datatables::of(Students::query())->make(true);

           // return view('index.index5')->with('data',$data);

    }
    

    
}
