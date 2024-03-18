<div class="box-right">
    <div class="title-page">
        <p>Danh mục</p>
    </div>

    <div class="form-search">
        <form action="index.php?act=listdm" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khóa" > 
            <!-- keyword -->
            <input type="submit" name="timkiemdm" value="Tìm kiếm">
        </form>
    </div>

    <div class="btn-form mr20">
        <a href="index.php?act=adddm" class="btn-adddm">Thêm danh mục</a>
    </div>
    
    <div class="row form-content">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Hình danh mục</th>
                <th class="text-center">Thao tác</th>
            </tr>

            <?php
            foreach ($listdanhmuc as $key => $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id=" . $id;
                $xoadm = "index.php?act=xoadm&id=" . $id;
                $hinhpath = "../upload/" . $hinhdm;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = "Không có hình ảnh";
                }
                $stt = $key + 1;
                echo '<tr>
                <td>' . $stt . '</td>
                <td>' . $tendm . '</td>
                <td>' . $hinh . '</td>
                <td class="text-center">
                    <a href="' . $suadm . '"><input type="button" value="Sửa" class="btn-update"></a>
                    <a href="' . $xoadm . '" class="deleteLink" data-id="' . $id . '"><input type="button" value="Xóa" class="btn-delete"></a>
                </td>
            </tr>';
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
            const xoadm = "index.php?act=xoadm&id=" + id;

            Swal.fire({
                title: "Xác nhận xóa?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xác nhận"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Thực hiện yêu cầu xóa thông qua Ajax hoặc window.location.href tại đây
                    Swal.fire({
                        title: "Đã xóa!",
                        icon: "success"
                    }).then(() => {
                        // Chuyển hướng đến URL xóa
                        window.location.href = xoadm;
                    });
                }
            });
        });
    });
</script>