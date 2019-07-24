<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Feed</title>
    <style media="screen">
      .main{
        margin: 5% 30%;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>Edit Feed</h1>
      <div class="main">
        <?php foreach ($feeds as $row){ ?>
          <form action="http://localhost/codeigniter/index.php/update/<?php echo $row['id'] ?>" method="post">
            <label for="">Title</label><br>
            <input type="text" name="title" value="<?php echo $row['title'] ?>"><br>
            <label for="">Feed</label><br>
            <textarea name="feed" rows="8" cols="80"><?php echo $row['feed'] ?></textarea><br>
            <button type="submit" name="button">Submit</button>
          </form>
      <?php } ?>
      </div>
    </center>
  </body>
</html>
