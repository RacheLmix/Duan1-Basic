<div class="box-right">
    <div class="title-page">
        <p>Bình luận</p>
    </div>

    <div class="form-search">
        <form action="index.php?act=listbl" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khóa">
            <!-- keyword -->
            <input type="submit" name="timkiembl" value="Tìm kiếm">
        </form>
    </div>

    <div class="row form-content">
        <table>
            <tr>
                <th>Mã bình luận</th>
                <th>Nội dung</th>
                <th>Khách hàng</th>
                <th>Sản phẩm</th>
                <th>Ngày bình luận</th>
                <th class="text-center">Thao tác</th>
            </tr>

            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '<tr>
                        <td>BL-' . $id . '</td>
                        <td class="noidungbl">' . $noidung . '</td>
                        <td>' . $tendn . '</td>
                        <td>' . $tensp . '</td>
                        <td>' . $ngaybinhluan . '</td>
                        <td class="text-center">
                            <a href="' . $xoabl . '" class="deleteLink" data-id="' . $id . '"><input type="button" value="Xóa" class="btn-delete"></a>
                        </td>
                    </tr>';
            }
            ?>
        </table>
    </div>
</div>

<script>
    // Gắn sự kiện lắng nghe cho tất cả các phần tử có class deleteLink
    const deleteLinks = document.querySelectorAll('.deleteLink');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

            const id = this.getAttribute('data-id'); // Lấy ID từ thuộc tính data
            const xoabl = "index.php?act=xoabl&id=" + id;

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
                        window.location.href = xoabl;
                    });
                }
            });
        });
    });
</script>
