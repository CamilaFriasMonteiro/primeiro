<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Service\RandomNumber;
use App\Service\RandomInverse;
use App\Service\RandomMix;

final class RandomNumberTest extends TestCase
{
    public function testGenerateKO(): void
    {
        $text = 'aaaAAA';
        $shift = 2;
        $crypt = new RandomNumber($text, $shift);
       
        $this->assertEquals($crypt->generate(), 'cccCCC');
    }

    public function testGenerateOK(): void
    {
        $text = 'aaaAAA';
        $shift = 2;
        $crypt = new RandomNumber($text, $shift);
       
        $this->assertNotEquals($crypt->generate(), 'xxxxxx');
        $this->assertIsInt($crypt->generateInterval(10,20));
    }

}