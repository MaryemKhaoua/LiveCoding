<?php
require_once "model/Apprenant.php";
require_once "core/DBModel.php";


class ApprenantController 
{
    // public function getApprenantCont()
    // {
    //     $Objappr = new Apprenant();
    //     $apprenants = $Objappr->getApprenant();
    //     require_once "views/layout.php";
    // }
    public function getApprenant()
    {
        $show=$this->getApprenant("users",[ `firstname`, `lastname`, `email`]);
        require_once "views/layout.php";

    }

}
