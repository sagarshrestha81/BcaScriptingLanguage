<?php

$withdraw = 4500;

function withdraw_cash($withdraw)
{
    $amount = 5000;
    $amount_after = $amount - $withdraw;
    if ($amount_after < 500) {
        return throw new Exception("your balance is low");

    } else {
        echo "your cash out $withdraw";

    }

}



try {
    withdraw_cash($withdraw);

} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo ".thank you";
}

?>