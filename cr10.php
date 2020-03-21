<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Library</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="library.css">
</head>
<body >
  <?php require 'process.php'; ?>
  <?php require 'database.php'; ?>
  <?php 

  if (isset($_SESSION['message'])):?>

  <div class ="alert alert-<?= $_SESSION['msg_type'] ?>">
    <?php 
    echo $_SESSION['message'];

    ?>
  </div>
  <?php endif ?>

  <?php 

$result = $mysqli->query("SELECT * FROM entries");
?>
<nav class="navbar  navbar-light bg-transparent fixed-top">
       <button class="navbar-toggler bg-white ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-center" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 bg-dark text-center">
            <li class="nav-item">
              <a class="nav-link text-white"  href = "#information">Go to Form <span class="sr-only">(current)</span></a>
            </li>
          </ul>

        </div>
      </nav>
<div id="content" class="container-fluid">
  <div class="row m-4">
  <?php 
  while ($row = $result-> fetch_assoc()): 
  ?>

    <div class="card col-lg-3 col-md-5 col-sm-12 m-lg-5 m-md-4 mt-sm-2" style="width: 18rem;">
      <img class="card-img-top card-image"  src="<?php echo $row['img'] ?>" alt="Card Image">
      <hr>
      <div class="card-body">
        <h3 class="card-title"><b>Title: </b><?php echo $row['title']; ?></h3>
        <h4 class="card-title"><b>Writer(s): </b> <?php echo $row['author']; ?></h4>
        <p class="card-text"><b>Short description: </b><?php echo $row['desc']; ?></p>
        <p class="card-text"><b>ASIN/ISBN13: </b><?php echo $row['ISBN']; ?></p>
        <p class="card-text"><b>Type: </b><?php echo $row['avaiable']; ?></p>
        <p class="card-text"><b>Published by: </b> <?php echo $row['publisher']; ?></p>
        <p class="card-text"><b>Date of publishing: </b> <?php echo $row['pub_date']; ?></p>
        <a href="cr10.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary" >Edit</a>
        <a href="cr10.php?delete=<?php echo $row['id']; ?>" class="btn btn-info" >Delete</a>
      </div>
    </div>

  <?php endwhile; ?>
  </div>
</div>
<div class="container-fluid">
  <form action="cr10.php" enctype="multipart/form-data" method ="post" id="information" class="text-white bg-dark border border-white rounded">
    <h1>Create a new Entry:</h1>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-row">
       <div class="form-group col-6">
           <label  for="title">Title:</label>
           <input type="text" class="form-control" name= "title" id="firstName" value="<?php echo $title; ?>">
       </div>
       <div class="form-group col-6">
           <label for ="author">Author:</label>
           <input  type="text" class="form-control" name="author"  id="lastName" value="<?php echo $author; ?>">
       </div>
       <div class="form-group col-6">
           <label for= "ISBN">ISBN or Identification Number:</label>
           <input  type="text" class="form-control" name= "isbn" id="emailAddress" value="<?php echo $ISBN; ?>">
       </div>
       <div class="form-group col-6">
           <label for ="date">Publishing Date:</label>
           <input  type="date" name="pub_date" class="form-control" name="author"  id="lastName" value="<?php echo $date; ?>">
       </div>
       <div class="form-group col-6">
           <label for ="publisher">Publisher:</label>
           <input  type="text" name="publisher" class="form-control" name="author"  id="lastName" value="<?php echo $publisher; ?>">
       </div>
       <div class="form-group col-6">
           <label for= "desc">Description:</label>
           <textarea  name= "description" class="form-control" id="describe"><?php echo $desc; ?></textarea>
       </div>
       <div class="form-group col-6">
           <label for= "desc">Type:</label>
           <select name="type">
             <option value="Book">Book</option>
             <option value="Comic">Comic</option>
             <option value="Game">Game</option>
             <option value="Manga">Manga</option>
             <option value="Movie">Movie</option>
           </select>
       </div>
       <div class="form-group col-6">
           <label for= "desc">Upload Image:</label>
           <input  type="file" class="form-control" name= "avatar" id="images" accept="img/*" value="<?php echo $img; ?>">
       </div>
      </div>
       <?php 
       if ($update == true):
       ?>
       <button class="btn btn-primary btn-sm btn-block" type= "submit" name="update">Update</button>
       <?php else: ?>
       <button class="btn btn-primary btn-sm btn-block" type= "submit" name="save">Save</button>
       <?php endif; ?>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>