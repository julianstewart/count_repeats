<?php
    require_once "src/CountRepeats.php";
    {
        class CountRepeatsTest extends PHPUnit_Framework_TestCase
        {
            // test for when there is no user input detected
            function test_null_null ()
            {
                //arrange
                $test_CountRepeats = new CountRepeats;
                $input_one = (string)"";
                $input_two = (string)"";

                //act
                $result = $test_CountRepeats->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("error", $result);
            }
        }
    }
?>
