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
        All Users (<?php echo $total??''; ?>)
      </h3>
<!-- <?php 
// var_dump($allusers); 
foreach ($allusers as $user) {
echo $user['id'] . " :  ".$user['first_name'] . " ".$user['last_name']. "<br>";    
}
?> -->
<?php if ($total ) : ?> 
<?php echo anchor('user/new_user',"Add New User") ?>
<table class="table" border="1" width="100%" >
  <tr>
      <td>ID</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Created Date</td>
      <td>Is Active</td>
      <td colspan="2">Actions</td>
  </tr> 
  <?php foreach ($allusers as $user)  : ?>
  <tr>
      <td><?php echo $user['id'] ?></td>
      <td><?php echo $user['first_name']; ?></td>
      <td><?php echo $user['last_name']; ?></td>
      <!-- <td><?php //echo date("d-m-Y", $user['created_date']); ?></td> -->
      <td><?php echo $user['created_date']; ?></td>
      <td><?php echo ($user['is_active'] ? 'Yes' : 'No'); ?></td>
      <td><?php echo anchor('user/edit_user/'.$user['id'], 'Edit') ; ?></td>
      <td><?php echo anchor('user/delete_user/'.$user['id'], 'Delete',['onclick'=>"return confirm('Are you sure you want to delete this item?');"]) ; ?></td>
  </tr>           
  <?php endforeach ; ?>
</table>
<?php endif ; ?>
<?php //echo view("partials/pagination"); ?>
<?php //echo  $pager->links(); ?>
<hr>
<?php echo  $pager->links('group1', 'bs5_full'); ?>
<hr>
<?php echo  $pager->links('group1', 'bs5_simple'); ?>
<?php //echo $pager->simpleLinks() ?>
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
