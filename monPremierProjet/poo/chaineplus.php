<?php
class chainePlus{
    private $chaine = "Programmation orientée objet en PHP";
    public function __constructor($laChaine){
        $this -> chaine = $laChaine;
    }

    public function gras(){
        return "<b>".$this->chaine."</b><br>";
    }

    public function italique(){
        return "<i>".$this->chaine."</i><br>";
    }

    public function souligne(){
        return "<u>".$this->chaine."</u><br>";
    }

    public function majuscules(){
        return strtoupper($this->chaine)."<br>";
    }
}
?>