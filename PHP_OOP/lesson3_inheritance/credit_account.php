<?php

require '1_bank_account.php';

/* task 3 */
echo "Task 3".PHP_EOL;
class CreditAccount extends BankAccount
{
    protected int $maxCreditAmount;

    public function __construct(int $balance, int $maxCreditAmount)
    {
        if ($balance < 0) {
            $this->balance = 0;
            die('Balance cannot be less than 0');
        }
        //
        $this->balance = $balance;
        $this->maxCreditAmount = $maxCreditAmount;
    }
    public function spend(int $amount): void
    {
        if ($amount > $this->balance + $this->maxCreditAmount) {
            die('Cannot spend more than your balance and max credit amount');
        }
        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }
        $this->balance = $this->balance - $amount;
    }
}

$creditAccount = new CreditAccount(1000,100);
$creditAccount->spend(1200);
echo $creditAccount->getBalance() . PHP_EOL;