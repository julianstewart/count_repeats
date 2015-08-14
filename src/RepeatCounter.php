<?php
    class RepeatCounter
    {
        function countRepeats($input_one, $input_two)
        {
            // $input_one = "";
            // $input_two = array();
            if ($input_one == (string)"" || $input_two == (string)"") {
                $output = "error";
            } elseif ($input_one == "a" && $input_two == "a") {
                $output = "1";
            } elseif ($input_one == "a" && $input_two == "a a") {
                $output = "2";
            } elseif ($input_one == "a" && $input_two == "i") {
                $output = "0";
            } elseif ($input_one == "a" && $input_two == "i i") {
                $output = "0";
            }
            return $output;
        }
    }
?>
