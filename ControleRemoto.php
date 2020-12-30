<?php


abstract class ControleRemoto {
    
    private $power; 
    private $pieces;
    private $buttonsQuantity;
    private $approvedByGovernnment;
    
    public function ControleRemoto ($power, $pieces, $buttonsQuantity){
        $this->power = $power;
        $this->pieces = $pieces;
        $this->buttonsQuantity = $buttonsQuantity;
        $this->approvedByGovernnment = false;
    }
    
    public function GovernnamentAprovation() {
        $this->setApprovedByGovernnment(true);
    }
    
    public function TurnOn() {
        if($this->getPower() == false && $this->approvedByGovernnment == true){
            $this->getPower() = true;
            echo "The machine is connected.";
        }
    }
    
    public function TurnOff() {
        if($this->getPower() == true && $this->approvedByGovernnment == true){
            $this->getPower() = false;
            echo "The machine is disconnected.";
        }
    }
    
    public function DetailsOfTheRemote() {
        if($this->approvedByGovernnment == true){
        echo "Buttons quantity: " . $this->buttonsQuantity;
        echo "Pieces quantity: " . $this->pieces;
        }
    }
    
    function getPower() {
        return $this->power;
    }

    function getPieces() {
        return $this->pieces;
    }

    function getButtonsQuantity() {
        return $this->buttonsQuantity;
    }

    function getApprovedByGovernnment() {
        return $this->approvedByGovernnment;
    }

    function setPower($power) {
        $this->power = $power;
    }

    function setPieces($pieces) {
        $this->pieces = $pieces;
    }

    function setButtonsQuantity($buttonsQuantity) {
        $this->buttonsQuantity = $buttonsQuantity;
    }

    function setApprovedByGovernnment($approvedByGovernnment) {
        $this->approvedByGovernnment = $approvedByGovernnment;
    }  
}
