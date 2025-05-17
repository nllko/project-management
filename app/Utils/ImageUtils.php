<?php

namespace App\Utils;

class ImageUtils
{
    public static function generateImage($text, $width = "600", $height = "400"): string
    {
        $text = str_replace(" ", "\\n", $text);

        $color1 = fake()->hexColor();
        $color2 = fake()->hexColor();

        $color1  = ltrim($color1, "#");
        $color2  = ltrim($color2, "#");
        return "https://placehold.co/{$width}x{$height}/{$color1}/{$color2}?text={$text}";
    }
}
