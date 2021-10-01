<?php echo view("partials/booknavheader"); ?>

<main class="container">

  <div class="row g-5">
    <div class="col-md-8">
<?php echo view("partials/flashmessage"); ?>
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        All Category (<?php echo $total??''; ?>)
      </h3>
<?php 
// var_dump($allusers); 
// foreach ($allcat as $cat) {
// echo $cat['id'] . " :  ".$cat['name'] . " ".$cat['details']. "<br>";    
// }
?>
<?php  if ($total ) : ?> 
<?php echo anchor('category/new',"Add New Category") ?>
<table id="example" class="display" border="1" width="100%" >
<thead>  
<tr>
      <th>ID</th>
      <th>Name</th>
      <th>Details</th>
      <th>Created</th>      
      <th>Actions</th>
  </tr> 
  </thead>
  <tbody>
  <?php foreach ($allcat as $cat)  : ?>
  <tr>
      <td><?php echo $cat['id'] ?></td>
      <td><?php echo $cat['name']; ?></td>
      <td><?php echo $cat['details']; ?></td>
      <td><?php echo anchor('category/edit/'.$cat['id'], 'Edit') ; ?></td>
      <td><?php echo anchor('category/delete/'.$cat['id'], 'Delete',['onclick'=>"return confirm('Are you sure you want to delete this item?');"]) ; ?></td>
  </tr>           
  <?php endforeach ; ?>
  </tbody>
  <tfoot>  
<tr>
      <th>ID</th>
      <th>Name</th>
      <th>Details</th>
      <th>Created</th>      
      <th>Actions</th>
  </tr> 
  </tfoot>
</table>
<?php endif ;  ?>
<?php echo  $pager->links('perpage2','default_full'); ?>
</div>

    <?php echo view("partials/booknavfooter"); ?> 