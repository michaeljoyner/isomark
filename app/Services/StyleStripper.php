<?php

namespace App\Services;

class StyleStripper
{

    public function strip($html)
    {
        $stripped = $this->stripStyleAttribute($html);
        $noDoubleSpaces =  $this->stripDoubleSpaces($stripped);
        return $this->stripEndingSpace($noDoubleSpaces);
    }

    private function stripStyleAttribute($html)
    {
        $pattern = '/style="([^"]*)" ?/i';
        return preg_replace($pattern, '', $html);
    }

    private function stripDoubleSpaces($html)
    {
        $twoSpaces = '/<[^>]*  /i';
        return preg_replace($twoSpaces, ' ', $html);
    }

    private function stripEndingSpace($html)
    {
        $endingSpace = '/\s{1}>/';
        return preg_replace($endingSpace, '>', $html);
    }
}
