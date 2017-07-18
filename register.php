<!DOCTYPE html>
<html lang="th">

<head>

    <?php include_once('inc/head.php'); ?>

</head>

<body>
    <!-- ***** navbar ***** -->
    <?php include_once('inc/nav-main.php'); ?>

    <div class="container">
        <div class="bg_navbar">
            <div class="row">
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="register_content">
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <form class="register-page">
                                        <div class="header-register text-center">
                                            <h2>สมัครสมาชิก</h2>
                                                <p>สมัครสมาชิกแล้ว? คลิก<a href="login.php">ที่นี่</a>เพื่อเข้าสู่ระบบ</p>
                                        </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="ที่อยู่" required="">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="เบอร์โทรศัพท์" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="name" placeholder="รหัสผ่าน" required="">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="pasword" class="form-control" name="email" placeholder="ยืนยันรหัสผ่าน" required="">
                                                </div>
                                            </div>
                                            
                                            <div class="center-content">
                                                <input type="submit" value="สมัครสมาชิก" class="orange-btn">
                                            </div>
                                    </form>
                                </div>
  
                </div>

            </div>
        </div>
    </section>
        

        <?php include_once('inc/footer.php'); ?>
        <?php include_once('inc/footer-script.php'); ?>



</body>

</html>
