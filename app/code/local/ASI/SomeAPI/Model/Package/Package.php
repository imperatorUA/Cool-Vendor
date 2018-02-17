<?php
namespace SomeAPI\conrollers\Package;

class Package {

    private $store = [];
    private $isFullPackage = true;
    private $isCreatedPackage = false;

    public function __construct($bearer_token, $version, $command, $params) {
        $this->store['bearer_token'] = $bearer_token;
        $this->store['version']      = $version;
        $this->store['command']      = $command;
        $this->store['params']       = $params;

        if( $bearer_token    == false ||
            $bearer_token    == '' ||
            $version         == '' ||
            $command         == ''
        ) {
            $this->isFullPackage = false;
        }

        $this->isCreatedPackage = true;
    }

    public function set($key, $value){
        $this->store[$key] = $value;
    }

    public function get($key){
        if ($this->IsFullPackage()) {
            return $this->store[$key];
        }
    }

    public function IsFullPackage(){
        return $this->isCreatedPackage && $this->isFullPackage;
    }
}