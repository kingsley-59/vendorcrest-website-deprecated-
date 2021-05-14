

<br><br>

<div class="content-box">
    <div class="container">
        <h2>Edit Blog</h2>
    </div>
    <div class="col">
        <form name="blog-form" id="edit-blog" action="" method="POST">
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
<script src="jquery.js"></script>
<script type="text/javascript">
    //==========save blog post========//
$(document).on('submit', 'form#edit-blog', function (e) {
  e.preventDefault();
  var blog_title, blog_date, blog_author, blog_writeup, url;
  blog_title = $("#blog-title").val();
  blog_date = $("#blog-date").val();
  blog_author = $("#blog-author").val();
  blog_writeup = $("#blog-writeup").val();
  url = "../scripts/blog-script.php";

  $.post(url, {
    blogTitle: blog_title,
    blogDate: blog_date,
    blogAuthor: blog_author,
    blogWriteup: blog_writeup
  }, (response, status) => {
      if (status == "success") {
        //$("form#edit-blog").reset();
        document.getElementById("edit-blog").reset();
        alert(response);
      } else {
        alert("An error occurred; please resubmit form!");
      }
  });
  
});
</script>