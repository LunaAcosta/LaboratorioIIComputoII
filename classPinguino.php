<?php
   require_once ("classAve.php");

   class Pinguino extends Ave {
    public $tipo;

    function __construct($foto, $nombre, $tipo){
        $this -> tipo = $tipo;
        parent::__construct($foto, $nombre);
    }
   }
?>