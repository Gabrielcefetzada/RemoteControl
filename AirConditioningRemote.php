<?php

include_once 'TVRemote.php';

class AirConditioningRemote extends Remote {

    private $upTemperature; // buttons must be on boolean values.
    private $downtemperature;
    private $temperature;
    private $upWindVelocity;
    private $downWindVelocity;
    private $winding;
    private $currentWindVelocity;

    function __construct($power, $pieces, $buttonsQuantity, $upTemperature, $downtemperature, $upWindVelocity, $downWindVelocity) {
        parent::__construct($power, $pieces, $buttonsQuantity);
        $this->upTemperature = $upTemperature;
        $this->downtemperature = $downtemperature;
        $this->upWindVelocity = $upWindVelocity;
        $this->DownWindVelocity = $downWindVelocity;
        $this->temperature = 20;
        $this->winding = true;
        $this->currentWindVelocity = 1;
    }

    function UpTemperature() {
        $this->setUpTemperature(true);
        if ($this->getTemperature() <= 30 && $this->getUpTemperature() == true && $this->getPower() == true) {
            $this->setTemperature($this->getTemperature() + 1);
        }
        $this->setUpTemperature(false);
    }

    function DownTemperature() {
        $this->setDowntemperature(true);
        if ($this->getTemperature() >= 13 && $this->getDowntemperature() == true && $this->getPower() == true) {
            $this->setTemperature($this->getTemperature() - 1);
        }

        $this->setDowntemperature(false);
    }

    function DownWindVelocity() {
        if ($this->winding == true && $this->currentWindVelocity >= 1 && $this->getPower() == true) {
            $this->setCurrentWindVelocity($this->getCurrentWindVelocity() - 1);
            echo "Current wind's velocity: " . $this->getCurrentWindVelocity() . "\n\r";
        } else {
            echo "You can´t down anymore because, this is the lower wind velocity." . "\n\r";
        }
    }

    function UpWindVelocity() {
        if ($this->winding == true && $this->currentWindVelocity <= 4 && $this->getPower() == true) {
            $this->setCurrentWindVelocity($this->getCurrentWindVelocity() + 1);
            ?>
            <br></br>
            <?php
            echo "Current wind's velocity:" . $this->getCurrentWindVelocity();
        } else {
            ?>
            <br></br>
            <?php
            echo "You can´t up anymore because, this is the higher wind velocity.";      
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
        return $this->temperature;
    }

    function getUpWindVelocity() {
        return $this->upWindVelocity;
    }

    function getDownWindVelocity() {
        return $this->downWindVelocity;
    }

    function getWinding() {
        return $this->winding;
    }

    function setUpTemperature($upTemperature) {
        $this->upTemperature = $upTemperature;
    }

    function setDowntemperature($downtemperature) {
        $this->downtemperature = $downtemperature;
    }

    function setTemperature($temperature) {
        $this->temperature = $temperature;
    }

    function setUpWindVelocity($upWindVelocity) {
        $this->upWindVelocity = $upWindVelocity;
    }

    function setDownWindVelocity($downWindVelocity) {
        $this->downWindVelocity = $downWindVelocity;
    }

    function setWinding($winding) {
        $this->winding = $winding;
    }

}
