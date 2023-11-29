<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg_gray {
            background-color: #f0f0f0;
            padding: 20px;
        }

        .margin_30 {
            margin: 30px 0;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
        }
    </style>
    <title>Thông tin người dùng</title>
</head>

<body>

    <main class="bg_gray">
        <div class="container">
            <h3 class="client text-center">
                Thông tin người dùng
            </h3>
            <div class="margin_30">

                <div class="breadcrumbs">
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        extract($_SESSION['user_name']);
                    }
                    ?>

                    <label for="">Tên đăng nhập:</label>
                    <input type="text" value="<?= $user_name ?>" readonly class="form-control">
                    <label for="">Email:</label>
                    <input type="text" value="<?= $email ?>" readonly class="form-control">
                    <label for="">Số điện thoại:</label>
                    <input type="text" value="<?= $tel ?>" readonly class="form-control">
                    <label for="">Địa chỉ:</label>
                    <input type="text" value="<?= $address ?>" readonly class="form-control">

                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>