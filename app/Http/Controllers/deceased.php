<?php
namespace App\Http\Controllers;

use Carbon\Carbon;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class deceased extends Controller
{
    function addpolice(Request $request){
        DB::table('police')->insert([
        "srjno" => $request->input('srjno'),
    	"policefullname" => $request->input('policefullname'),
        "policetag" => $request->input('policetag'),
        "policearea" => $request->input('policearea'),
    	"policerank" => $request->input('policerank'),
    	"policephoneno" => $request->input('policephoneno'),
    	"policescenephoto" => $request->input('policescenephoto'),
    	"policefoldername" => $request->input('policefoldername'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()


        ]);


    }

    function addcoroner(Request $request){
    DB::table('coroner')->insert([
            "srjno" => $request->input('srjno'),
            "coronerfullname" => $request->input('coronerfullname'),
            "coronerarea" => $request->input('coronerarea'),
            "coronerordergivenby" => $request->input('coronerordergivenby'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()


            ]);
    }

    function adddeceased(Request $request){
    DB::table('deceased')->insert([
            "srjno" => $request->input('srjno'),
            "pmdate" => $request->input('pmdate'),
            "pmtime" => $request->input('pmtime'),
            "fullname" => $request->input('fullname'),
            "age" => $request->input('age'),
            "sex" => $request->input('sex'),
            "address" => $request->input('address'),
            "contactnumber" => $request->input('contactnumber'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()


            ]);
    }
    function addcod(Request $request){
        DB::table('cod')->insert([
                "srjno" => $request->input('srjno'),
                "a"=>$request->input('a'),
                "b"=>$request->input('b'),
                "c"=>$request->input('c'),
                "contributory_cause"=>$request->input('contributory_cause'),
                "other_comments"=>$request->input('other_comments'),
                "cod"=>$request->input('cod'),
                "circumstances"=>$request->input('circumstances'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ]);
    }
    function addsamples(Request $request){
        DB::table('samples')->insert([
                "srjno" => $request->input('srjno'),
                "gactnumber" => $request->input('gactnumber'),
                "gaanalysis" => $request->input('gaanalysis'),
                "gadate" => $request->input('gadate'),
                "gatime" => $request->input('gatime'),
                "mrirefnum" => $request->input('mrirefnum'),
                "mrianalysis" => $request->input('mrianalysis'),
                "mridate" => $request->input('mridate'),
                "mritime" => $request->input('mritime'),
                "otherrefnum" => $request->input('otherrefnum'),
                "otheranalysis" => $request->input('otheranalysis'),
                "otherdate" => $request->input('otherdate'),
                "othertime" => $request->input('othertime'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()


                ]);
    }

    public function getalldeceased(){

        $records =DB::table('deceased')
            ->select('srjno','fullname' )
            ->get();
    if($records==null){
            return response()->json(['error' => 'somthing wrong'], 401);
        }
        return response()->json($records);

    }
}
