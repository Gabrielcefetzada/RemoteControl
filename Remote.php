<?php

abstract class Remote {

    private $power; // buttons must be on boolean values.
    private $pieces;
    private $buttonsQuantity;
    private $approvedByGovernnment;

    public function Remote($power, $pieces, $buttonsQuantity) {
        $this->power = $power;
        $this->pieces = $pieces;
        $this->buttonsQuantity = $buttonsQuantity;
        $this->approvedByGovernnment = false;
    }

    public function GovernnamentAprovation() {
        $this->setApprovedByGovernnment(true);
    }

    public function TurnOn() {
        if ($this->getPower() == false && $this->approvedByGovernnment == true) {
            $this->setPower(true);
            echo "The machine is connected." . "\n\r";
            ?>
            <br></br>
            <?php
        }
    }

    public function TurnOff() {
        if ($this->getPower() == true && $this->approvedByGovernnment == true) {
            $this->setPower(false);
            echo "The machine is disconnected." . "\n\r";
            ?>
            <br></br>
            <?php
        }
    }

    public function DetailsOfTheRemote() {
        if ($this->approvedByGovernnment == true) {
            echo "Buttons quantity: " . $this->buttonsQuantity . "\n\r";
            echo "Pieces quantity: " . $this->pieces . "\n\r";
            ?>
            <br></br>
            <?php
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
