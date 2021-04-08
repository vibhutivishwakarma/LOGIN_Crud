<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <div class="card p-5 ">
                    <h2 class="text-center">Login</h2>
                    <div class="card-body">
                        <!-- <form> -->
                        <?= form_open('logged-in') ?>

                        <div class="form-group">
                            <input type="email" name="email" class="input100" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password-field" name="password" class="input100 " placeholder="Password">
                            <!-- <span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span> -->
                            <!-- <span><i class="fa fa-eye field-icon toggle-password" toggle="#password-field" aria-hidden="true"></i></span> -->
                        </div>
                        <button type="submit" class="btn btn-block">login</button>
                        <a class="passlink text-secondary" href="">Forgot Password?</a>
                        <a class="signinlink text-secondary" href="signup">Sign up</a>
                        <!-- </form> -->
                        <?= form_close(); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>

