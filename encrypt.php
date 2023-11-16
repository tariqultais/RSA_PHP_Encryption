<?php

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function generatePrimeNumber()
{
    $min = 100;
    $max = 999;
    $primeNumbers = [];
    while (count($primeNumbers) < 2) {
        $number = mt_rand($min, $max);
        if (isPrime($number)) {
            $primeNumbers[] = $number;
        }
    }
    return $primeNumbers;
}

function gcd($a, $b)
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

list($p, $q) = generatePrimeNumber();

$n = $p * $q;
$phi = ($p - 1) * ($q - 1);

$e = 2;
while ($e < $phi) {
    if (gcd($e, $phi) == 1) {
        break;
    }
    $e++;
}

$d = 1;
while (true) {
    if (($d * $e) % $phi == 1) {
        break;
    }
    $d++;
}

$message = $_POST['message'];

$encryptedMessage = bcpowmod($message, $e, $n);

echo "<h2>Public Key (e, n): ($e, $n)</h2>";
echo "<h2>Private Key (d, n): ($d, $n)</h2>";
echo "<h2>Encrypted Message (Ciphertext): $encryptedMessage</h2>";
?>
