<?php
require_once __DIR__ ."/SalesTaxable.php";
class Donut implements SalesTaxable{
  private string $topping;
  private float $price;
  public function setTopping($topping): void{
    $this->topping = $topping;
  }
  public function getTopping(): string{
    return $this->topping;
   }
   function setPrice($price): void{
    $this->price = $price;
   }
   public function getPrice():float{
     return $this->price; 
  }

  function getPriceIncludingSalesTax():float{
        return $this->price+(($this->price*7)/100.0);
    }

}
