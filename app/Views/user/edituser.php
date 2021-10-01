<?php echo view("partials/booknavheader"); ?>

<main class="container">

  <div class="row g-5">
    <div class="col-md-12">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Edit User Form
      </h3>
<legend>
      <?php
      $validation = \Config\Services::validation(); 
      echo $validation->listErrors();
       ?>
       </legend>
      <?php echo form_open('user/update_user', ['class'=>"form"]) ; ?>
      <?= csrf_field() ?>
      <?php echo form_hidden('id',$id); ?>
<table border="0" class="table">
<tr>
<td>User First Name</td>
<td>
  <?php echo form_input($first_name); ?>
  <?php
        if($validation->getError('first_name'))
        {
            echo '<div class="alert alert-danger mt-2">'.$validation->getError('first_name').'</div>';
        }
                        ?>
</td>
</tr>
<tr>
<td>User Last Name</td>
<td>
  <?php echo form_input($last_name); ?>
  <?php
    if($validation->getError('last_name'))
    {
        echo '<div class="alert alert-danger mt-2">'.$validation->getError('last_name').'</div>';
    }
    ?>
</td>
<tr>
<td>User Email</td>
<td>
  <?php echo form_input($email); ?>
  <?php
    if($validation->getError('email'))
    {
        echo '<div class="alert alert-danger mt-2">'.$validation->getError('email').'</div>';
    }
                        ?>
</td>
<tr>
<td>User Is Active?</td>
<td><?php echo form_checkbox($is_active,"active"); ?></td>
</tr>
</table>
<?php echo form_submit('submit', 'Update'); ?>
or <?php echo anchor('users/index', 'cancel'); ?>
<?php echo form_close(); ?>
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
