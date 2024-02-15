<?php include './includes/header.php'; ?>
<main class="signup-page">
    <section class="inner-banner">
        <figure class="banner-img">
            <img src="assets/images/banner/signup.jfif" alt="" />
        </figure>
    </section>

    <section class="signup-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="heading-wrapper">
                        <h1>Sign up for your personalized travel account today .</h1>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="signup-box">
                        <h4><b>Create</b> account</h4>
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Full Name
                                    <span class="color-red">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email
                                    <span class="color-red">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">User name
                                    <span class="color-red">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" />
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
                                <label class="form-label">Confirm Password
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
                                        Accept our Terms & Conditions.
                                    </label>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <button type="submit" class="btn-blue">Sign up</button>
                                <p>
                                    Already have an account? <a href="">Sign in</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include './includes/footer.php'; ?>