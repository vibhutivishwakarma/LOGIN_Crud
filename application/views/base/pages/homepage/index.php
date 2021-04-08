<?php
if (!$this->session->userdata('validated') == TRUE) {
  redirect('logged-in');
}
?>

<section>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-3"></div>
      <div class="col-md-6 mt-5">
        <div class="card p-5 ">
          <div class="card-body">
            <h3>Welcome! <?php echo $this->session->userdata('firstname'); ?></h3>

            <h1>Entered Successfully!!</h1>
            <a class="logoutlink text-secondary" href="login">Logout</a>

          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>