<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập Array</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
</head>
<body>
    <?php
    include ('lib/products.php'); //lỗi nhưng vẫn chạy tiếp các câu lệnh tiếp theo
    //include_once('lib/products.php'); //kiểm tra tồn tại, rồi mới include
    // require ('lib/products.php'); dừng lại hẳn
    // require_once: tương tự
    ?>

     <div class="container">
        <?php 
        foreach($arrProduct as $product){
        ?>
         <div class="product">
            <div class="image">
                <img src="<?=$link.$product['image']?>">
            </div>
            <div class="info">
                <div class="name"><?= $product['name']?></div> 
                <!-- Hoac: <?php echo $product['name']; ?> -->
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name"><?= $product['name']?></p>
                <p class="price"><?=number_format($product['price'], 0, ',', '.')?> VNĐ</p>
                <!-- number_format: định dạng số -->
            </div>
         </div>
        <?php }
        ?>
        <!-- <div class="product">
            <div class="image">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="info">
                <div class="name">Iphone XS Max</div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">Iphone XS Max</p>
                <p class="price">35000000 VND</p>
            </div>
        </div>
        <div class="product">
            <div class="image">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="info">
                <div class="name">Iphone XS Max</div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">Iphone XS Max</p>
                <p class="price">35000000 VND</p>
            </div>
        </div>
        <div class="product">
            <div class="image">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="info">
                <div class="name">Iphone XS Max</div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">Iphone XS Max</p>
                <p class="price">35000000 VND</p>
            </div>
        </div>
        <div class="product">
            <div class="image">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="info">
                <div class="name">Iphone XS Max</div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">Iphone XS Max</p>
                <p class="price">35000000 VND</p>
            </div>
        </div>
        <div class="product">
            <div class="image">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="info">
                <div class="name">Iphone XS Max</div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">Iphone XS Max</p>
                <p class="price">35000000 VND</p>
            </div>
        </div>
        <div class="product">
            <div class="image">
                <img src="images/iphone-xs-max-gray-400x460.png">
            </div>
            <div class="info">
                <div class="name">Iphone XS Max</div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">Iphone XS Max</p>
                <p class="price">35000000 VND</p>
            </div>
        </div>
    </div> -->
</body>
</html>