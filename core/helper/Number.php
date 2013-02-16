<?php

namespace core\helper;

class Number
{
	public static function format($number) {
    	$prefixes = 'kMGTPEZY';
	    if ($number >= 1000) {
	        $log1000 = floor(log10($number)/3);
	        return floor($number/pow(1000, $log1000)).$prefixes[$log1000-1];
	    }
	    return $number;
	}
}