<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <style>
    main {
        padding: 30px;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        margin: 50px 50px;
    }

    img {
        width: 200px;
        height: 200px;
        margin-top: 30px;
    }

    h2 {
        color: red;
    }

    .form-add {
        margin: 10px 0px;
    }
<<<<<<< HEAD

    a {
        text-decoration: none;
        font-size: 20px;
        margin-left: 10px;
    }
=======
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
    </style>
</head>

<body>
    <main>
        <h2>
            <?php 
            if (is_array($sanpham)) {
                extract($sanpham);
            }else{
                $product_name = '';
                $product_id = '';
                $price = '';
                $image = '';
                $sale = '';
                $description = '';
                $category_id  = '';
                $quantity = '';
            }

            $hinhpath = "./uploads/" . $image;
            if (is_file($hinhpath)) {
                $hinh = "<img src='".$hinhpath."' height='80'>";
            } else {
                $hinh = "no photo";
            }

            if (isset($suaThanhCong) && ($suaThanhCong != "")) echo $suaThanhCong;
            ?>
        </h2>
        <h1>Sửa sản phẩm</h1>
<<<<<<< HEAD
        <a href="index.php?act=danhsachsp"> ← Quay lại</a>
=======
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
        <hr>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="form-add">
                <label for="" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="tensp" required value="<?=$product_name?>">
            </div>

            <div class="form-add">
                <label for="" class="form-label">Giá sản phẩm</label>
                <input type="number" class="form-control" name="giasp" required value="<?=$price?>">
            </div>

            <div class="form-add">
                <label for="" class="form-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" required><?=$description?></textarea>
            </div>

            <div class="form-add">
                <label for="" class="form-label">Số lượng</label>
                <input type="number" class="form-control" name="quantity" required value="<?=$quantity?>">
            </div>

            <div class="form-check-container">
                <label for="" class="form-label">Size: </label>
                <br>
                <?php
                $sizes = load_all_sizes();
                foreach ($sizes as $size) {
                    $size_id = $size['size_id'];
                    $size_name = $size['size_name'];
                    $checked = in_array($size_id, explode(',', $size_id)) ? 'checked' : ''; 
                    echo '<div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" value="'.$size_id.'" id="size_'.$size_id.'" name="size[]" '.$checked.' />
                        <label class="form-check-label" for="size_'.$size_id.'">'.$size_name.'</label>
                        </div>';
                }
                ?>
            </div>

            <div class="form-add">
                <label for="" class="form-label">Danh mục sản phẩm</label>
                <select class="form-select" aria-label="Default select example" name="iddm">
                    <option selected disabled>Chọn danh mục sản phẩm</option>
                    <?php
                    $categories = load_all_categories();
<<<<<<< HEAD
                    $product = load_sanpham_by_id($product_id);
                    $iddm = $product['category_id'];
                    foreach ($categories as $category) {
                        $selected = ($iddm == $category['category_id']) ? "selected" : "";
                        echo '<option value="' . $category['category_id'] . '" ' . $selected . '>' . $category['category_name'] . '</option>';
=======
                    foreach ($categories as $category) {
                        $selected = ($iddm == $category['category_id']) ? "selected" : "";
                        echo '<option value="' . $category['category_id'] . '" '.$selected.'>' . $category['category_name'] . '</option>';
>>>>>>> c05b7d31d4768536ed2f2998e34a9853991223a9
                    }
                    ?>
                </select>
            </div>

            <div class="form-add">
                <label for="" class="form-label">Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="anhsp">
                <p><?=$hinh?></p>
            </div>

            <br>
            <div class="d-grid gap-2">
                <input type="hidden" name="id" value="<?=$product_id?>">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sửa sản phẩm" name="capnhat">
            </div>
        </form>
    </main>
</body>

</html>