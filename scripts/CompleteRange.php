<?php
/**
 * Class for complete the numbers from an input range
 * Support: PHP 5/7
 * Restrictions:
 *    - Letters are invalids, Show positive numbers only.
 *    - If add negative numbers these are remove and the result init from a positive number like 1.
 *    - If add the zero number the result is empty string.
 *    - NOTE: If need show negative numbers, then remove the 35-37 and 42 lines.
 * Execution:
 *       $completeRange = new CompleteRange​();
 *       echo $completeRange->build('5,8,19,34');
 */
class CompleteRange
{
    var $output = array();

    /**
     * CompleteRange​ constructor.
     */
    function __construct()
    {
    }

    /**
     * Return positive integer only
     * @param $value
     * @return bool
     */
    function positiveOnly($value)
    {
        return($value > 0);
    }

    /**
     * Complete Range
     * @param null $inputString
     * @return string
     */
    function build($inputString = null)
    {
        $input = explode(',', $inputString);
        $input = array_filter($input, "CompleteRange​::positiveOnly");
        if (count($input) > 0)
        {
            $range          = range( isset($input[0]) ? $input[0] : 1, array_pop($input));
            $result         = array_diff($range, $input);
            $this->output   = array_merge($input, $result);
            sort($this->output);
        }

        return sprintf("Input:\n%s\n\nResult:\n%s\n\n",
                            $inputString, implode(",",
                            $this->output));
    }
}

/** @var CompleteRange $completeRange */
$completeRange = new CompleteRange();
echo $completeRange->build('3,5,8,19,34');