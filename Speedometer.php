<?php

class Speedometer 
{
    const COEFCONVKMTOMILES = 0.621;
    const COEFCONVMILESTOKM = 1.609;

    public static function convertKmToMiles(int $km): float
    {
        return $km * self::COEFCONVKMTOMILES;
    }

    public static function convertMilesToKm(int $miles): float
    {
        return $miles * self::COEFCONVMILESTOKM;
    }
}