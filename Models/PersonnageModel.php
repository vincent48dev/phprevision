<?php

use Dompdf\Dompdf;
class PersonnageModel{
    public function getAllCharacters(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://dragonball-api.com/api/characters');
        
        return json_decode($response->getBody());
    }
    public function pdf($nom,$description){
         // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(''.$nom.'<br>'.$description.'');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        
        // reference the Dompdf namespace
    }
};