<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../view/css/listdm.css">
    <title>Danh sách loại hàng</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h1 class="mb-0">QUẢN LÝ ĐƠN HÀNG</h1>
                    </div>
                    <h4 style="color:green;">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </h4>
                    <div style="margin-left: 20px;margin-top:20px">
                        <form action="index.php?act=listdh" method="post" class="mb-3">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <input type="text" name="kyw" class="form-control" placeholder="Nhập mã đơn hàng">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="Tìm" name="listok" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row mb">
                            <table class="table">
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Số lượng hàng</th>
                                    <th>Giá trị đơn hàng </th>
                                    <th>Tình trạng đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th></th>
                                </tr>

                                <?php
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $suadh = "index.php?act=suadh&id=$id";
                                    $xoadh = "index.php?act=xoadh&id=$id";
                                    $kh = $bill["name"] . '
                                    <br>' . $bill["email"] . '
                                    <br>' . $bill["address"] . '
                                    <br>' . $bill["tel"];
                                    $ttdh = get_ttdh($bill['trangthai']);
                                    $countsp = loadall_cart_count($bill['id']);

                                    echo ' <tr>
                                    <td>DA-' . $bill['id'] . '</td>
                                    <td>' . $kh . '</td>
                                    <td>' . $countsp . '</td>
                                    <td><strong>$' . $bill['tongdonhang'] . '</strong></td>
                                    <td>' . $ttdh . '</td>
                                    <td>' . $bill['ngaydathang'] . '</td>
                                    <td><a href="' . $suadh . '" class="btn btn-primary">Chi tiết</a><a href="' . $xoadh . '" class="btn btn-danger" onclick="return confirm(\'Bạn có chắc muốn hủy?\')">Hủy</a></td>
                                  
                                   
                                    </tr>';
                                }
                                ?>



                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>