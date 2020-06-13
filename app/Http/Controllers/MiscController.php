<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MiscController extends Controller
{
    //
    public function AccessUnauthorize(Request $request) {

        return view('access.unauthorize');
    }

    public function OurTeam(Request $request)
    {
        # code...
        // Get The Teams and store them in a file
        // $client = new Client([
        //     'http_errors' => false,
        //     'headers' => [
        //         'Content-Type' => 'application/json'
        //     ]
        // ]);
        // $teams = $client->request('GET', 'https://atamanbc.pythonanywhere.com/hng_team_neon.json');
        // $stream = $teams -> getBody();
        // $stream ->rewind();
        // $contents = $stream->getContents(); // returns all the contents
        // unset($stream);
        // file_put_contents(resource_path('teams/backend.json'), $contents);
        // exit();

        // Work on the team now
        $teams = json_decode(file_get_contents(resource_path('teams/backend.json')), true);
        
        return view('misc.team', compact('teams'));

    }
}
