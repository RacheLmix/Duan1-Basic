<div class="box-right">
    <div class="title-page">
        <p>Sản phẩm</p>
    </div>

    <div class="form-search">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khóa" > 
            <!-- keyword -->
            <select name="iddm" id="" class="dm-sp">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo "<option value='" . $id . "'>$tendm</option>";
                }
                ?>
            </select>
            <input type="submit" name="timkiemsp" value="Tìm kiếm">
        </form>
    </div>

    <div class="btn-form mr20">
        <a href="index.php?act=addsp" class="btn-adddm">Thêm sản phẩm</a>
    </div>

    <div class="row form-content">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th class="text-center">Thao tác</th>
            </tr>

            <?php
            if (isset($listsanpham)) {

                foreach ($listsanpham as $key => $sanpham) {
                    extract($sanpham);
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $chitietsp = "index.php?act=chitietsp&id=" . $id;
                    $hinhpath = "../upload/" . $hinh;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "Không có hình ảnh";
                    }
                    $stt = $key + 1;

                    echo '<tr>  
                                <td>' . $stt . '</td>
                                <td>' . $tensp . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . number_format($giasp, 0, ",", ".") . ' <u>đ</u></td>
                                <td>' . $soluong . '</td>
                                <td class="text-center">
                                    <a href="' . $suasp . '"><input type="button" value="Sửa" class="btn-update"></a>
                                    <a href="' . $xoasp . '" class="deleteLink" data-id="' . $id . '"><input type="button" value="Xóa" class="btn-delete"></a>
                                    <a href="' . $chitietsp . '"><input type="button" value="Chi tiết" class="btn-detail"></a>
                                </td>
                            </tr>';
                }
            }
            ?>
        </table>
    </div>
</div>
</div>
<script>
    // Gắn sự kiện lắng nghe cho tất cả các phần tử có class deleteLink
    const deleteLinks = document.querySelectorAll('.deleteLink');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            const id = this.getAttribute('data-id'); // Lấy ID từ thuộc tính data
            const xoasp = "index.php?act=xoasp&id=" + id;

            Swal.fire({
                title: "Xác nhận xóa?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Thực hiện yêu cầu xóa 
                    Swal.fire({
                        title: "Đã xóa!",
                        icon: "success"
                    }).then(() => {
                        // Chuyển hướng đến URL xóa
                        window.location.href = xoasp;
                    });
                }
            });
        });
    });
</script>