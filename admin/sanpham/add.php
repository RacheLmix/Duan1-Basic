<div class="box-right">
    <div class="title-page">
        <p>Thêm sản phẩm</p>
    </div>

    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="" class="title-form-group">Ảnh sản phẩm</label><br>
            <input type="file" name="hinh" id="">
        </div>

        <div class="form-group">
            <label for="" class="title-form-group">Tên sản phẩm:</label><br>
            <input type="text" name="tensp" id="" class="form-input" placeholder="Nhập tên sản phẩm">
        </div>

        <div class="form-group">
            <label for="" class="title-form-group">Danh mục:</label><br>
            <select name="iddm" id="" class="form-input">
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo "<option value='" . $id . "'>$tendm</option>";
                }
                ?>
            </select>

            <div class="form-group">
                <label for="">Giá sản phẩm:</label>
                <div class="form-group-price">
                    <span class="input-group-text">$</span>
                    <input type="text" name="giasp" class="form-input" placeholder="Nhập giá sản phẩm">
                </div>
            </div>

            <div class="form-group">
                <label for="">Số lượng:</label>
                <div class="form-group-price">
                    <input type="text" name="soluong" class="form-input" placeholder="Nhập số lượng sản phẩm">
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả sản phẩm</label>
                <textarea name="mota" class="form-input" style="height: 78px;"></textarea>
            </div>

            <div class="form-group">
                <label for="">Đơn vị:</label>
                <div class="form-group-price">
                    <input type="text" name="donvi" class="form-input" placeholder="Nhập đơn vị sản phẩm">
                </div>
            </div>

            <div class="form-group">
                <label for="">Ngày nhập:</label>
                <div class="form-group-price">
                    <input type="date" name="ngaynhap" class="form-input" >
                </div>
            </div>

            <div>
                <input type="submit" class="btn-submit" name="themmoi" value="Submit">
            </div>

            <div class="thongbao">
                <?php
                if (isset($thongbao) && $thongbao != "")
                    echo $thongbao;
                ?>
            </div>
        </div>
    </form>
</div>
</div>