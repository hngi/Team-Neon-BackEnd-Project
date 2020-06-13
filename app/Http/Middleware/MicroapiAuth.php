<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Session\Session;
use GuzzleHttp\Client;

class MicroapiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->route()->getName() == 'dashboard.home') {
            $token = $request->input('token');
            
            if(!empty($token)) {

                $client = new Client([
                    'http_errors' => false,
                    'headers' => [
                        'Authorization' => $token,
                        'Content-Type' => 'application/json'
                    ]
                ]);

                $auth = $client->request('POST', 'https://auth.microapi.dev/v1/authenticate', [
                    'headers' => ['Authorization' => 'Bearer '.$token]
                ]);
                
                if($auth -> getStatusCode() === 200) {
                    //Set session for user and continue;
                    $session = new Session();
                    $session->set('auth', true);
                    return redirect(route('dashboard.home'));
                } else
                    return redirect(route('authentication.failed'));
            }
        }

        $session = new Session();
        $auth = $session -> get('auth');
        if(!$auth)
            return redirect(route('access.unauthorize'));
        return $next($request);

    }
}
