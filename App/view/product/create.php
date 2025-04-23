<?php
include 'layout/header.php';
?>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Add Product</div>
    <form action="/ss15/product/store" method="POST" enctype="multipart/form-data">
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1">Name</span>
            <input id="Name" name="Name" type="text" class="form-control" placeholder="Name" aria-describedby="sizing-addon1" require>
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon2">Price</span>

            <input id="Price" name="Price" type="text" class="form-control" placeholder="Price" aria-describedby="sizing-addon1" require>
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon3">Image_Inservice</span>
            <input id="ImageFile" name="ImageFile" type="file" class=" form-control" placeholder="Image" aria-describedby="sizing-addon1">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon3">Image</span>
            <input id="ImageURL" name="ImageURL" type="text" class=" form-control" placeholder="Image_link" aria-describedby="sizing-addon1">
        </div>
        <div class="input-group input-group-lg">
            <input type="submit" class=" form-control" aria-describedby="sizing-addon1" value="lưu sản phẩm">
        </div>
    </form>

    <?php

    include 'layout/footer.php';