<?php include './includes/header.php'; ?>
<main class="signup-page login-page">
    <section class="inner-banner">
        <figure class="banner-img">
            <img src="assets/images/banner/signup.jfif" alt="" />
        </figure>
    </section>

    <section class="signup-content login-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="heading-wrapper">
                        <h1>Sign in to access your personalized travel account today.</h1>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="signup-box">
                        <h4><b>Sign in</b></h4>
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Email
                                    <span class="color-red">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password
                                    <span class="color-red">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="********" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remeber me
                                    </label>
                                    <a href="" class="float-start">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <button type="submit" class="btn-blue">Login </button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include './includes/footer.php'; ?>