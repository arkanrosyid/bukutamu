<div class="container-fluid">
              

                
                
                <div class="container mt-3" style="padding-top : 5px;">

                <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
                </div>
                <div class="row">

                    
                 <div class="col-lg-6">
                 <div class="button " style="padding= 10px;" >
                        <button type="button" class="btn btn-primary isiData " data-toggle="modal" data-target="#tambah">
                            Isi Buku Tamu
                        </button>
                    </div>

                    
                <form action="<?= BASEURL;?>public/home/cari" method="post">
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i=1;
                    foreach($data['tamu'] as $tamu) : ?>
            
                        <tr>
                        <th scope="row"><?= $i?></th>
                        <td><?= $tamu['nama']?></td>
                        <td><?= $tamu['email']?></td>
                        <td><p style="  word-break: break-all;">
                        <?= $tamu['komentar']?>
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
                    
                    <form action="<?=BASEURL?>public/home/tambah" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data</h5>
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