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
Total Items:<?php echo anchor("shop/details",$totalItems); ?>
<table class="table" border="1" width="100%" >
  <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Code</td>
      <td>Desc</td>
      <td>Price</td>      
      <td colspan="2">Actions</td>
  </tr> 
  <?php foreach ($allproduct as $product)  : ?>
  <tr>
      <td><?php echo $product['product_id']; ?></td>
      <td><?php echo $product['product_name']; ?></td>
      <td><?php echo $product['product_code']; ?></td>
      <td><?php echo $product['product_description']; ?></td>
      <td><?php echo $product['product_price']; ?></td>
      <td><?php echo anchor('shop/add/'.$product['product_id'], 'Add To Cart') ; ?></td>
      <td></td>
  </tr>           
  <?php endforeach ; ?>
</table>

<?= $pager->links('perpage2','default_full'); ?>
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
