<?php 

class Nota{

  private int $id;
  private string $name;
  private string $description;
  private int $quantity;
  private float $price;
  private float $discount;

  public function __construct(int $id, string $name, string $description, int $quantity, float $price, float $discount)
  {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->quantity = $quantity ?? 0;
      $this->price = $price;
      $this->discount = $discount;
  }

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getQuantity(){
    return $this->quantity;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getDiscount(){
    return $this->discount;
  }

  public function setDescription($description){
    $this->description = $description;
  }

  public function setPrice($price){
    $this->price = $price;
  }

  public function calculaFatura(){
    $valorFatura = $this->quantity * $this->price;
    return $valorFatura;
  }

}