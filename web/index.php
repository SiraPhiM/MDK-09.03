<?php include "assets/header.html";
$count_post_on_page = 2;
?>
<div class="catalog">
    <?php
    $conn = mysqli_connect("localhost", "root", "root", "web-php");

    $page = empty($_GET['page']) ? 1 : $_GET['page'];
    unset($_GET['page']);

    $page = $page * $count_post_on_page - $count_post_on_page;

    $posts_list = mysqli_query($conn, "SELECT * FROM posts LIMIT $page,$count_post_on_page");


    while ($post = mysqli_fetch_array($posts_list)) {
        echo "<div class='card'>", "<div class='card-title'>" . $post["title"] . "</div>",
            "<div class='card-text'>" . $post["text"] . "</div>", "<img src='" . $post["image"] . "' width = '100px'>",
        "</div>";
    }
    ?>
</div>
<div class="pagination">
    <?php
    $count_posts = mysqli_fetch_array(mysqli_query($conn, "SELECT count(*) FROM posts "));
    $count_posts = ceil($count_posts[0] / $count_post_on_page);

    for ($i = 1; $i <= $count_posts; $i++) {
        echo "<li><a href='?page=$i'>$i</a></li>";
    }
    ?>
</div>

</body>
</html>



