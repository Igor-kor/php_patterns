<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 12:26
 */

namespace ChainOfResponsibility;


abstract class Account
{
    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Оплата %s, используя %s' . PHP_EOL, $amountToPay, get_called_class());
        } elseif ($this->successor) {
            echo sprintf('Нельзя заплатить, используя %s. Обработка ..' . PHP_EOL, get_called_class());
            $this->successor->pay($amountToPay);
        } else {
            throw new \Exception('Ни на одном из аккаунтов нет необходимого количества денег');
        }
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}