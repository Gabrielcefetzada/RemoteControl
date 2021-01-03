<?php

class TVRemote {

    private $upSound;
    private $downSound;
    private $currentSound;
    private $upChannel;
    private $downChannel;
    private $currentChannel;
    private $currentMute;
    private $smartTV;

    function __construct($power, $pieces, $buttonsQuantity, $upSound, $downSound, $upChannel, $downChannel) {
        parent::__construct($power, $pieces, $buttonsQuantity);
        $this->upSound = $upSound;
        $this->downSound = $downSound;
        $this->currentSound = 15;
        $this->upChannel = $upChannel;
        $this->downChannel = $downChannel;
        $this->currentChannel = 2;
        $this->currentMute = false;
        $this->smartTV = false;
    }

    function SmartTv($option) {
        $this->setSmartTV(true);
        ?>
        <h1>Options</h1>
        <?php
        echo "1 - Netflix";
        ?>
        <br></br>
        <?php
        echo "2 - Youtube";
        ?>
        <br></br>
        <?php
        echo "3 - DisneyPlus";
        ?>
        <br></br>
        <?php
        if ($this->getSmartTV() == true && $this->getPower() == true) {
            switch ($option) {
                case 1:
                    echo "Netflix selected";
                case 2:
                    echo "Youtube selected";
                case 3:
                    echo "DisneyPlus selected";
                default:
                    echo "This is not a valid option. Try again.";
            }
        }
        $this->setSmartTV(false);
    }

    function getUpSound() {
        return $this->upSound;
    }

    function getDownSound() {
        return $this->downSound;
    }

    function getCurrentSound() {
        return $this->currentSound;
    }

    function getUpChannel() {
        return $this->upChannel;
    }

    function getDownChannel() {
        return $this->downChannel;
    }

    function getCurrentChannel() {
        return $this->currentChannel;
    }

    function getCurrentMute() {
        return $this->currentMute;
    }

    function getSmartTV() {
        return $this->smartTV;
    }

    function setUpSound($upSound) {
        $this->upSound = $upSound;
    }

    function setDownSound($downSound) {
        $this->downSound = $downSound;
    }

    function setCurrentSound($currentSound) {
        $this->currentSound = $currentSound;
    }

    function setUpChannel($upChannel) {
        $this->upChannel = $upChannel;
    }

    function setDownChannel($downChannel) {
        $this->downChannel = $downChannel;
    }

    function setCurrentChannel($currentChannel) {
        $this->currentChannel = $currentChannel;
    }

    function setCurrentMute($currentMute) {
        $this->currentMute = $currentMute;
    }

    function setSmartTV($smartTV) {
        $this->smartTV = $smartTV;
    }

}
