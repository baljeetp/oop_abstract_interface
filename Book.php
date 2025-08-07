<?php
require_once __DIR__ ."/SalesTaxable.php";
class Book implements SalesTaxable{
    private string $title;
    private float $price;
    function setTitle($title): void{
        $this->title = $title;
    } 
    function getTitle(): string{
        Return $this->title;
    }
    function setPrice($price): void{
        $this->price = $price;
    }
    function getPrice():float{
        return $this->price;
    }

    function getPriceIncludingSalesTax():float{
        return $this->price+(($this->price*5)/100.0);
    }
}
   
