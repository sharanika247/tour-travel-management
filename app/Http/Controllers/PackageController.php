<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    //all
    public function list(){
        return view('backend.pages.package.list');
    }

    
    public function alllist(){
        $types = Type::all();
        
        return view('backend.pages.package.all',compact('types'));
     }

    public function all(){
        return view('backend.pages.package.all');
    }

    
    public function packagefrom(){
        return view('backend.pages.package.all store page');
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


    
    //long
     
    public function longlist(){
        $types = Type::all();
        
        return view('backend.pages.package.long',compact('types'));
     }

    public function long(){
        return view('backend.pages.package.long');
    }

    
    public function longpackagefrom(){
        return view('backend.pages.package.long store page');
    }
    
   public function longstore(Request $request){
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
    //short
      public function shortlist(){
        $types = Type::all();
        
        return view('backend.pages.package.short',compact('types'));
     }

    public function short(){
        return view('backend.pages.package.short');
    }

    
    public function shortpackagefrom(){
        return view('backend.pages.package.short store page');
    }
    
   public function shortstore(Request $request){
      //dd($request->all());
       Type::create([
          //colum name from bd => name from the form
          'name' => $request->placename,
          'details' =>$request->placedetails,
          'package_start_date' =>$request->packagstartdate,
          'package_end_date' =>$request->packagenddate,
          'status' =>$request->status
       ]);
 
       return redirect()->back();
      
      }




      public function edit($id)
      {
        $type=Type::find($id);
        return view('backend.pages.package.all edit',compact('type'));
        // dd($type);
      }
      

      public function update(Request $request,$id)
      {
    //    dd($request->all(),$id);
       $type = Type::find($id);
       if($type){
          $type->update([
            'name' => $request->placename,
            'details' =>$request->placedetails,
            'package_start_date' =>$request->packagstartdate,
            'package_end_date' =>$request->packagenddate,
            'status' =>$request->status,
          ]);

            return redirect()->route('package.alllist');
       }
      }


        public function delete($id)
       {
        $type= Type::find($id);
        if($type) {
            $type->delete();
             return redirect()->back();
        }
       }

}
