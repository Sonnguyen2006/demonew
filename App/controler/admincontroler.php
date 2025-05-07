<?php
require_once __DIR__ . "/../../Model/adminModel.php";

class admincontroler{
    public function index()
    {
        include "App/view/admin/index.php";
    }
};

?>