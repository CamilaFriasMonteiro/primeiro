<?php

namespace App\Service;

Class RandomNumber implements RandomInterface
{

    const SEQUENCE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    
    public function __construct(public string $text, public int $shift)
    {
    }

    public function generate():string
    {
        $crypt = '';
        $this->shift = $this->shift <= strlen(self::SEQUENCE) ? $this->shift : $this->shift%strlen(self::SEQUENCE);

        for ($i=0; $i<strlen($this->text); $i++){
            
            $char = strpos(self::SEQUENCE, $this->text[$i])!==false?self::SEQUENCE[(strpos(self::SEQUENCE, $this->text[$i])+$this->shift) % 52]:$this->text[$i];
            $crypt .= $char;
        }

        return $crypt;
    }

    public function generateInterval(int $min, int $max): int{

        return rand($min, $max);

    }


}