<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Newsfeed</title>
    <style media="screen">
      .main{
        margin: 0 15%;
      }
      .feed{
        text-align: left;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>Newsfeed</h1>
      <div class="main">
        <div class="feed">
          <hr>
            <a href="http://localhost/codeigniter/index.php/add"><button type="button" name="button">+Add New Feed</button></a>
          <hr>
        </div>
        <?php
        foreach($feeds as $row) { ?>
          <div class="feed">
            <h2><?php echo $row['title'] ?></h2>
            <p><?php echo $row['feed'] ?></p>
            <p><?php echo $row['created_time'] ?></p>
            <a href="http://localhost/codeigniter/index.php/edit/<?php echo $row['id'] ?>"><button type="button" name="button">Edit</button></a>
            <a href="http://localhost/codeigniter/index.php/delete/<?php echo $row['id'] ?>"><button type="button" name="button">Delete</button></a>
            <hr>
          </div>
        <?php } ?>
      </div>
    </center>
  </body>
</html>
