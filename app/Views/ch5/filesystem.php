<?php echo view("partials/booknavheader"); ?>


<main class="container">
<ul>
<li><?php echo anchor("ch5/register","Register") ?></li>
    <li><?php echo anchor("ch5/login","login") ?></li>
    <li><?php echo anchor("ch5/filesystem","File IO") ?></li>
</ul>
  <div class="row g-5">
    <div class="col-12">
        <h3>File IO: all images in image folder</h3>       
<p>FCPATH: <?php echo FCPATH; ?></p>
<p>BASE_URL: <?php echo base_url(); ?></p>
<p>Images Folder with directory_map</p>
<?php foreach ($allimages as $key => $image): 
    if(!is_array($image)){ ?>
   <img src="<?php echo base_url() ?>/assets/images/<?php echo $image?>" alt="" width="200px">
<?php 
}
endforeach; ?>
<p>Banner Folder with directory_map</p>
<?php foreach ($allimages['banner\\'] as $key => $image): 
    if(!is_array($image)){ ?>
   <img src="<?php echo base_url() ?>/assets/images/banner/<?php echo $image?>" alt="" width="200px">
<?php 
}
endforeach; ?>
<h3>get_dir_file_info</h3>
<?php foreach ($fileinfo as $key => $image): ?>
   <?php echo $image['server_path'] . "<br>"; ?>
<?php 

endforeach; ?>
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