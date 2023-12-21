<?php
require_once "database/db.php";
class Apprenant extends Db
{

    // public function tablename(): string
    // {
    //     return 'users';
    // }

    public function getApprenant($table, $attributes)
    {

        $conn = Db::connect();
        $implodeattr = implode("`,`", $attributes);
        // $requete = $conn->prepare("SELECT (`{$implodeattr}`) FROM " .  $this->tablename() . "");
        $requete = $conn->prepare("SELECT (`{$implodeattr}`) FROM $table");
        return $requete->execute();


        // $sqlsel = "SELECT * FROM users";
        // return $this->connect()->query($sqlsel)->fetchAll();
    }
}
$objinstane= new Apprenant();


