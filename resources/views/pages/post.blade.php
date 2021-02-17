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
      <li class="test"> <?php echo "Titolo {$post->title}" ;?></li>

  <?php } ?>
</ul>
</body>
</html>