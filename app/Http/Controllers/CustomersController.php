<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class CustomersController extends Controller
{
    //

    public function getCustomers(Request $request){

    	try{

    		 return response(["status" => "ok"], 200);

    	}catch (\Exception $e){
    		return response(["status" => $e->getMessage()], 500);
    	}

    }

}
