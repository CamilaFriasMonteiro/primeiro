<?php

namespace App\Service;

Class RandomMix implements RandomInterface
{

    /**
     * @var array<int|string, \App\Service\RandomInterface>
     */
    public $multiple;
    
    public function __construct(RandomInterface ...$multiple)
    {
        $this->multiple = $multiple;
    }

    public function generate():string
    {
        $output = null;

        foreach($this->multiple as $crypt){
            
            if ($output !== null){

                $crypt->text = $output; 
            }
            
            $output = $crypt->generate();
        }

        return $output;
    }
}