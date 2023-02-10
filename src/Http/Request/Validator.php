<?php

namespace Src\Http\Request;

// use Src\Http\Request\Rules\Required;
// use Src\Http\Request\Rules\Unique;


class Validator {

    public $rules;

    public function make($class){
        
        $this->createRules($class);

        $this->runRules();

    }


    public function createRules($class){
        $object = new $class;
        $this->rules = $object->rules();
    }

    public function runRules(){

        $request = $_POST;

        foreach($request as $key => $value){

            foreach($this->rules[$key] as $rule) {

                $class = $this->resolveClass($rule);
                
                $parameters = $this->resolveParams($rule);
                
                $class->handler($key, $value, $parameters);

            }
        
        }

        if(!empty($_SESSION['errors'])){
            return false;
        }

        return true;
    }


    public function resolveClass($rule){
        $ruleArray = explode(':', $rule);

        $class = 'Src\\Http\\Request\\Rules\\' . ucfirst($ruleArray[0]);

        return new $class();
    }

    public function resolveParams($rule) {
        $ruleArray = explode(':', $rule);

        if(!empty($ruleArray[1])){
            return explode(',', $ruleArray[1]);
        }

        return [];
    }

}