<?php  include 'config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Colmar Academy</title>

  <!-- Other CSS -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <main>
    <header>
      <h1>Colmar Academy</h1>
      <nav>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="col">

        </div>
      </div>

    </div>
    <footer>
      <p>© 2016 Colmar Academy. All rights reserved</p>
      <ul>
        <li>Copyright &copy;
          <?php 
          $date_current = date('Y');
          $date_created = 2022;
          if ($date_current == $date_created) {
            echo $date_current;

          } else {
            echo ''.$date_created.' - '.$date_current.'';
          }
        ?>
        </li>
        <li>All Rights Reserved</li>
        <li><a href="#">Terms of use</a></li>
        <li><a href="#">Web Design by Luann Marston</a></li>
        <li><a href="https://validator.w3.org/check?uri=referer" target="_blank">HTML Validation</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">CSS Validation</a></li>
      </ul>
    </footer>
  </main>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>