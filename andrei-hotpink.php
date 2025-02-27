<?php
    class hotpinkJSON{
        public $entrada;
        public function __construct($nuevaentrada) {
            $this->entrada = $nuevaentrada;
        }
        public function aXML($salida){
            $archivo = file_get_contents($this->entrada);
            $json = json_decode($archivo, true);
            $xml = new SimpleXMLElement("<root/>");
        }
    }
    $conversor = new hotpinkJSON("entrada.json");
    $conversor-> aXML("salida.xml");
?>