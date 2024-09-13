<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Service\RandomNumber;
use App\Service\RandomInverse;
use App\Service\RandomMix;

final class RandomInverseTest extends TestCase
{
    public function testGenerateKO(): void
    {
        $text = 'Vasco';
        $crypt = new RandomInverse($text);
       
        $this->assertEquals($crypt->generate(), 'ocsaV');
    }

    public function testGenerateOK(): void
    {
        $text = 'Vasco';
        $crypt = new RandomInverse($text);
       
        $this->assertNotEquals($crypt->generate(), 'xxxxxx');
    }
}