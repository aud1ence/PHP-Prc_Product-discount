<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="value"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator </title>
    <style type="text/css">
        .nhapvao {
            width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .nhapvao input {
            padding:5px; margin:5px
        }
    </style>

</head>
<body>
<form method="post" action="display_discount.php">
    <div class="nhapvao">
        <h2>Product Discount Calculator </h2>
        <label>
            Product Description:
            <input type="text" name="des" size="20"  placeholder="Mô tả của sản phẩm" />
        </label>
        <label>
            List Price:
            <input type="text" name="price" size="20" placeholder="Giá niêm yết của sản phẩm" />
        </label>
        <label>
            Discount Percent:
            <input type="text" name="percent" size="20" placeholder="Tỷ lệ chiết khấu (phần trăm)" />
        </label>
        <input type="submit" value="Calculate Discount" />
    </div>
</form>
<?php


?>
</body>
</html>