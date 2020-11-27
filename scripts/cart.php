<?php
//class for generate a new item on the cart
class Product{

    public $name;
    public $quantity;
    public $price;
    public $total;

    public function __construct($name, $quantity=0, $price=0){
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    //get the total price of the product quantity
    public function getTotal(){
        return $this->total = $this->quantity*$this->price;

    }
    //return item info
    public function getInfo(){
        $info = "<h1>Informacion del producto:</h1>";
        $info.= "Producto: ".$this->name;
        $info.= "<br/>Cantidad: ".$this->quantity;
        $info.= "<br/> Total: ".$this->getTotal();
        return $info;
    }

}

$a = new Product($_POST["name"],$_POST["quantity"],$_POST["price"]);

    echo $a->getInfo();

?>