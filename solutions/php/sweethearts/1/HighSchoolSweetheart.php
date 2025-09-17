<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return strtoupper(HighSchoolSweetheart::firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        $fullName = explode(" ", $name);
        $first = $fullName[0];
        $last = $fullName[1];
        return HighSchoolSweetheart::initial($first) . " " . HighSchoolSweetheart::initial($last);    
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $first = HighSchoolSweetheart::initials($sweetheart_a);
        $second = HighSchoolSweetheart::initials($sweetheart_b);
        $heart = <<<END
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **     $first  +  $second     **
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    END;
        return $heart;
    }
}
