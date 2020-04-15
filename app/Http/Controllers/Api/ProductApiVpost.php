<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Validator;

class ProductApiVpost extends Controller
{

  // Test: Postman
  public function save(Request $request)
  {
    $response = [];
    $validator = Validator::make($request->json()->all(), [
      "name" => "required",
      "price" => "required|numeric|gt:0"
    ]);

    if($validator->fails()){
      $response["status"] = "fail";
      $error_array = array();
      foreach ($validator->errors()->getMessages() as $error) {
        array_push($error_array, $error);
      }
      $response["errors"] = $error_array;
      return $response;
    } else {
        Product::create($request->only(["name","price"]));
        $response["status"] = "success";
        $response["message"] = "product created successfully!";
        $response["data"] = $request->only(["name","price"]);
        return $response;
    }
  }
}
