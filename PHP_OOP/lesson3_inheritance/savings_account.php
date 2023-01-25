<?php

require '1_bank_account.php';

class SavingsAccount extends BankAccount
{
    public function addInterest(float $percent) : void
    {
        if ($percent <= 0) {
            die('Percentage should be greater than 0');
        }
        $this->balance = $this->balance + ($this->balance * $percent);
    }
}

$savingsAccount = new SavingsAccount(1000);
$savingsAccount->addInterest(0.05);
echo "Balance after interest added is " . $savingsAccount->getBalance();