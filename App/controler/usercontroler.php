<?php
class usercontroler
{
    public function product() {
        include  __DIR__ . '/../view/user/index.php';
    }
    public function create(){
        echo "create in product";
    }
}




?>