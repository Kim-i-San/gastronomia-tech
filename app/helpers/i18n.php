<?php

function t(string $key, ?string $fallback = null): string
{
    global $translations;

    $value = $translations;

    foreach (explode('.', $key) as $segment) {
        if (!is_array($value) || !array_key_exists($segment, $value)) {
            return $fallback ?? $key;
        }

        $value = $value[$segment];
    }

    return is_string($value) ? $value : ($fallback ?? $key);
}