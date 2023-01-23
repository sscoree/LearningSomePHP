<?php

/*
Sukurkite klasę NumberCalculator, kuri leistų atlikti įvairius skaičiavimo veiksmus. Ši klasė neturės konstruktoriaus.
Metodai:
- addNumber - metodas priims "int" tipo argumentą, return tipas bus "void"
- calculateSum - metodas grąžins "int" tipo reikšmę, argumentų neturės
- calculateProduct - product liet. sandauga. Metodas grąžins "int" tipo reikšmę, argumentų neturės
- calculateAverage - suapvalinkite iki sveiko skaičiaus, į viršų. Metodas grąžins "int" tipo reikšmę, argumentų neturės
Nepamirškite sudėti argumentų bei return tipų.
Kodo kvietimo pavyzdys:
$numberCalculator = new NumberCalculator();
echo $numberCalculator->calculateSum(); // 0
$numberCalculator->addNumber(5);
$numberCalculator->addNumber(7);
echo $numberCalculator->calculateSum(); // 12
*/

class NumberCalculator {
    private array $numbers = [];
    public function addNumber(int $number): void
    {
        $this->numbers[] = $number;
    }
    public function calculateSum(): int
    {
        return array_sum($this->numbers);
    }
    public function calculateProduct(): int {
        return array_product($this->numbers);
    }
    public function calculateAverage(): int {
        $average = array_sum($this->numbers) / count($this->numbers);
        return ceil($average);
    }
}