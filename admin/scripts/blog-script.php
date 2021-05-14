<?php

include ("../config/database.php");

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