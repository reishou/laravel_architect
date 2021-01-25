<?php

namespace Extension\DateTime;

use Carbon\CarbonImmutable;
use DateTimeImmutable;
use DateTimeZone;

class DateTimeGenerator
{
    public static function generate(string $time = 'now', DateTimeZone $timezone = null)
    {
        return self::defaultGenerator($time, $timezone);
    }

    private static function defaultGenerator(string $time = 'now', DateTimeZone $timezone = null): DateTimeImmutable
    {
        return new CarbonImmutable($time, $timezone);
    }
}
