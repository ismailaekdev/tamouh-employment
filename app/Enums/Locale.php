<?php

declare(strict_types=1);

namespace App\Enums;


enum Locale: string 
{
    case En = 'en';
    case Ar = 'ar';


    public function getLabel(): string
    {
        return match ($this) {
            self::En => __('English'),
            self::Ar => __('Arabic'),
        };
    }

    public function getNativeLabel(): string
    {
        return match ($this) {
            self::En => 'English',
            self::Ar => 'العربية',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
