<?php

/*
Sukurkite klasę, kuri skaičiuotų keturkampio plotą, perimetrą ir įstrižainę.
Klasės pavadinimas: Rectangle
Į konstruktorių paduodama: int $length, int $width
Metodai:
- calculateArea()
- calculatePerimeter()
- calculateDiagonal()
Metodai turi grąžinti iki 2 skaitmenų po kablelio į viršų suapvalintą float tipo reikšmę. Pridėkite return tipą metodams.
*/

class Rectangle {
    private int $length;
    private int $width;

    public function __construct(int $length, int $width) {
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea(): float {
        return $this->length * $this->width;
    }
    public function calculatePerimeter(): float {
        return 2 * ($this->length + $this->width);
    }
    public function calculateDiagonal(): float {
        $result = sqrt(pow($this->length, 2) + pow($this->width, 2));
        return round($result, 2);
    }
}

