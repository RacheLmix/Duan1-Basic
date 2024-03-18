<?php
if (is_array($dm)) {
    extract($dm);
}
$hinhpath = "../upload/" . $hinhdm;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Không có hình ảnh";
}
?>

<div class="box-right">
    <div class="title-page">
        <p>Sửa danh mục</p>
    </div>

    <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="" class="title-form-group">ID danh mục</label><br>
            <input type="text" name="maloai" id="" class="form-input" placeholder="ID tự động tăng" disabled>
        </div>

        <div class="form-group">
            <label for="" class="title-form-group">Tên danh mục:</label><br>
            <input type="text" name="tenloai" id="" class="form-input" placeholder="Nhập tên danh mục" value="<?=$tendm ?>">
        </div>

        <div class="form-group">
            <label for="" class="title-form-group">Ảnh danh mục</label><br>
            <input type="file" name="hinh" id="" ><?= $hinh ?>
        </div>

        <div>
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                echo $id; ?>">
            <input type="submit" class="btn-submit" name="capnhat" value="Submit">
        </div>

        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>
</div>