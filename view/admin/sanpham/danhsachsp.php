<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
    main {
        margin: 50px 50px;
    }

    h1 {
        margin-bottom: 30px;
    }



    img {
        max-height: 150px;
    }
    </style>
</head>

<body>
    <main>
        <h1>Danh sách sản phẩm</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Số lượng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $listsanpham = loadall_sanpham();
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $xemsp = "index.php?act=xemsp&id=" . $product_id;
                    $suasp = "index.php?act=suasp&id=" . $product_id;
                    $xoasp = "index.php?act=xoasp&id=" . $product_id;
                    $hinhpath = "./uploads/" . $image;

                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' alt='Product Image'>";
                    } else {
                        $hinh = "No photo";
                    }

                    echo '<tr>
                        <td>' . $product_id . '</td>
                        <td>' . $product_name . '</td>
                        <td>' . $price . '</td>
                        <td class="anhsp">' . $hinh . '</td>
                        <td>' . $category_name . '</td>
                        <td>' . $quantity . '</td>
                        <td>
                            <a href="' . $xemsp . '"><input type="button" value="Xem" class="btn btn-success"></a>
                            <a href="' . $suasp . '"><input type="button" value="Sửa" class="btn btn-info"></a>
                            <a href="' . $xoasp . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');"><input type="button" value="Xóa" class="btn btn-danger"></a>
                        </td>
                    </tr>';

                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>