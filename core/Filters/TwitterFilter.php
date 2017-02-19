<?php

namespace Core\Filters;

class TwitterFilter
{
    const USER_REGEXP = '/(\B@(\w+))/u';

    public static function user($str)
    {
        $replacement = '<a href="https://twitter.com/$2">$1</a>';
        
        return preg_replace(static::USER_REGEXP, $replacement, $str);
    }
}