<?php

use Dompdf\Dompdf;
class PersonnageModel{
    public function getAllCharacters(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://dragonball-api.com/api/characters');
        
        return json_decode($response->getBody());
    }
    public function pdf($id){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://dragonball-api.com/api/characters/'.intval($id).'');
        if($response->getStatusCode() == 200) {
        return json_decode($response->getBody()->getContents());
        }else {
            echo 'error: '.- $response->getStatusCode() .'';
        }

    }
};