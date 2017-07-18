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
                <div class="login_content">
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form class="login-page">
                                <div class="header-login text-center">
                                    <h2>เข้าสู่ระบบ</h2>
                                        <p>ยังไม่สมัครสมาชิก? คลิก<a href="register.php">ที่นี่</a>เพื่อสมัครสมาชิก</p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group input-group">
                                        <input type="email" class="form-control" name="name" placeholder="อีเมล" required="">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group input-group">
                                        <input type="password" class="form-control" name="name" placeholder="รหัสผ่าน" required="">
                                        <div class="input-group-addon"></div>
                                    </div>
                                </div>
                                <div class="center-content">
                                    <input type="submit" value="สมัครสมาชิก" class="orange-btn">
                                </div>
                                <div class="col-sm-12">
                                    <a href="forget_password.php"><p>ลืมรหัสผ่าน? </p></a>
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
