<?php

// namespace App\Http\Middleware;

// use Closure;

// class Cors
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle($request, Closure $next)
//     {
//         header("Access-Control-Allow-Origin: * ");
//         //ALLOW OPTIONS METHOD
//         $headers = [
//             'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
//             'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization',

//         ];
//         if($request->getMethod() == "OPTIONS")
//         {
//             //THE CLIENT -SIDE APPPLICATION CAN SET ONLY HEADERS ALLOWED IN ACCESS-CONTROL-ALLOW-HEADERS
//             return response()->json('OK', 200, $headers);
//         }
//         $response = $next($request);
//         foreach($headers as $key => $value) 
//         {
//             $response->header($key, $value);
//         }

//         return $response;
//         //return $next($request);
//     }
// }

namespace App\Http\Middleware;
use Closure;
class Cors
{
  // public function handle($request, Closure $next)
  // {
  //   return $next($request)
  //     ->header('Access-Control-Allow-Origin', '*')
  //     ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
  //     ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
  // }

  public function handle($request, Closure $next){
    header("Access-Control-Allow-Origin: * ");

    //ALLOW OPTIONS METHOD

    $headers = [

        'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',

        'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization',

    ];

    if($request->getMethod() == "OPTIONS")

    {

        //THE CLIENT -SIDE APPPLICATION CAN SET ONLY HEADERS ALLOWED IN ACCESS-CONTROL-ALLOW-HEADERS

        return response()->json('OK', 200, $headers);

    }

    $response = $next($request);

    foreach($headers as $key => $value) 

    {

        $response->header($key, $value);

    }

    return $response;

    //return $next($request);
  }
}
