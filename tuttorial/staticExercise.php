<?php
class StringHelper{
    static function countVowel($content){
return substr_count($content, 'a') + substr_count($content, 'i') + substr_count($content, 'e') + substr_count($content, 'o')+ substr_count($content, 'u');
    }
}

echo StringHelper::countVowel("My name is Irakarama Laurent");
?>