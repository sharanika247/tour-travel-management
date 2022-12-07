<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class BasicfromController extends Controller
{
   public function typelist(){
      $types = Type::all();
      
      return view('backend.pages.dashboard.typelist',compact('types'));
   }


   public function from(){
    return view('backend.pages.dashboard.basic from');
   }

   public function store(Request $request){
   //   dd($request->all());
      Type::create([
         'name' => $request->typename,
         'email' =>$request->email,
         'details' =>$request->typedetails
      ]);

      return redirect()->back();
     
     }

}
