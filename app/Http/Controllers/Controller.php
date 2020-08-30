<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\query;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

function track_data(Request $req){
  $id= $req->id;
  $name= $req->user_name;
	$track_detail_count = DB::table('complaint_track')
            ->where('id',$id)
            ->count();
    $track_detail = DB::table('complaint_track')
            ->where('id',$id)
            ->get();
           if($track_detail_count!=0){
           foreach ($track_detail as $row) {
           	$details=[
'User_ID'=>$row->id,
                'Date'=>$row->reportdate,
                'User_Name'=>$row->reported_by,
                'Status'=>$row->status,
                'Remarks'=>$row->Remark,
             ];
            }
            // return Redirect()->back()->with('details',$details);
            $req->session()->put('data','OK');
            return view('alert')->with('details',$details);
           }
            
     else{
      $req->session()->forget('data');
      return view('alert');
     }


}

function contact(Request $req){
$email= $req->uemail;
$data= $req->uquery;
$name=$req->uname;
$details=['email'=>$email,'data'=>$data,'name'=>$name];
\Mail::to("akashkumarrawa@gmail.com")->send(new query($details));
return redirect()->back();
}

}
