<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Questo è post</h1>
  <ul>
  <?php 
    foreach ($posts as $key => $post) { ?>
      <h2><?php echo " {$post->title}" ;?></h2>
      <h3><?php echo " {$post->subtitle}" ;?></h3>
      <p><?php echo " {$post->body}" ;?></p>

  <?php } ?>
</ul>
</body>
</html>