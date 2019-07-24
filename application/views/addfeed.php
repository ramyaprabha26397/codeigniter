<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add New Feed</title>
    <style media="screen">
      .main{
        margin: 5% 30%;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>Add New Feed</h1>
      <div class="main">
        <form action="http://localhost/codeigniter/index.php/insertfeed" method="post">
          <label for="">Title</label><br>
          <input type="text" name="title" value=""><br>
          <label for="">Feed</label><br>
          <textarea name="feed" rows="8" cols="80"></textarea><br>
          <button type="submit" name="button">Submit</button>
        </form>
      </div>
    </center>
  </body>
</html>
