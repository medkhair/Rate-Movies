<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rate Movies</title>
    <meta charset="utf-8">
    <link href="https://fonts.cdnfonts.com/css/post-no-bills-colombo" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/jim-nightshade" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="../script.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php"><h1><b>Rate Movies</b></h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item" id="browse">
            <a class="nav-link " aria-current="page" href="../index.php">Browse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="films.php">Films</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="series.php">Series</a>
          </li>
        </ul>
        <form class="d-flex" role="search" id="searchForm" action="search.php" method="get">
          <input class="form-control me-2" id="searchInput" name="q" type="search" placeholder="Search" aria-label="Search">
          <a class="btn btn-outline-info" id="searchButton" type="send" class="text" onclick="document.getElementById('searchForm').submit()" href="#">Search</a>
        </form>
      </div>
    </div>
  </nav>
  <div id="blue"></div>
  <div id="pink"></div>
    <?php
      $ide = $_GET['id'];
      try {
      $database = new PDO('mysql:host=localhost;dbname=movies','root','');
      } catch (Exception $e) {
        echo "ErrorCode : ". $e->getMessage();
      }
      $results = $database->prepare('SELECT id, name, description, categorie, image, rating, our_rating FROM movies WHERE id = :ide');
      $results->bindParam(':ide', $ide, PDO::PARAM_INT);
      $results->execute();
      if ($row = $results->fetch()) {
        echo '
          <div class="page clearfix">
            <div class="parts">
              <div class="view">
                <div class="annoucement">
                  <img class="fs1" src="../images/'.$row['image'].'" alt="'.$row['name'].'">
                  <div class="name1"><h1>'.$row['name'].'</h1></div>
                </div>
                <div class="categorie"><h1>'.$row['categorie'].'</h1></div>
              </div>
            </div>
            <div class="parts">
              <div class="informations">
                <div class="grey tab" id="tit"><h2>Description</h2></div>
                <div class="white tab"><p>'.$row['description'].'</p>
                </div>
                <div class="rating tab">
                  <div class="grey tab"><h2>Rating</h2></div>
                  <div class="grey tab"><h2>Your Rating</h2></div>
                  <div class="white tab" id="r1"><h2><h2><i class="bi bi-star-fill"></i> '.$row['our_rating'].'/10</h2></div>
                  <div class="white tab" id="r2">
                    <div class="rateNow">
                      <input type="radio" name="rating1" id="rat1">
                      <label for="rat1" class="bi bi-star-fill"></label>
                      <input type="radio" name="rating1" id="rat2">
                      <label for="rat2" class="bi bi-star-fill"></label>
                      <input type="radio" name="rating1" id="rat3">
                      <label for="rat3" class="bi bi-star-fill"></label>
                      <input type="radio" name="rating1" id="rat4">
                      <label for="rat4" class="bi bi-star-fill"></label>
                      <input type="radio" name="rating1" id="rat5">
                      <label for="rat5" class="bi bi-star-fill"></label>
                    </div>
                    <button type="button" class="btn btn-info">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>';
      }
      
    ?>
</body>
</html>
