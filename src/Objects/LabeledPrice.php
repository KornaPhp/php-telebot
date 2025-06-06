<?php

namespace WeStacks\TeleBot\Objects;

use WeStacks\TeleBot\Foundation\TelegramObject;

/**
 * This object represents a portion of the price for goods or services.
 * @property-read string $label Portion label
 * @property-read int $amount Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @see https://core.telegram.org/bots/api#labeledprice
 */
class LabeledPrice extends TelegramObject
{
    public function __construct(
        public readonly string $label,
        public readonly int $amount,
    ) {
    }
}
