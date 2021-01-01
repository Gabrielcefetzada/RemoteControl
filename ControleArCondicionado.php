<?php

include_once 'ControleRemoto.php';

class ControleArCondicionado extends ControleRemoto {

    private $upTemperature; // buttons must be on boolean values.
    private $downtemperature;
    private $Temperature;
    private $upWindVelocity;
    private $DownWindVelocity;
    private $Winding;
    private $currentWindVelocity;

    function __construct($power, $pieces, $buttonsQuantity, $upTemperature, $downtemperature, $upWindVelocity, $DownWindVelocity) {
        parent::__construct($power, $pieces, $buttonsQuantity);
        $this->upTemperature = $upTemperature;
        $this->downtemperature = $downtemperature;
        $this->upWindVelocity = $upWindVelocity;
        $this->DownWindVelocity = $DownWindVelocity;
        $this->Temperature = 20;
        $this->Winding = true;
        $this->currentWindVelocity = 1;
    }

    function UpTemperature() {
        $this->setUpTemperature(true);
        if ($this->getTemperature() <= 30 && $this->getUpTemperature() == true) {
            $this->setTemperature($this->getTemperature() + 1);
        }
        $this->setUpTemperature(false);
    }

    function DownTemperature() {
        $this->setDowntemperature(true);
        if ($this->getTemperature() >= 13 && $this->getDowntemperature() == true) {
            $this->setTemperature($this->getTemperature() - 1);
        }

        $this->setDowntemperature(false);
    }

    function DownWindVelocity() {
        if ($this->Winding == true && $this->currentWindVelocity >= 1) {
            $this->setCurrentWindVelocity($this->getCurrentWindVelocity() - 1);
            echo "Current wind's velocity: " . $this->getCurrentWindVelocity() . "\n\r";
        } else {
            echo "You can´t down anymore because, this is the lower wind velocity." . "\n\r";
        }
    }

    function UpWindVelocity() {
        if ($this->Winding == true && $this->currentWindVelocity <= 4) {
            $this->setCurrentWindVelocity($this->getCurrentWindVelocity() + 1);
            ?>
            <br></br>
            <?php
            echo "Current wind's velocity:" . $this->getCurrentWindVelocity();
        } else {
            ?>
            <p> You can´t up anymore because, this is the higher wind velocity. </p>
            <?php
        }
    }

    function getCurrentWindVelocity() {
        return $this->currentWindVelocity;
    }

    function setCurrentWindVelocity($currentWindVelocity) {
        $this->currentWindVelocity = $currentWindVelocity;
    }

    function getUpTemperature() {
        return $this->upTemperature;
    }

    function getDowntemperature() {
        return $this->downtemperature;
    }

    function getTemperature() {
        return $this->Temperature;
    }

    function getUpWindVelocity() {
        return $this->upWindVelocity;
    }

    function getDownWindVelocity() {
        return $this->DownWindVelocity;
    }

    function getWinding() {
        return $this->Winding;
    }

    function setUpTemperature($upTemperature) {
        $this->upTemperature = $upTemperature;
    }

    function setDowntemperature($downtemperature) {
        $this->downtemperature = $downtemperature;
    }

    function setTemperature($Temperature) {
        $this->Temperature = $Temperature;
    }

    function setUpWindVelocity($upWindVelocity) {
        $this->upWindVelocity = $upWindVelocity;
    }

    function setDownWindVelocity($DownWindVelocity) {
        $this->DownWindVelocity = $DownWindVelocity;
    }

    function setWinding($Winding) {
        $this->Winding = $Winding;
    }

}
