<?php
//array a contains the article atributes
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
    public function getTotal(){
        return $this->total = $this->quantity*$this->price;

    }
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