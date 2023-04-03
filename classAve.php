<?php
    class Ave {
        public $nombre;
        public $foto;

        function __construct($foto, $nombre){
            $this -> nombre = $nombre;
            $this -> foto = $foto;
        }

        // metodo nadar 
        public function getNadar($canSwim){
            return $canSwim;
        }

        // metodo volar
        public function getVolar($canFly){
            return $canFly;
        }

    }
?>