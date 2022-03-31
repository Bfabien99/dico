<?php
    function search($word){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://owlbot.info/api/v4/dictionary/'.$word,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Token 3aa84def9c445ea1cd4499852b5ea04f32f56e41'
        ),
        ));

        $datas = curl_exec($curl);
            if ($datas === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) 
            {
                return null;
            } 
            $datas = json_decode($datas, true);
    
            return $datas;
    }

    function read($word)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.dictionaryapi.dev/api/v2/entries/en/'.$word,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $datas = curl_exec($curl);
            if ($datas === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) 
            {
                return null;
            } 
            $datas = json_decode($datas, true);
    
            return $datas;

    }

    function contain($word,$match){
        $match = utf8_encode($match);
        if(str_contains($match,$word)){
            $new = str_replace('Ã¢ÂÂ','',$match);
            $newString = str_replace($word,'<em class="found">'.$word.'</em>',$new);
            return $newString;
        }
        else{
            $new = str_replace('Ã¢ÂÂ','',$match);
            return $new;
        }
    }