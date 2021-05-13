<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
  <title>Portfolio-Page</title>
</head>

<body>
  <div class="wrapper">
    <div class="begin">
      <div class="welcome">
        <div class="greeting">
          <h1 id="greet">Hello!</h1>
        </div>

        <div class="introduce">
          <h2>My Name=${</h2>
          <?php
          $myName = "ATTILA FANCZI";
          echo '<p id="my-name">' . $myName . '</p>';
          ?>
          <h2>}</h2>
        </div>

        <div class="job-title">
          <h3>I'm a &#60;</h3>
          <p id="profession">Web Developer /</p>
          <h3>></h3>
        </div>

        <a href="../pages/about.php" id="enter" class="btn">Content</a>
      </div>
    </div>
  </div>
</body>

</html>