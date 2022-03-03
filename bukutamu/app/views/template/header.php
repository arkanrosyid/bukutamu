<!doctype html>
<html lang="en">
  <head>
    <title> <?php echo $data['judul'];?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL;?>/public/css/style.css">
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=BASEURL;?>public/">Buku Tamu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=BASEURL;?>public/">Home <span class="sr-only">(current)</span></a>
      </li>
      
    <?php if(isset($_SESSION['admin'])){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL;?>public/admin">Admin</a>
      </li>
      <?php }?>
    </ul>
  </div>
</nav>

