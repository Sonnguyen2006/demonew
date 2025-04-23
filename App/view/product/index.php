
<?php
include 'layout/header.php';

?>
<style>
    th{
        text-align: center;
    }
</style>
<div class="panel-heading">
        <h1>Product-info </h1>
    </div>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%;height:75%;  border-collapse: collapse; text-align: center;">
    <thead">
        <tr style="background-color: #f2f2f2;">
            <th style="width: 5%;">ID</th>
            <th style="width: 40%;">Name</th>
            <th style="width: 20%;">Price</th>
            <th style="width: 15%;">Image</th>
            <th style="width: 15%;">action</th>
        </tr>
    </thead>
    <tbody> 
        <?php foreach ($productList as $product): ?>
            <tr>
                <td><?php echo $product['ID']; ?></td>
                <td><?php echo htmlspecialchars($product['Name']); ?></td>
                <td><?php echo number_format($product['Price'], 2); ?> VND</td>
                <td>
                    <img 
                        src="<?= (str_starts_with($product['Image'], 'http')) 
                                ? htmlspecialchars($product['Image']) 
                                : '/ss15/' . str_replace('public/', '', htmlspecialchars($product['Image'])) ?>" 
                        alt="Product Image"
                        width="75%" 
                        style="border-radius: 10px; object-fit: cover;">
                </td>
                <td><a href="/ss15/product/delete/<?= $product['ID'] ?>" onclick="return confirm('Bạn có chắc muốn xoá?')" class="fa-solid fa-trash"></a></td>
                
            
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

include 'layout/footer.php';