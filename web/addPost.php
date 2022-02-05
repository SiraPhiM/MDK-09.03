<?php include "assets/header.html";?>
<div class="container">
    <h2>Добавление поста</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="input-group">
            <label for="title_post">Введите заголовок поста</label>
            <input type="text" name="title_post" id="title_post">
        </div>
        <div class="input-group">
            <label for="text_post">Введите текст поста</label>
            <textarea name="text_post" id="text_post" cols="30" rows="10"></textarea>
        </div>
        <div class="input-group">
            <label for="img_post">Выберите изображение поста</label>
            <input type="file" id="img_post" name="img_post">
        </div>
        <div class="input-group">
            <button class="btn" type="submit">Добавить</button>
        </div>
    </form>
</div>
<?php
$conn = mysqli_connect("localhost", "root", "root", "web-php");

if($_FILES['img_post']['tmp_name'] and $_POST["title_post"] and $_POST["text_post"]){

    $image=$_FILES['img_post']['name'];
    $image=str_replace(' ','|',$image);
    $image="image/".$image;
print_r ($image);
    $title_post = $_POST["title_post"];
    $text_post = $_POST["text_post"];

    $result = mysqli_query(
            $conn,
            "INSERT INTO posts (`idPost`,`title`,`text`,`image`) VALUES (null,'$title_post','$text_post','$image')"
    );

    if($result){
        move_uploaded_file($_FILES['img_post']['tmp_name'],$image);
    }
    else{

    }

}
?>

</body>
</html>