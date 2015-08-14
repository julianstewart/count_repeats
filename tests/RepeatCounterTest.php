<?php
    require_once "src/RepeatCounter.php";
    {
        class RepeatCounterTest extends PHPUnit_Framework_TestCase
        {
            // test for when there is no user input detected
            function test_countRepeats_nullNull()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = (string)"";
                $input_two = (string)"";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("error", $result);
            }
        }
    }
?>