<?php
require_once __DIR__ . '/../../Model/productModel.php';
class productcontroler 
{
    public function product() 
    {
        $product = new productModel();
        $productList = $product->getAllproducts();
        include __DIR__ . '/../view/product/index.php';
    }   

    public function create()
    {
        include __DIR__ . '/../view/product/create.php';
    }
    
    public function store()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['Name'];
        $price = $_POST['Price'];
        $imageName = '';

        // Xử lý ảnh upload
        if (isset($_FILES['ImageFile']) && $_FILES['ImageFile']['error'] === 0) {
            $tmpName      = $_FILES['ImageFile']['tmp_name'];
            $originalName = basename($_FILES['ImageFile']['name']);

            // Thư mục lưu file (đảm bảo đúng tên và tồn tại)
            $uploadDir = __DIR__ . '/../../public/upload/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Tên file duy nhất
            $filename = uniqid() . '_' . $originalName;


            // Di chuyển file
            if (move_uploaded_file($tmpName, $uploadDir . $filename)) {
                $imageName = 'upload/' . $filename;
            } else {
                die("Không thể lưu file ảnh.");
            }   
        }
        // Nếu không upload, dùng ảnh từ URL
        elseif (!empty($_POST['ImageURL'])) {
            $imageName = $_POST['ImageURL'];
        }

        // Ghi vào DB
        $product = new productModel();
        $product->add($name, $price, $imageName);


        // Redirect về danh sách
        header("Location: /ss15/product/product");
        exit;
    } else {
        die("Truy cập không hợp lệ!");
    }
}
    public function delete($id)
{
    
    $product = new productModel();
    $product->delete($id);

    header("Location: /ss15/product/product");
    exit;
}
}

?>