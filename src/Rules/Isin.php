<?php

declare(strict_types=1);

namespace Intervention\Validation\Rules;

class Isin extends Luhn
{
    /**
     * Chars to calculate checksum
     *
     * @var array<int, string>
     */
    private array $chars = [
        10 => 'A',
        11 => 'B',
        12 => 'C',
        13 => 'D',
        14 => 'E',
        15 => 'F',
        16 => 'G',
        17 => 'H',
        18 => 'I',
        19 => 'J',
        20 => 'K',
        21 => 'L',
        22 => 'M',
        23 => 'N',
        24 => 'O',
        25 => 'P',
        26 => 'Q',
        27 => 'R',
        28 => 'S',
        29 => 'T',
        30 => 'U',
        31 => 'V',
        32 => 'W',
        33 => 'X',
        34 => 'Y',
        35 => 'Z',
    ];

    /**
     * {@inheritdoc}
     *
     * @see Rule::isValid()
     */
    public function isValid(mixed $value): bool
    {
        return parent::isValid($this->normalize($value));
    }

    /**
     * Get value to check against
     */
    public function normalize(string $value): string
    {
        return $this->replaceChars($this->valueWithoutLastDigit($value)) . $this->lastDigit($value);
    }

    /**
     * Replace chars in given value with corresponding numbers
     */
    private function replaceChars(string $value): string
    {
        return str_replace(
            $this->chars,
            array_map(fn(int $value): string => strval($value), array_keys($this->chars)),
            $value,
        );
    }

    /**
     * Return value without last digit
     */
    private function valueWithoutLastDigit(string $value): string
    {
        return substr($value, 0, -1);
    }

    /**
     * Return last digit of current value
     */
    private function lastDigit(string $value): string
    {
        return substr($value, -1);
    }
}
