<?php
include ('Models/PersonnageModel.php');
class PersonnageController{
    public function listPersonnage(){
        $personnageModel = new PersonnageModel;
        $personnages = $personnageModel->getAllCharacters();
        require('Views/PersonnageView.php');
    }
    public function download($nom,$description){
        $personnageModel = new PersonnageModel;
        $download = $personnageModel->pdf($nom,$description);
    }
}