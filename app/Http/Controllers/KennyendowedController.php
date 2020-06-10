<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KennyendowedController extends Controller
{
    public function kennyendowed()
    {

      $curl = curl_init();

      curl_setopt_array($curl, array(
      	CURLOPT_URL => "https://montanaflynn-lorem-text-generator.p.rapidapi.com/paragraph?length=3&count=1",
      	CURLOPT_RETURNTRANSFER => true,
      	CURLOPT_FOLLOWLOCATION => true,
      	CURLOPT_ENCODING => "",
      	CURLOPT_MAXREDIRS => 10,
      	CURLOPT_TIMEOUT => 30,
      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      	CURLOPT_CUSTOMREQUEST => "GET",
      	CURLOPT_HTTPHEADER => array(
      		"x-rapidapi-host: montanaflynn-lorem-text-generator.p.rapidapi.com",
      		"x-rapidapi-key: e11eb42de1msh71214d5fbd128b9p144b54jsnae0e1922d287"
      	),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        return response()->json([
       'code' => '404',
       'data'  => "cURL Error #:" . $err,
    ], 404);
      } else {
        return response()->json([
       'code' => '404',
       'data'  => $response,
    ], 200);
      }


    }
}
