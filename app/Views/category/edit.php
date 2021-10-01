<?php echo view("partials/booknavheader"); ?>

<main class="container">

  <div class="row g-5">
    <div class="col-md-8">
    <?php

$session = \Config\Services::session();

if($session->getFlashdata('success'))
{
    echo '
    <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
    ';
}

?>
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Add new Category
      </h3>
      <?php
      $validation = \Config\Services::validation(); 
      echo $validation->listErrors();
       ?>
      <?php echo form_open('category/update'); ?>
      <?php echo csrf_field(); ?>
      <?php echo form_hidden('id',$id); ?>
      <?php  ?>
      <div class="form-group">
          <label for="name">Name</label>

      <?php echo form_input($name); ?>
      <?php
      if($validation->getError('name'))
        {
            echo '<span class="text-danger">'.$validation->getError('name').'</span>';
        }
        ?>
      </div>
      <div class="form-group">
          <label for="details">Details</label>
      <?php echo form_textarea($details); ?>
      <?php
      if($validation->getError('details'))
        {
            echo '<span class="text-danger">'.$validation->getError('details').'</span>';
        }
        ?>
      </div>
      <?php echo form_submit('submit', 'Update'); ?>
      <?php echo form_close(); ?>



    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>
