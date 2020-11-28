<?php
//class for generate a new item on the cart
class Product{

    public $name;
    public $quantity;
    public $price;
    public $totalPrice;

    public function __construct(){}

    public function getName(){
		return $this->name;
		}

		public function setName($name){
			$this->name = $name;
        }
        public function getQuantity(){
            return $this->quantity;
        }
        public function setQuantity($quantity){
            $this->quantity = $quantity;
        }
        public function getPrice(){
            return $this->price;
        }

        public function setPrice($price){
            $this->price = $price;
        }

    public function getTotalPrice(){
        return $this->totalPrice = $this->quantity*$this->price;
        }
}
?>