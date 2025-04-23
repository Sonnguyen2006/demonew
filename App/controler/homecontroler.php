
<?php
require_once __DIR__ . '/../../Model/productModel.php';
class homecontroler
{
    public function index() 
    {
        $product = new productModel();
        $productList = $product->getAllproducts();
        include __DIR__ . "/../view/home/index.php";
    }
}
?>