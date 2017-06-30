<?php
/**
 * Created by PhpStorm.
 * User: TinSky
 * Date: 2016/7/26
 * Time: 17:43
 */

namespace App\Utils;


use Faker\Provider\Image;
use Illuminate\Http\Request;

class CheckCode
{
    private $authCode = '';
    
    public function createCheckCode()
    {
        $i = 0;
        $authCode = '';
        
        session_start();
        header('Content-Type:image/png');
        $im = imagecreate(130, 50);
        $backColor = imagecolorallocate($im, rand(50, 200), rand(0, 155), rand(0, 155));

        $fontColor = imagecolorallocate($im, 255, 255, 255);
        $font = 'C:\Windows\Fonts\Arial.ttf';
        
        for ($i = 0; $i <= 3; $i++) {
            $randAsciiNumArray = array (rand(48, 57), rand(65, 90));
            $tmpArr = $randAsciiNumArray[rand(0, 1)];
            $randStr = chr($tmpArr);
            imagettftext($im, 30, rand(0, 20) - rand(0, 25), 5 + $i * 30, rand(30, 35), $fontColor, $font, $randStr);
            $this->authCode .= $randStr;
        }
        
        for ($i = 0; $i < 8; $i++) {
            $lineColor = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
            imageline($im, rand(0, 130), 0, rand(0, 130), 50, $lineColor);
        }
        
        for ($i = 0; $i < 250; $i++) {
            imagesetpixel($im, rand(0, 130), rand(0, 50), $fontColor);
        }
        
        imagepng($im);
        imagedestroy($im);
    }
    
    
    public function setSession(Request $request)
    {
        $request->session()->put('authCode', $this->authCode);
    }
    
    
}