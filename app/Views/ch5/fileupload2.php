<?php echo view("partials/booknavheader"); ?>


<main class="container">
<ul>
<li><?php echo anchor("ch5/register","Register") ?></li>
    <li><?php echo anchor("ch5/login","login") ?></li>
    <li><?php echo anchor("ch5/filesystem","File IO") ?></li>
    <li><?php echo anchor("ch5/writefile","Create article.txt in public folder") ?></li>
    <li><?php echo anchor("ch5/downloadzip","Create and download zip") ?></li>
    <li><?php echo anchor("ch5/fileupload","File Upload") ?></li>
</ul>
  <div class="row g-5">
    <div class="col-12">
        <h3>Upload FIles</h3> 
        <?php
      $validation = \Config\Services::validation(); 
      echo $validation->listErrors();
       ?>      
        <?php echo form_open_multipart('ch5/fileupload2');?>
        <?php echo csrf_field(); ?>
        <input type="email" name="useremail" placeholder="email"/><br /> 
<input type="file" name="pimages[]" size="20" multiple /><br />
<input type="submit" name="fupload" value="Upload File!" />
</form>
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