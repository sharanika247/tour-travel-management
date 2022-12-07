<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagedetailsController extends Controller
{
    public function details(){
        $package=[1,2,3,4,5,6,7,8,9];
        return view('backend.pages.package details.package list',compact('package'));
    }

    public function store(Request $request){
        //dd($request->all());
         Type::create([
            'name' => $request->placename,
            'details' =>$request->placedetails,
            'package_start_date' =>$request->packagstartdate,
            'package_end_date' =>$request->packagenddate,
            'status' =>$request->status
         ]);
   
         return redirect()->back();
        
        }
}
