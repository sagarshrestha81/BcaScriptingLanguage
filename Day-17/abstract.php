<?php
abstract class BankAccount
{
   function citizenship(){
    return "hello";
   }
}
class IndividualAccount extends BankAccount
{

}

$obj = new IndividualAccount();
echo $obj->citizenship();

