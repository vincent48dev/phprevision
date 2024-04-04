<?php
include ('Models/PersonnageModel.php');
use Dompdf\Dompdf;
class PersonnageController{
    public function listPersonnage(){
        $personnageModel = new PersonnageModel;
        $personnages = $personnageModel->getAllCharacters();
        require('Views/PersonnageView.php');
    }
    public function download($id){
        $personnageModel = new PersonnageModel;
        $download = $personnageModel->pdf($id);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(''.$download->id.''.$download->name.''.$download->description.'');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        
         // instantiate and use the dompdf class

        
        // reference the Dompdf namespace
    }
}