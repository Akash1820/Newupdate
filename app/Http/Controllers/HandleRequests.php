<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\DB;
use Carbon\Carbon;

class HandleRequests extends Controller
{
    
function annoSubmit(Request $req)
{
    $MAC= exec('getmac');
    $MAC=strtok($MAC,'') ;
    $lat=$req->latitude;
    $long=$req->longitude;
    $ip=getenv("REMOTE_ADDR");
    $ur=null;
    $file=$req->file('attachment');
    if($file==null){
    
    }
    else{
     $extn= $file->getClientOriginalExtension();
    $save=$file->storeAs('./',$MAC.".".$extn);
    $url=Storage::url($MAC.".".$extn);
    $ur=explode('storage/',$url,2);
    }
   
    
   
$brief= $req->brief;
$insert = DB::table('anonymous_table')
     ->insert([
         'attachment'=>$ur[1],
        'brief'=>$brief,
        'latitude'=>$lat,
        'longitude'=>$long,
        'ip'=>$ip,
        'mac'=>$MAC,
        
        ]);

     
return redirect()->back();;
// return view('finalsubmit');
}
function insertSubmit(Request $req)
{
    $name=$req->name;
    $lat=$req->latitude;
    $long=$req->longitude;
$ur=null;
    $file=$req->file('attachment');
    if($file==null){
    
    }
    else{
     $extn= $file->getClientOriginalExtension();
         $save=$file->storeAs('./',$name.".".$extn);
    $url=Storage::url($name.".".$extn);
    $ur=explode('storage/',$url,2);
    }

   $contact=$req->contact_number;
   $address=$req->residential_add;
   $contact=$req->contact_number;
   $contact=$req->contact_number;
   $date = Carbon::now();
$brief= $req->brief;
$insert = DB::table('complaints')
     ->insert([
         'reportdate'=>$date,
        'name'=>$name,
        'contact_number'=>$contact,
        'residential_add'=>$address,
        'longitude'=>$long,
        'latitude'=>$lat,
        'attachment'=>$ur[1],
        'Brief'=>$brief,
        'Status'=>"Complaint Submitted",
        
        ]);
 
         $complaint = DB::table('complaints')
       ->where([['name',$name],['reportdate',$date]])

     -> get();    
   return view('finalsubmit')->with('Complaint',$complaint);
 
        // return redirect()->back();
}
}
