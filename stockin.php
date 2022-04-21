<?php

include "product_Info.php";
class Stockin extends ProductInfo{

    private $stockin_type;
    private $recieverName;
    private $recievedFrom;

    public function __construct($stockin_type, $recieverName, $recievedFrom) {
        $this->stockin_type = $stockin_type;
        $this->recieverName = $recieverName;
        $this->recievedFrom = $recievedFrom;
    }
    public function getType(){
        return $this->stockin_type;
    }
    public function getrecieverName(){
        return $this->recieverName;
    }
    public function getrecievedFrom(){
        return $this->recievedFrom;
    }
    public function setType($stockin_type){
         $this->stockin_type = $stockin_type;
    }
    public function setrecieverName($recieverName){
        $this->recieverName = $recieverName;
    }
    public function setrecievedFrom($recievedFrom){
        $this->recievedFrom = $recievedFrom;
    }
}
$item = new Stockin(" ", " ", " ");

print_r($item->item2) . '<br>'; //  displaying one of the item (item1)



echo '<br>';

 $item->setType('returned') . '<br>' ;
 $item->setrecieverName('Tim') . '<br>' ;
 $item->setrecievedFrom('John') . '<br>' ;
echo "Stock in type:  " . $item->getType() . '<br>' ;
echo "Reciever name:  " . $item->getrecieverName() . '<br>' ;
echo "Recieved from:  " . $item->getrecievedFrom() . '<br>' ;
echo $item->getType(). '<br>';







?>





