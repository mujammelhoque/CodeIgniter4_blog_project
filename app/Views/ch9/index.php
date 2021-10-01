<?php echo view("partials/booknavheader"); ?>


<main class="container">
<ul>
<li><?php echo anchor("ch5/register","Register") ?></li>

</ul>
  <div class="row g-5">
    <div class="col-6">
        <h3>Active article</h3>       
    <?php 
    //var_dump($allarticles); 
    foreach ($allarticles as $key => $article) {
        echo "<li>".$article['title']."</li>";
    }
    ?>
</div>
<div class="col-6">
<h3>Inactive article</h3>      
<?php 
// var_dump($inactivearticle); 
foreach ($inactivearticle as $key => $article) {
    echo "<li>".$article['title']."</li>";
}
?>
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