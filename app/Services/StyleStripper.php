<?php

namespace App\Services;

class StyleStripper
{

    public function strip($html)
    {
        $pattern = '/style="([^"]*)" ?/i';
        $stripped = preg_replace($pattern, '', $html);

        $twoSpaces = '/<[^>]*  /i';
        $noDoubleSpaces =  preg_replace($twoSpaces, ' ', $stripped);

        $endingSpace = '/\s{1}>/';
        return preg_replace($endingSpace, '>', $noDoubleSpaces);
    }
}
