<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ShippingController extends Controller
{
    public function index(){
       $shippingData=DB::table("shipping_list")->get();
       return  view("shipping.list",["shippingData"=>$shippingData]);
    }

    public function calculate(Request $request){
        $shipping=$request->all();
        $destinationParts=explode("|",$shipping['name']);
        $from=$destinationParts[0];
        $to=$destinationParts[1];
        $secret='AIzaSyDxczA6T86uhMRV4W30sLOwZd78-2Hmodw';
        $responseApi = Http::get("https://maps.googleapis.com/maps/api/distancematrix/json?destinations=$from&origins=$to&key=$secret");
        if($responseApi->failed()){
            return response("Ошибка запроса",400);
        }
        else{
            $userInput=$request->all();
            $distance=$responseApi->json()["rows"][0]["elements"][0]["distance"]["text"];
            $distanceParse=(int)str_replace(["km",","],"",$distance);
            $weight=(int)$shipping["weight"];
            $cost=(($distanceParse*10)+($weight*10));
            return response()->json($cost);
        }
       

        
    }
    public function add(Request $request){
        if ($request->isMethod('post')) {
            DB::table("shipping_list")->insert(["to"=>$request["to"],"from"=>$request["from"]]);
            return redirect("/");
        }else{
           return view("shipping/add-form");
        }
        
    }
}

