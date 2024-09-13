<?php

namespace App\Service;

Class RandomInverse implements RandomInterface
{
    public function __construct(public string $text)
    {
    }

    public function generate():string
    {
        $crypt = array();
        $words = explode(' ', $this->text); 

        foreach ($words as $word){
            $crypt []= strrev($word);
        }
        
        return implode(' ',$crypt);
    }
}