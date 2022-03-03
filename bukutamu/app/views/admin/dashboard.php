<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <li class="nav-item">
        <a name="" id="" class="nav-link" href="<?= BASEURL;?>public/admin/logout" role="button">Log Out</a>
      </li>
      <?php }?>
    </ul>
  </div>
</nav>



  <?php 
    if (empty($_SESSION['admin'])){
        header("Location:" . BASEURL);
        exit;
    }
  ?>
  <div class="container-fluid">
              

                
                
              <div class="container mt-3" style="padding-top : 5px;">

              <div class="row">
              <div class="col-lg-6">
                  <?php Flasher::flash(); ?>
              </div>
              </div>
              <div class="row">

                  
               <div class="col-lg-6">
            
           
              <form action="<?= BASEURL;?>public/admin/cari" method="post">
                  <div class="input-group ">
                
                 
                          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="keyword" id="keyword">
                          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                      </div>
              </form>
                  </div>
                 
                 
              
                  <table class="table" style="margin-top : 10px;">
                  <thead>
                      <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Komentar</th>
                      <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $i=1;
                  foreach($data['tamu'] as $tamu) : ?>
          
                      <tr>
                      <th scope="row"><?= $i?></th>
                      <td scope="row"><?= $tamu['nama']?></td>
                      <td scope="row"><?= $tamu['email']?></td>
                      <td scope="row"><p style="  word-break: break-all;">
                      <?= $tamu['komentar']?>
                      <td scope="row">

                        <button type="button" class="btn btn-primary tampilModalUbah " data-toggle="modal" data-target="#tambah" data-id="<?= $tamu['id'];?>" >
                            Ubah
                        </button>
                    

                     <a href="<?= BASEURL ?>public/admin/hapus/<?= $tamu['id']; ?>" class="btn btn-danger" onclick = "return confirm('You Will Delete This Data!!!');">Delete</a>
                      </td>
                      </p>
                          </td>
                        
                      </tr>
                     
                  </tbody>
                  <?php 
                  $i++;
                  endforeach;
              ?>
                  </table>
              </div>  
          

          </div>
      
          <!-- MODAL -->
      <div class="modal" tabindex="-1" role="dialog" id="tambah">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  
                  <form action="<?=BASEURL?>public/admin/ubah" method="post">
                      <div class="modal-header">
                          <h5 class="modal-title">Ubah Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                                  <label for="exampleFormControlInput1">Nama</label>
                                  <input type="text" class="form-control" name="nama" id="nama" required >
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlInput1">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                              </div>
                              <div class="form-group">
                                  <label for="komentar">Komentar</label>
                                  <textarea class="form-control komentar" id="komentar" name="komentar" rows="3"></textarea>
                                  <div id="the-count">
                                  <span id="current">0</span>
                                  <span id="maximum">/ 300</span>
                                  </div>
                              </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </form>
              </div>
                  
                  

          </div>
      </div>
  </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= BASEURL;?>/public/js/bootstrap.js"></script>
    <script src="<?= BASEURL;?>/public/js/script.js"></script>

</body>
</html>