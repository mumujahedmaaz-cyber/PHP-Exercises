<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        for ($i = 0; $i < count($digitsOfNumber1) ; $i++)
            {
                $number1 .= (string)$digitsOfNumber1[$i];
            }
        for ($i = 0; $i < count($digitsOfNumber2) ; $i++)
            {
                 $number2 .= (string)$digitsOfNumber2[$i];
            }
        $number1 = (int)$number1;
        $number2 = (int)$number2;
        return $number1 + $number2;
    }

    public function isPalindrome(int $number): bool
    {
        $rev_num = strrev($number);
        if ($rev_num == $number)
        {
            return true;
        } else {
            return false;
        }
    }

    public function validate(string $input): string
    {
        if ($input === '') {
            return 'Required field';
        } else if ((int) $input <= 0) {
            return 'Must be a whole number larger than 0';
        } else {
            return '';
        }
    }
}
