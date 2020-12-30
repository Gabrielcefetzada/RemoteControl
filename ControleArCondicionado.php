<?php

include_once 'ControleRemoto.php';

class ControleArCondicionado extends ControleRemoto {
    
    private $upTemperature; // buttons must be on boolean values.
    private $downtemperature;
    private $upWindVelocity;
    private $DownWindVelocity;
    
    function __construct($power, $pieces, $buttonsQuantity, $upTemperature, $downtemperature, $upWindVelocity, $DownWindVelocity) {
        parent::__construct($power, $pieces, $buttonsQuantity);
        $this->upTemperature = $upTemperature;
        $this->downtemperature = $downtemperature;
        $this->upWindVelocity = $upWindVelocity;
        $this->DownWindVelocity = $DownWindVelocity;
    }
    
}
