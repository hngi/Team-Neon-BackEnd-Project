<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KennyendowedController extends Controller
{

      public $subdomain=[];

      public function order($id)
      {
//$id="laravel.io/forum/undefined-variable-data-in-view-laravel";
        $curl = curl_init();
 $contentType = "application/json"; //e.g charset=utf-8
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://".$id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
           "Content-Type: $contentType",
          ),
        ));
     //    $dateofbirth =$request->dob;
     //      $dateofbi=date("Y-m-d",strtotime($dateofbirth));
     //     $bvn = $request->bvn; //bank CBN code https://bank.codes/api-nigeria-nuban/
     //     $baseUrl = "https://api.paystack.co";
     //     $endpoint = "/bank/resolve_bvn/".$bvn."";
     //     $httpVerb = "GET";
     //     $contentType = "application/json"; //e.g charset=utf-8
     //     $authorization =$keys; //gotten from paystack dashboard
     //
     //     $headers = array (
     //         "Content-Type: $contentType",
     //         "Authorization: Bearer $authorization"
     //     );
     //
     // $ch = curl_init();
     // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     // curl_setopt($ch, CURLOPT_URL, $baseUrl.$endpoint);
     // curl_setopt($ch, CURLOPT_HTTPGET, true);
     // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     //
     // $content = json_decode(curl_exec( $ch ),true);
     // $err     = curl_errno( $ch );
     // $errmsg  = curl_error( $ch );

  //   curl_close($ch);
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          return response()->json([
         'code' => '404',
         'data'  => "cURL Error #:" . $err,
      ], 404);
        } else {
          return $response;
        }

      }



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
        return $response;
      }


    }


public function subdomainArr(){
$files=file_get_contents("../scrap/log.json");
$data=json_decode($files, true);
  return view('home', compact(['data']));

}
}
