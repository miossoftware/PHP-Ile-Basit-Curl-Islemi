<?php

class CURL {
    public static function Description(){
        $url = "https://www.haberler.com/guncel/son-dakika-haber-istanbul-da-sivrisinek-kaynakli-alerjik-15279342-haberi/";
        $cUrl = curl_init($url);
        curl_setopt_array($cUrl,[
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_RETURNTRANSFER =>true,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("authtoken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyfdfdiOjE1ODEwODk2MjJ9.Selc36cmT3XyXH6cGdJ3SN-332kx7")
        ]);
        $exec = curl_exec($cUrl);
        curl_close($cUrl);
        preg_match_all('/<meta property="og:description" content="(.*?)"/',$exec,$link);
        print_r($link[1][0]);

    }
    public static function Baslik(){
        $url = "https://www.haberler.com/guncel/son-dakika-haber-istanbul-da-sivrisinek-kaynakli-alerjik-15279342-haberi/";
        $cUrl = curl_init($url);
        curl_setopt_array($cUrl,[
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_RETURNTRANSFER =>true,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("authtoken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyfdfdiOjE1ODEwODk2MjJ9.Selc36cmT3XyXH6cGdJ3SN-332kx7")
        ]);
        $exec = curl_exec($cUrl);
        curl_close($cUrl);
        preg_match_all('/<meta property="og:title" content="(.*?)" \/>/',$exec,$link);
        print_r($link[1][0]);

    }
    public static function Title(){
        $url = "https://www.haberler.com";
        $cUrl = curl_init($url);
        curl_setopt_array($cUrl,[
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_RETURNTRANSFER =>true,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("authtoken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyfdfdiOjE1ODEwODk2MjJ9.Selc36cmT3XyXH6cGdJ3SN-332kx7")
        ]);
        $exec = curl_exec($cUrl);
        curl_close($cUrl);
        preg_match_all('/<section class="hbRow hbNewsBox hbNewsBoxHead hbContainer hbBoxScope vStyle hbIndex">(.*?)<\/section>/',$exec,$link);
        preg_match_all('/title="(.*?)"/',$link[0][0],$newLink);
        return $newLink[1];

    }
    public static function Image(){
        $url = "https://www.haberler.com";
        $cUrl = curl_init($url);
        curl_setopt_array($cUrl,[
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_RETURNTRANSFER =>true,
            CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("authtoken: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyfdfdiOjE1ODEwODk2MjJ9.Selc36cmT3XyXH6cGdJ3SN-332kx7")
        ]);
        $exec = curl_exec($cUrl);
        curl_close($cUrl);
        preg_match_all('/<section class="hbRow hbNewsBox hbNewsBoxHead hbContainer hbBoxScope vStyle hbIndex">(.*?)<\/section>/',$exec,$link);
        preg_match_all('/src="(.*?)"/',$link[0][0],$index);
        return $index[1];

    }
}