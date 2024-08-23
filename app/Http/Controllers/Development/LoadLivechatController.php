<?php

namespace App\Http\Controllers\Development;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoadLivechatController extends Controller
{
    public function index($request){

        $url = 'https://www.youtube.com/'.$request;
        $result = '';
        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPGET, true);

            curl_close($ch);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                dd( 'Error: ' . curl_error($ch));
            } 
            
            $data = strval($response);
            
            $x = strpos($data,'/hqdefault_live.jpg?');
            if ($x === false){
                $result = "Not Found";
            }

            $x -= 11;
            $y = strpos($data,'"', $x);
            
            $videoId = substr($data, $x, 11);

            $url_image = 'https://i.ytimg.com/vi/'.$videoId.'/hqdefault_live.jpg?';
            $isLive = strpos($data,$url_image);
            if($isLive === false){
                $result = "Not Found";
            }else{
                if(empty($videoId) || strlen($videoId)< 11){
                    $result = "Not Found";
                }else{
                    $livechat_url = "https://www.youtube.com/live_chat?is_popout=1&v=" . $videoId;
                    // dd($livechat_url);
                    $result = $livechat_url;
                }
            }
           
        return view('utils.load-livechat', [
            'url' => $request,
            'id' => '0',
            'result' => $result
        ]);
    }
}
