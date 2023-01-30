<?php

class InventoryException extends Exception { }

class InventoryChecker {
    private $inventory;

    public function __construct() {
        $json = file_get_contents('./inventory.json');
        $this->inventory = json_decode($json, true);
    }

    public function check($product_quantities): void
    {
        $product_quantities = explode(",", $product_quantities);

        foreach ($product_quantities as $product_quantity) {
            list($product_id, $quantity) = explode(":", $product_quantity);

            $product = null;
            foreach($this->inventory as $item){
                if($item["product_id"] == $product_id){
                    $product = $item;
                    break;
                }
            }

            if (!$product) {
                throw new InventoryException("product \"$product_id\" is not in the inventory");
            }

            if ($product['quantity'] < $quantity) {
                throw new InventoryException("product \"$product_id\" only has " . $product['quantity'] . " items in the inventory");
            }
        }
    }
}

$checker = new InventoryChecker();

try {
    $product_quantities = $argv[1];
    $checker->check($product_quantities);
    echo "all products have the requested quantity in stock";
} catch (InventoryException $e) {
    echo $e->getMessage();
    $log_message = date("Y-m-d H:i:s") . " " . $e->getMessage() . "\n";
    file_put_contents("log.txt", $log_message, FILE_APPEND);
}
