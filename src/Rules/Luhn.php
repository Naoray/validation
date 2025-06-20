<?php

declare(strict_types=1);

namespace Intervention\Validation\Rules;

use Intervention\Validation\AbstractRule;

class Luhn extends AbstractRule
{
    /**
     * {@inheritdoc}
     *
     * @see Rule::isValid()
     */
    public function isValid(mixed $value): bool
    {
        return $this->checksumIsValid($this->checksum($value));
    }

    /**
     * Determine if the given checksum is valid
     */
    private function checksumIsValid(int $checksum): bool
    {
        return $checksum % 10 === 0;
    }

    /**
     * Calculate checksum for the given value
     */
    private function checksum(mixed $value): int
    {
        $checksum = 0;
        $reverse = strrev(strval($value));

        foreach (str_split($reverse) as $num => $digit) {
            if (is_numeric($digit)) {
                $checksum += $num & 1 ? ($digit > 4 ? (int) $digit * 2 - 9 : (int) $digit * 2) : $digit;
            } else {
                return -1;
            }
        }

        return (int) $checksum;
    }
}
