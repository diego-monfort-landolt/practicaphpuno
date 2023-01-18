<?php
class Ccorriente {
 //Propiedades
    private $numCuenta;
    private $nifTitular;
    private $fechaAlta;
    private $saldo;
    private $interes;

 //Constructor
    function __construct($Numero, $Nif, $Fecha, $Interes) {
        $this->numCuenta = $Numero;
        $this->nifTitular = Nif;
        $this->fechaAlta = $Fecha;
        $this->saldo = 0;
        $this->interes = $Interes;
    }
 //Mêtodos get y set

    public function getNumCuenta() {
        return $this->numCuenta;
    }

    public function getNifTitular() {
        return $this->getNifTitular;
    }

    public function setNifTitular ($valor) {
        $this->nifTitular = $valor;
    }

    public function getFechaAlta() {
        return $this->saldo;
    }
     public function setSaldo($valor) {
        return $this->saldo;
     }
    
    public function getInteres() {
        return $this->intres;
    }
    public function setInteres($valor) {
        $this->interes = $valor;
    }

 //Mêtodos 
    function cargar($cantidad, $fecha, $concepto) {
        $this->saldo -= $cantidad;
        return $this->saldo;
    }
    function abonar($cantidad, $fecha, $concepto) {
        $this->saldo += $cantidad;
        return $this->saldo;
    }

}


?>