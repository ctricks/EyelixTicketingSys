<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function createTicket(){

        // $createTicket = DB::table('ticket_tbl')->get();
        // return view('pages.createTicket',['title'=> 'Create Ticket','title'])->with('createTicket',$createTicket);

        $string = '

        {
            "area": [
                {
                    "area": "kothrud"
                },
                {
                    "area": "katraj"
                }
            ]
        }

        ';
                    $area = json_decode($string, true);

                    foreach($area['area'] as $i => $v)
                    {
                        echo $v['area'].'<br/>';
                    }
                    return view('pages.createTicket')->with('area',$area);

            }

    public function ticketList(){


        $url = '/api/owtelcrm/get_Instalmentsfordocuments?';

            $data = array(
                'id' => $request->id,
                'subject' => $request->subject,
                'description' => $request->description,
                'isActive' => $request->isActive,
                'Remarks' => $request->Remarks,
            );

            

            $url = $url . http_build_query($data);

            try {

                $request = $client->request('GET', $url);
                $response = $request->getBody()->getContents();
               

            } catch (\GuzzleHttp\Exception\ClientException $e) {
                
                $response = response()->json([
                    'success' => false,
                    'message_header' => 'Ticket List ',
                ]);
            }
            return $response;
    }
}
