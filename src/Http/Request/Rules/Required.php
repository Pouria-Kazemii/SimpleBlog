<?php

namespace Src\Http\Request\Rules;


class Required implements RuleInterface {

    public function handler($attribute, $value, $parameters = []){
        
        if(empty($value)){
            
            $_SESSION['errors'][$attribute] = "the $attribute is required";

            return false;
        }

        return true;
    }

}