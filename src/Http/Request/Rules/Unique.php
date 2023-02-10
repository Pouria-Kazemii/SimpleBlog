<?php

namespace Src\Http\Request\Rules;

use Src\Database\QueryBuilder;

class Unique implements RuleInterface {


    public function handler($attribute, $value, array $parameters = [])
    {
        $table = $parameters[0];
        $column = $parameters[1];

        $otherRecords = QueryBuilder::table($table)
            ->select(['title'])
            ->where($column, $value)
            ->get();

        if(count($otherRecords) > 0){
            $_SESSION['errors'][$attribute] = "the $value is already exists in $table";

            return false;
        }

        return true;
    }

}