<?php
    require_once "src/RepeatCounter.php";
    {
        class RepeatCounterTest extends PHPUnit_Framework_TestCase
        {
            // test for when both inputs are empty strings
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
            // test for when input_one has a value of "a"
            // and input_two is an empty string
            function test_countRepeats_aNull()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = "a";
                $input_two = (string)"";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("error", $result);
            }
            // test for when input_one is an empty string
            // and input_two has a value of "a"
            function test_countRepeats_nullA()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = (string)"";
                $input_two = "";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("error", $result);
            }
            // test for when input_one has a value of "a"
            // and input_two has a value of "a"
            function test_countRepeats_aA()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = "a";
                $input_two = "a";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("1", $result);
            }
            // test for when input_one has a value of "a"
            // and input_two has a value of "a a"
            function test_countRepeats_aAA()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = "a";
                $input_two = "a a";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("2", $result);
            }
            // test for when input_one has a value of "a"
            // and input_two has a value of "i"
            function test_countRepeats_aI()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = "a";
                $input_two = "i";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("0", $result);
            }

            // test for when input_one has a value of "a"
            // and input_two has a value of "i i"
            function test_countRepeats_aII()
            {
                //arrange
                $test_RepeatCounter = new RepeatCounter;
                $input_one = "a";
                $input_two = "i i";

                //act
                $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

                //assert
                $this->assertEquals("0", $result);
            }
        }
    }
?>
