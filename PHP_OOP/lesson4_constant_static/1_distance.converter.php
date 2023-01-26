<?php

class KilometerConverter {
    const NAUTICAL_MILE = 1.852;
    const MILE = 1.60934;
    const YARD = 1093.613;
    const CENTIMETER = 100000;
    private $distanceInKilometers;

    public function __construct($distanceInKilometers) {
        $this->distanceInKilometers = $distanceInKilometers;
    }

    public function convertToNauticalMiles() {
        return $this->distanceInKilometers / self::NAUTICAL_MILE;
    }

    public function convertToMiles() {
        return $this->distanceInKilometers / self::MILE;
    }

    public function convertToYards() {
        return $this->distanceInKilometers / self::YARD;
    }

    public function convertToCentimeters() {
        return $this->distanceInKilometers * self::CENTIMETER;
    }
}

$a = new KilometerConverter(55);
echo $a->convertToCentimeters();