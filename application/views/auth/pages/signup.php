<section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6 mt-2">
                    <div class="card p-5 ">
                        <h2 class="text-center">Sign In</h2>
                        <div class="card-body">
                            <!-- <form> -->
          <?= form_open('signing-up')?>

                                <div class="form-group">
                                    <input type="text" name="firstname" class="input100" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" class="input100" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="number" class="input100" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="input100" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="pass_log_id" name="password" class="input100" placeholder="Password">
                                    <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span> -->

                                </div>

                                <button type="submit" class="btn btn-block">Sign in</button>
          <?= form_close(); ?>

                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <!-- <script>
$(document).on('click', '.toggle-password', function() {

$(this).toggleClass("fa-eye fa-eye-slash");

var input = $("#pass_log_id");
input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});
</script> -->