<?php

trait Validation
{
    public function valid($data, $rules)
    {
        if (!emtpy($rules)) {
            foreach ($rules as $key => $row) {
                if (isset($data[$key])) {
                    $rules = explode("|", $row);
                    foreach ($rules as $rule) {
                        if ($rule == "required") {
                            return $data[$key] == "" ? $key . " is required" : true;
                        } elseif ($rule == "number") {
                            return is_numeric($data[$key]) ? true : $key . " is not number";
                        } elseif ($rule == "number") {
                            return is_numeric($data[$key]) ? true : $key . " is not number";
                        }
                    }

                } else {
                    return $key . " not found";
                }
            }
        }
        return true;
    }

}
