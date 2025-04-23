    <?php 
    require "App/controler/productcontroler.php";
    require_once "App/controler/usercontroler.php";
    require_once "App/controler/homecontroler.php";
    require_once "App/controler/cartcontroler.php";
    
    // $url = $_GET['url'];

    // $urlArr = explode('/',$url);

    // $controlerclassname = $urlArr[0] . "controler";
    // $controler = new $controlerclassname();
    // call_user_func([$controler,$urlArr[1]]); 

// if($urlArr[0] == "product"){
//     $controler = new productcontroler();
//     if($urlArr[1] == "crate"){
//         $controler ->crate();
//     }else{
//         $controler ->product();
//     }


// }else if($urlArr[0] == "user"){
//     $controler = new usercontroler();
//     if($urlArr[0] == "crate"){
//         $controler ->crate();
//     }else{
//         $controler ->product();
//     }
// }
$url = $_GET['url'] ?? 'product/product'; // Mặc định trang sản phẩm

$urlArr = explode('/', $url);

// Kiểm tra controller và method có tồn tại không
$controllerName = $urlArr[0] . 'controler';
$method = $urlArr[1] ?? 'product';
$param = $urlArr[2] ?? null; // lấy id nếu có

if (class_exists($controllerName) && method_exists($controllerName, $method)) {
    $controller = new $controllerName();

    if ($param) {
        call_user_func([$controller, $method], $param); // gọi method với tham số
    } else {
        call_user_func([$controller, $method]);
    }
} else {
    echo "404 - Không tìm thấy controller hoặc method.";
}
?>