<?php
use PHPUnit\Framework\TestCase;

class CpfValidatorTest extends TestCase
{
    public function testValidCpf()
    {
        $this->assertTrue(CpfValidator::validate('12345678909')); // Exemplo de CPF válido
    }

    public function testInvalidCpf()
    {
        $this->assertFalse(CpfValidator::validate('12345678900')); // Exemplo de CPF inválido
    }

    public function testCpfWithInvalidLength()
    {
        $this->assertFalse(CpfValidator::validate('1234567890')); // Exemplo de CPF com comprimento inválido
    }

    public function testCpfWithNonNumericCharacters()
    {
        $this->assertTrue(CpfValidator::validate('123.456.789-09')); // Exemplo de CPF válido com caracteres não numéricos
    }

    public function testKnownInvalidCpf()
    {
        $this->assertFalse(CpfValidator::validate('11111111111')); // Exemplo de CPF conhecido como inválido
    }
}
