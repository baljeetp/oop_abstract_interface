<?php
require_once __DIR__ ."/Book.php";
require_once __DIR__ ."/Donut.php";


   $book1=new Book();
   $book1->setTitle("Life of Pi");
   $book1->setPrice(21.0);
   echo "Book \"".$book1->getTitle()."\"\n";
   echo "Price (excl. tax) = \$".$book1->getPrice() ."\n";
   echo "price (incl. tax) = $".$book1->getPriceIncludingSalesTax()."\n";

   echo "\n";
   
  $donut1=new Donut();
  $donut1->setTopping("strawberry icing");
  $donut1->setPrice(10.00);
  echo "Donut \"".$donut1->getTopping()."\"\n";
  echo "Price (excl. tax) = \$".$donut1->getPrice() ."\n";
  echo "price (incl. tax) = $".$donut1->getPriceIncludingSalesTax()."\n"; 