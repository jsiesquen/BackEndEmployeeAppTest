<?php
/**
 * Class for replace each letter of a word with the next letter of the alphabet.
 * Support: PHP 5/7
 * Restrictions:
 *    - Work with some characters of latin-alfhabet; exception tilde letters.
 * Execution:
 *       $changeString = new ChangeString();
 *       echo $changeString->build('123 abcd*3');
 */
class ChangeString
{
    var $charsGroupSupported    = array();
    var $evaluatedString        = '';
    var $transformedString      = '';

    /**
     * ChangeString constructor.
     */
    function __construct()
    {
        /* Support characters range */
        $this->charsGroupSupported = array(
            array_merge(range('A', 'N'), array('Ñ'), range('O', 'Z')),
            array_merge(range('a', 'n'), array('ñ'), range('o', 'z'))
        );
    }

    /**
     * @param $char
     * @return string
     */
    function getNewCharacter($char)
    {
        $newCharacter   = '';
        foreach ($this->charsGroupSupported as $key => $characters)
        {
            $charactersGroup    = $this->charsGroupSupported[$key];
            $indexChar          = (array_search($char, $charactersGroup));
            if ($indexChar !== false)
            {
                $newCharacter = @$charactersGroup[$indexChar + 1];
            }
            if (is_null($newCharacter))
            {
                $newCharacter = $charactersGroup[0];
                break;
            }
        }

        return ($newCharacter === '') ? $char : $newCharacter;
    }

    /**
     * Build New String
     * @param null $inputString
     * @return string
     */
    function build($inputString = null)
    {
        if ($inputString !== null)
        {
            $this->evaluatedString      = $inputString;
            $this->transformedString    = implode(array_map(array($this, 'getNewCharacter'),
                str_split($this->evaluatedString, 1)));
        }

        $this->transformedString = preg_replace("[Ñ]", "O", $this->transformedString);
        $this->transformedString = preg_replace("[ñ]", "o", $this->transformedString);

        return sprintf("Input:\n%s\n\nOutput:\n%s\n",
                                    $this->evaluatedString,
                                    $this->transformedString);
    }
}

/** @var ChangeString $changeString */
$changeString = new ChangeString();
echo $changeString->build('¡¡ Kz chqdbbhñm cd lh bzrz dr Bnlazsd cd Zmfzlnr 705 E303 ** !!');