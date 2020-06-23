<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlyerController extends Controller
{

    /*
     *
     *  Función para generar el flyer para Colombia
     *
     */
    public function FlyerGenerate(Request $req)
    {
        $siteName;
        $countLetter = strlen ( $req->nombre );
           if($countLetter <= 10 ){
                $siteName = 100;
                $pos_y_name = 253;
           }else{
               if($countLetter > 10 && $countLetter <= 15 ){
                    $siteName = 80;
                    $pos_y_name = 240;
                }else{
                    if($countLetter > 15 && $countLetter <= 20 ){
                        $siteName = 70;
                        $pos_y_name = 240;
                    }else{
                        if($countLetter > 20 && $countLetter <= 25 ){
                            $siteName = 60;
                            $pos_y_name = 235;
                        }else{
                            if($countLetter > 25 && $countLetter <= 30 ){
                                $siteName = 50;
                                $pos_y_name = 230;
                            }else{
                                if($countLetter > 30 && $countLetter <= 35){
                                    $siteName = 40;
                                    $pos_y_name = 225;
                                }else{
                                    if($countLetter > 35){
                                        $siteName = 30;
                                        $pos_y_name = 220;
                                    }
                                }
                            }
                        }
                    }
                }
           }

        header('Content-type: image/png');

        $image          = imagecreatefrompng(base_path('image/flyer.png'));
        $colorName      = imagecolorallocate($image, 253, 0, 5);
        $colorPhone     = imagecolorallocate($image, 108, 15, 5);
        $font           = base_path('font/Tolyer.ttf');

        imagettftext($image, $siteName, 0, 35, $pos_y_name, $colorName, $font, $req->nombre);
        imagettftext($image, 70, 0, 85, 328, $colorPhone, $font, $req->telefono);

        imagepng($image);
        imagedestroy($image);

    }


    /*
     *
     *  Función para generar el flyer para Perú
     *
     *
    */
    public function FlyerPeGenerate(Request $req)
    {
        $countLetter = strlen ( $req->nombre );
        if($countLetter <= 10 ){
            $siteName = 50;
            $pos_y_name = 320;
        }else{
            if($countLetter > 10 && $countLetter <= 15 ){
                $siteName = 40;
                $pos_y_name = 315;
            }else{
                if($countLetter > 15 && $countLetter <= 20 ){
                    $siteName = 30;
                    $pos_y_name = 310;
                }else{
                    if($countLetter > 20 && $countLetter <= 25 ){
                        $siteName = 20;
                        $pos_y_name = 305;
                    }else{
                        if($countLetter > 25 && $countLetter <= 30 ){
                            $siteName = 10;
                            $pos_y_name = 300;
                        }else{
                            if($countLetter > 30 ){
                                $siteName = 8;
                                $pos_y_name = 295;
                            }
                        }
                    }
                }
            }
        }

        header('Content-type: image/png');

        $image          = imagecreatefrompng(base_path('image/flyer-pe.png'));
        $colorName      = imagecolorallocate($image, 255, 255, 255);
        $colorPhone     = imagecolorallocate($image, 253, 216, 47);
        $font           = base_path('font/BwSurco-Bold.ttf');

        imagettftext($image, 75, 0, 20, 240, $colorName, $font, $req->telefono);
        imagettftext($image, $siteName, 0, 85, $pos_y_name, $colorPhone, $font, mb_strtoupper($req->nombre));

        imagepng($image);
        imagedestroy($image);

    }

    /*
     *
     *  Función para generar el flyer para Perú
     *
     *
    */
    public function FlyerPeCGenerate(Request $req)
    {
        $countLetter = strlen ( $req->nombre );
        if($countLetter <= 10 ){
            $siteName = 50;
            $pos_y_name = 320;
        }else{
            if($countLetter > 10 && $countLetter <= 15 ){
                $siteName = 40;
                $pos_y_name = 315;
            }else{
                if($countLetter > 15 && $countLetter <= 20 ){
                    $siteName = 30;
                    $pos_y_name = 310;
                }else{
                    if($countLetter > 20 && $countLetter <= 25 ){
                        $siteName = 20;
                        $pos_y_name = 305;
                    }else{
                        if($countLetter > 25 && $countLetter <= 30 ){
                            $siteName = 10;
                            $pos_y_name = 300;
                        }else{
                            if($countLetter > 30 ){
                                $siteName = 8;
                                $pos_y_name = 295;
                            }
                        }
                    }
                }
            }
        }

        header('Content-type: image/png');

        $image          = imagecreatefrompng(base_path('image/flyer-pe-covid.png'));
        $colorName      = imagecolorallocate($image, 255, 255, 255);
        $colorPhone     = imagecolorallocate($image, 253, 216, 47);
        $font           = base_path('font/BwSurco-Bold.ttf');

        imagettftext($image, 75, 0, 20, 240, $colorName, $font, $req->telefono);
        imagettftext($image, $siteName, 0, 85, $pos_y_name, $colorPhone, $font, mb_strtoupper($req->nombre));

        imagepng($image);
        imagedestroy($image);

    }
}
