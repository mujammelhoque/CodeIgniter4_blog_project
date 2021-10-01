<?php echo view("partials/booknavheader"); ?>


<main class="container">
<ul>
    <li><?php echo anchor("ch5/register","Register") ?></li>
    <li><?php echo anchor("ch5/login","login") ?></li>
    <li><?php echo anchor("ch5/filesystem","File IO") ?></li>
</ul>
  <div class="row g-5">
    <div class="col-12">
        <h3>Home work: file upload</h3>
        <h3>Form validation</h3>
        <legend>
      <?php
      $validation = \Config\Services::validation(); 
      echo $validation->listErrors();
       ?>
       </legend>
        <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <!-- <form class="mx-1 mx-md-4"> -->
                    <?php echo form_open('ch5/register',['class'=>'mx-1 mx-md-4']); ?>
<?php echo csrf_field(); ?>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <?php echo form_input($name); ?>
                      <!-- <input type="text" id="form3Example1c" class="form-control" /> -->
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <!-- <input type="email" id="form3Example3c" class="form-control" /> -->
                      <?php echo form_input($email); ?>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <!-- <input type="password" id="form3Example4c" class="form-control" /> -->
                      <?php echo form_password($password); ?>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <!-- <input type="password" id="form3Example4cd" class="form-control" /> -->
                      <?php echo form_password($repassword); ?>
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <!-- <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    /> -->
                    <?php echo form_checkbox('agree',"checkedval",TRUE,['class'=>"form-check-input me-2"]); ?>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <!-- <button type="button" class="btn btn-primary btn-lg">Register</button> -->
                    <?php echo form_submit('submit', 'Register',['class'=>"btn btn-primary btn-lg"]); ?>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>



</div>

</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
jQuery(document).ready(function() {
  jQuery('#example').DataTable();
} );
</script>
  </body>
</html>

    <?php
/*
anchor example
echo anchor('news/local/123', 'My News', 'title="News title"');
// Prints: <a href="http://example.com/index.php/news/local/123" title="News title">My News</a>

echo anchor('news/local/123', 'My News', ['title' => 'The best news!']);
// Prints: <a href="http://example.com/index.php/news/local/123" title="The best news!">My News</a>

echo anchor('', 'Click here');
// Prints: <a href="http://example.com/index.php">Click here</a>
*/
    ?>