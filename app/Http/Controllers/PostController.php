<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addTicket(){
        $url = '';

        $data = array(
            'subject' => $request->subject,
            'Description' => $request->Description,
            'CategoryId' => $request->userapproved,
            'GroupId' => $request->GroupId,
            'RequestTypeID'=>$request->RequestTypeID
        );
        try {

            $request = $client->request('POST', $url, [
                'form_params' => [
                    'subject' => $request->subject,
                    'Description' => $request->Description,
                    'CategoryId' => $request->CategoryId,
                    'GroupId' => $request->GroupId,
                    'RequestTypeID' => $request->RequestTypeID,
                                    ]
            ]);

            $response = $request->getBody()->getContents();

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = response()->json([
                'success' => false,
                'message' => 'Ticket Succesfully Added',
            ]);
        }
    }
}
