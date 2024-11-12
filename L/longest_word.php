

<?php

function longest_word($str)
{

    $words = explode(' ', $str);
    $longestWord = " ";
    foreach ($words as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }
    return $longestWord;
}


$str = "The quick brown fox jumps over the lazy dog";
echo "The longest word is: " . longest_word($str), "\n";
