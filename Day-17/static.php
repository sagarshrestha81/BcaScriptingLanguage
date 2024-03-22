<?php
class BankAccount{
    static function account(){
        return "im static";
    }
    static function citizenship(){
        return "im citizenship";
    }
}
echo BankAccount::account();
echo BankAccount::citizenship();

