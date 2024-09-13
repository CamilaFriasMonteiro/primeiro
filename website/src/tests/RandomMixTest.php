<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Service\RandomNumber;
use App\Service\RandomInverse;
use App\Service\RandomMix;

final class RandomMixTest extends TestCase
{
    public function testGenerateKO(): void
    {
        $text = 'aaaAAA';
        $cryptInverse = new RandomInverse($text);
       
        $text = 'sdfsdfsdf'; // first text is take in account to flow by the sequence
        $shift = 2;
        $cryptShift = new RandomNumber($text, $shift);

        $cryptMix = new RandomMix($cryptInverse, $cryptShift);

        $this->assertEquals($cryptMix->generate(), 'CCCccc');
    }

    public function testGenerateOK(): void
    {
        $text = 'Vasco';
        $cryptInverse = new RandomInverse($text);
       
        $text = 'aaaAAA';
        $shift = 2;
        $cryptShift = new RandomNumber($text, $shift);
       
        $cryptMix = new RandomMix($cryptInverse, $cryptShift);
       

        $this->assertNotEquals($cryptMix->generate(), 'xxxxxx');
    }
}