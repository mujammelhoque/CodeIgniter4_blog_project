<?php echo view("partials/booknavheader"); ?>

<main class="container">

  <div class="row g-5">
    <div class="col-md-12">
        <h3><a href="https://www.positronx.io/implement-and-use-datatables-in-codeigniter/">home work</a></h3>
    <?php var_dump($cen); ?>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Details</th>
                <th>Tags</th>
                <th>Status</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allarticles as $key => $article): ?>
               <tr>
                   <td><?php echo $article['id'] ?></td>
                   <td><?php echo $article['title'] ?></td>
                   <?php /*
                   <td><?php echo word_limiter($article['details'],20); ?></td>
                   */
                   ?>
                   <td><?php echo word_censor(word_limiter($article['details'],20), $cen, "!!BEEP"); ?></td>
                   <td><?php echo $article['tags']; ?></td>
                   <td><?php echo $article['status'] ?></td>
                   <td><?php echo $article['created'] ?></td>
               </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Details</th>
                <th>Tags</th>
                <th>Status</th>
                <th>Created</th>
            </tr>
        </tfoot>
    </table>
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