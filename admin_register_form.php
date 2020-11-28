
<?php include_once('header.php'); ?>

<!-- Banner Area Starts -->
<section class="banner-area banner-area2 blog-page text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Register</i></h1>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Start Login Area -->
<section class="sample-text-area">
    <div class="container">
        <h3 class="mb-30 title_color">Admin Register</h3>
            <form method = "POST" action="./login/admin_register.php">
            <div class="mt-10">
                        <input type="text" name="userID" placeholder="ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID'" required class="single-input">
                    </div>    
            <div class="mt-10">
                    <input type="text" name="name" placeholder="NAME" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NAME'" required class="single-input">
                </div>
                    <div class="mt-10">
                    <input type="text" name="email" placeholder="EMAIL" onfocus="this.placeholder = ''" onblur="this.placeholder = 'EMAIL'" required class="single-input">
                </div>
                    <div class="mt-10">
                    <input type="password" name="password" placeholder="PASSWORD" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PASSWORD'" required class="single-input">                        </div>
                    <div class="mt-10">
                        <input type="password" name="pwd_chk" placeholder="PASSWORD CHECK" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm PASSWORD'" required class="single-input">
                    </div>
                    <div class="button-group-area">
                    <button type = "submit" class="genric-btn default">등록</button>                    </div>
                    </form>
    </div>
</section>
<!-- End Login Area -->

<?php include_once('footer.php'); ?>