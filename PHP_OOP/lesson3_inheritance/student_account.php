<?php

require '1_bank_account.php';

/* task 1 */
echo "Task 1".PHP_EOL;
class StudentAccount extends BankAccount
{
    public function deposit(int $amount): void
    {
        $this->balance = $this->balance + $amount;
    }
    protected function applyFees(int $amount): int
    {
        return $amount;
    }
}

$studentAccount = new StudentAccount(1000);
$studentAccount->deposit(1000);
echo "Student account balance is: " . $studentAccount->getBalance() . PHP_EOL;
