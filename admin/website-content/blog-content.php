<?php

include ("../../admin/config/database.php");

if (!empty($_POST["blogTitle"]) && !empty($_POST["blogWriteup"])){
    $blog_title = $_POST["blogTitle"];
    $blog_date = $_POST["blogDate"];
    $blog_author = $_POST["blogAuthor"];
    $blog_writeup = $_POST["blogWriteup"];

    $insert_blog = "INSERT INTO blogs (`blog-title`, `blog-date`, `blog-author`, `blog-writeup`) values ('$blog_title', '$blog_date', '$blog_author', '$blog_writeup')";
    $result = $conn->query($insert_blog);
    if($result){
        echo "Saved successfully";
    }else{
        echo "An error occurred: ". $conn->error;
    }
}


?>

<br><br>

<div class="content-box">
    <div class="container">
        <h2>Edit Blog</h2>
    </div>
    <div class="col">
        <form action="localhost/vendorcrest/admin/scripts/blog-script.php" name="blog-form" id="edit-blog">
        <div class="form-group">
            <label for="blog-title">Blog Title:</label>
            <input type="text" name="blog-title" id="blog-title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="blog-date" id="blog-date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">Author:</label>
            <input type="text" name="blog-author" id="blog-author" class="form-control" value="Admin" required>
        </div>
        <div class="form-group">
            <label for="blog-writeup">Edit Blog:</label>
            <textarea name="blog-writeup" id="blog-writeup" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="row form-group d-flex justify-content-center">
            <input type="submit" onclick="//alert(10);" class="btn btn-default btn-success mr-2" id="blog-save" value="Save">
            <button type="disabled" class="btn btn-default btn-danger">Publish</button>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    //console.log(200);
    // $(document).on('click', '#blog-save', function(){
    //     var blog_title, blog_date, blog_author, blog_writeup;
    //     blog_title = $("#blog-title");
    //     blog_date = $("#blog-date");
    //     blog_author = $("#blog-author");
    //     blog_writeup = $("#blog-writeup");
    //     console.log(blog_date);
    // });
</script>