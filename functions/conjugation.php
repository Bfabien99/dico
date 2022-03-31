<?php

  function conjugate($verb)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://lt-nlgservice.herokuapp.com/rest/english/conjugate?verb='.$verb,
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
