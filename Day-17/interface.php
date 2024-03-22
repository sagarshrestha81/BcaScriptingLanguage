<?php

interface BankAccount
{
   function citizenship();

}
interface Insurance {
     function person_detail();
}
class IndividualAccount implements Insurance,BankAccount
{ 
    function citizenship(){
echo "hello";
    }
    function detail(){

    }
    function person_detail(){

    }


}
$obj = new IndividualAccount();
$obj->citizenship();
echo "<br/>";