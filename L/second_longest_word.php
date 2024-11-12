

<?php

function second_longest_word($str)
{

    $longest = "";
    $secondLongest = "";
    $words = explode(" ", $str);

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $secondLongest = $longest;
            $longest = $word;
        } elseif (strlen($word) > strlen($secondLongest) && $word !== $longest) {
            $secondLongest = $word;
        }
    }
    return $secondLongest;
}


$str1 = "When the week starts it is you get a case of the Mondays";

echo "The second longest word in this sentence is: " . second_longest_word(($str1)), "\n";
