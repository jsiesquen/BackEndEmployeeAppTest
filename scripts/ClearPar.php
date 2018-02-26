<?php
/**
 * Class for extract chars paring
 * Support: PHP 5/7
 * Restrictions:
 *    - Letters are invalids, Show positive numbers only.
 * Execution:
 *       $clearPar = new ClearPar();
 *       echo $clearPar->build('(()()()()(()))))())((())');
 */
class ClearPar
{
    var $outputString = '';

    /**
     * ClearPar constructor.
     */
    function __construct()
    {
    }

    /**
     * Extract chars paring
     * @param null $inputString
     * @return string
     */
    function build($inputString = null)
    {
        preg_match_all('/\(\)/', $inputString, $matching, PREG_OFFSET_CAPTURE);
        if (count($matching[0]) > 0)
        {
            foreach ($matching[0] as $key => $value)
                $this->outputString .= substr($inputString, $value[1], 2);
        }

        return sprintf("Input:\n%s\n\n\nResult:\n%s\n\n", $inputString, $this->outputString);
    }
}

/** @var ClearPar $clearPar */
$clearPar = new ClearPar();
echo $clearPar->build('aognn *236 (()()()()(()))))())((()) asj )()((())');