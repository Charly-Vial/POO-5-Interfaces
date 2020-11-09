<?php

interface LightableInterface
{   
    public function getLight() :string;
    public function switchOn() :void;
    public function switchOff() :void;
}
