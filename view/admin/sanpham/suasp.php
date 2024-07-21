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
                    foreach ($categories as $category) {
                        $selected = ($iddm == $category['category_id']) ? "selected" : "";
                        echo '<option value="' . $category['category_id'] . '" '.$selected.'>' . $category['category_name'] . '</option>';
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