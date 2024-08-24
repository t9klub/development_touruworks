<?php

namespace App\Http\Controllers\Development;

use App\Http\Controllers\Controller;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;

class LoadLivechatController extends Controller
{
    public function index($request){
        $url = 'https://www.youtube.com/'.$request;
        $result = '';
        $chName = $request;
        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            $response = curl_exec($ch);
            curl_close($ch);


            if (curl_errno($ch)) {
                dd( 'Error: ' . curl_error($ch));
            } 
            
            // ambil nama channel start
                // Membuat objek DOMDocument dan memuat konten HTML
                $dom = new DOMDocument();
                libxml_use_internal_errors(true); // Mengabaikan error parsing HTML
                $dom->loadHTML($response);
                libxml_clear_errors();

                // Mencari meta tag dengan property="og:title"
                $xpath = new DOMXPath($dom);
                $nodes = $xpath->query('//meta[@property="og:title"]');

                if ($nodes->length > 0) {
                    $ogTitle = $nodes->item(0)->getAttribute('content');
                    $chName = $ogTitle; 
                }
            // ambil nama channel ends


            $data = strval($response);
            
            $x = strpos($data,'/hqdefault_live.jpg?');
            if ($x === false){
                $result = "Not Found";
            }

            $x -= 11;
            // $y = strpos($data,'"', $x);
            
            $videoId = substr($data, $x, 11);
                    

            $url_image = 'https://i.ytimg.com/vi/'.$videoId.'/hqdefault_live.jpg?';
            $isLive = strpos($data,$url_image);
            if($isLive === false){
                $getWaitingRoom = strpos($data,'/hqdefault.jpg?');
                if($getWaitingRoom === false){
                    $result = "Not Found";
                }else{
                    $getWaitingRoom-= 11;
                    $videoId = substr($data, $getWaitingRoom,11); 
                    $url_image = 'https://i.ytimg.com/vi/'.$videoId.'/hqdefault.jpg?';
                    $isWaitingRoom = strpos($data,$url_image);
                    if($isWaitingRoom === false){
                        $result = "Not Found";
                    }
                    else{
                        $livechat_url = "https://www.youtube.com/live_chat?is_popout=1&v=" . $videoId;
                        $result = $livechat_url;
                    }
                }
            }else{
                if(empty($videoId) || strlen($videoId)< 11){
                    $result = "Not Found";
                }else{
                    $livechat_url = "https://www.youtube.com/live_chat?is_popout=1&v=" . $videoId;
                    $result = $livechat_url;
                }
            }
           
        return view('utils.load-livechat', [
            'url' => $request,
            'id' => '0',
            'result' => $result,
            'chName' => $chName
        ]);
    }

    public function checkWaitingRoom(){

    }
}
