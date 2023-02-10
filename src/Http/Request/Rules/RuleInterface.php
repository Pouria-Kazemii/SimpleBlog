<?php

namespace Src\Http\Request\Rules;


interface RuleInterface {

    public function handler($attribute, $value, array $parameters = []);
    
}