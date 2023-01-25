<?php

require "1_bank_account.php";

/* task 2 */
echo "Task 2".PHP_EOL;
class ChildAccount extends BankAccount
{
    public function spend(int $amount): void
    {
        if ($amount > 10) {
            die('Cannot spend more than $10 at once');
        }

        if ($amount > $this->balance) {
            die('Cannot spend more than you have');
        }

        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }

        $this->balance = $this->balance - $amount;
    }
}

$childAccount = new ChildAccount(1000);
$childAccount->spend(10);
echo $childAccount->getBalance() . PHP_EOL;
