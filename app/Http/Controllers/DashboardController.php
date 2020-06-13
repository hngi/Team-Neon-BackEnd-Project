<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends Controller
{
    //

    public function Home(Request $request) {
        $js_ds = ["auth.microapi.dev", "dashboard.microapi.dev", "falcon.microapi.dev", "file.microapi.dev", "fury.microapi.dev", "image.microapi.dev", "imageresize.microapi.dev", "mailer.microapi.dev", "pages.microapi.dev", "subscription.microapi.dev", "teamincredible.microapi.dev", "test.microapi.dev", "testincredible.microapi.dev", "usermanager.microapi.dev", "www.microapi.dev"];

        foreach ($js_ds as $js_d) {
            # code...
            $ex = explode('.', $js_d);
            $client = new Client([
                'http_errors' => false
            ]);
            if(!($ex[0] == 'www' || $ex[0] == 'dashboard')) {
                // $response = $client->request('GET', 'https://'.'dashboard.microapi.dev');
                // $data = $response->getBody()->getContents();
                $url = 'https://'.$js_d;
                $tags = @get_meta_tags($url);
                $domains[] = [
                    'title' => ucfirst($ex[0]).' API Doc',
                    'desc' => (isset($tags['description']) && count($tags['description']) > 0) ? $tags['description'] : 'An api endpoint for the microservice of '.$ex[0].' read more about this api in documentation page',
                    'link' => 'https://'.$js_d
                ];
                
            }
        }
        return view('dashboard.home', compact('domains'));
    }

    public function ViewDoc(Request $request)
    {
        # code...
        return view('dashboard.documentation');
    }
}
