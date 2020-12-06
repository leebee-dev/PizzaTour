
<?php include_once('header.php'); ?>

<!-- Banner Area Starts -->
<section class="banner-area banner-area2 blog-page text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Login</i></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Start Login Area -->
<section class="sample-text-area">
    <div class="container">
    <h3 class="mb-30 title_color">Login</h3>
    <form method = "POST" action="./login/user_login.php">
                        <div class="mt-10">
                            <input type="text" name="userID" placeholder="ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" placeholder="PASSWORD" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PASSWORD'" required class="single-input">
                        </div>
                        <div class="button-group-area">
                        <input type = "submit" class="genric-btn default" value = "로그인">
                        </div>
                    </form>
    </div>
</section>
<!-- End Login Area -->

<?php include_once('footer.php'); ?>