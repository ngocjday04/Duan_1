<div class="row d-flex justify-content-center my-4">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">SỬA THÔNG TIN </h5>
            </div>
            <div class="card-body">
                <hr class="my-4" />
                <!-- Single item -->

                <div class="row mb-6">
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">

                    </div>
                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                        <form action="" method="post">
                            <!-- Data -->
                            <div class="mb-3">
                                <label for="" class="form-label">Tên người nhận</label> <br>
                                <input type="text" class="form-control my-4" name="name" id="name" value="<?= $billone['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Địa chỉ</label> <br>
                                <input type="text" class="form-control my-4" id="address" value="<?= $billone['address'] ?>" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Số điện thoại</label> <br>
                                <input type="text" class="form-control my-4" id="tel" value="<?= $billone['tel'] ?>" name="tel">
                            </div>
                            <!-- xác nhận -->
                            <button name="btn" class="btn btn-primary px-3 ms-2" type="submit">Cập
                                nhật</button>
                        </form>
                    </div>
                </div>

                <!-- Single item -->
                <hr>
            </div>
        </div>

    </div>
</div>



</body>