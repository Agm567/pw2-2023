<?php

class Calculator {
  private $bilangan1;
  private $bilangan2;

  public function __construct($bil1, $bil2) {
    $this->bilangan1 = $bil1;
    $this->bilangan2 = $bil2;
  }

  public function pertambahan() {
    return $this->bilangan1 + $this->bilangan2;
  }

  public function pengurangan() {
    return $this->bilangan1 - $this->bilangan2;
  }

  public function pembagian() {
    return $this->bilangan1 / $this->bilangan2;
  }

  public function perkalian() {
    return $this->bilangan1 * $this->bilangan2;
  }
}


$calculator = new Calculator(10, 5);

echo "Hasil Pertambahan: " . $calculator->pertambahan() . "<br>";
echo "Hasil Pengurangan: " . $calculator->pengurangan() . "<br>";
echo "Hasil Pembagian: " . $calculator->pembagian() . "<br>";
echo "Hasil Perkalian: " . $calculator->perkalian() . "<br>";

?>