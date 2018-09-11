<?php
    include_once('setting/koneksi.php');
    //deklarasi queri
    $user       = mysqli_query($db, "select * from user a inner join akun b on a.username = b.username where a.username != 'admin' ");
    $user_online= mysqli_query($db, "select * from user where online = 1 and username != 'admin'");
    $user_pria  = mysqli_query($db, "select * from user a inner join akun b on a.username = b.username where jeniskelamin = 'L' and a.username != 'admin'");
    $user_wanita= mysqli_query($db, "select * from user a inner join akun b on a.username = b.username where jeniskelamin = 'P' and a.username != 'admin'");
    //deklarasi count
    $jumlah = $user->num_rows;
    $online = $user_online->num_rows;
    $pria = $user_pria->num_rows;
    $wanita = $user_wanita->num_rows;
?>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default groups">
              <div class="panel-heading">
                <h3 class="panel-title">DATA USER</h3>
              </div>
              <form  action="setting/function/proses_cari.php" method="get">
              <div class="panel-body">
                  <img src="img/status.png" alt="">
                  <h4><?php echo $jumlah ?> User</h4>
              </div>
               <div class="panel-body">
                  <img src="img/memberonline.png" alt="">
                  <h4><?php echo $online ?> Online</h4>
              </div>
               <div class="panel-body">
                  <img src="img/men.png" alt="">
                  <h4><?php echo $pria ?> Pria</h4>
              </div>
               <div class="panel-body">
                  <img src="img/women.png" alt="">
                  <h4><?php echo $wanita ?> Wanita</h4>
              </div>   
            </form>
          </div>
          <div class="panel panel-default friends">
              <div class="panel-heading">
                <h3 class="panel-title">USER TERBARU</h3>
              </div>
              <div class="panel-body">
                <ul>
                <?php
                    include_once('setting/koneksi.php');
                    $new   = mysqli_query($db,"select * from user a inner join akun b on a.username = b.username 
                      order by a.username desc limit 4");
                    while($new2 = mysqli_fetch_array($new)):
                    $nm = $new2['namadepan'];
                    $ff = $new2['foto'];
                ?>
                  <li><a href="#" class="thumbnail"><?php
                      if($ff != '')
                      {
                       echo"<img src='img/profil/$ff' alt='foto profil' width='120px'  height='120px'>";
                      }
                      else
                      {
                        echo"<img src='img/profil/user.png' alt='foto profil' width='100%'  height='100%'>";
                      }
                  ?></a></li>
                <?php
                  endwhile;
                ?>
                </ul>
                <div class="clearfix"></div>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">DAFTAR DISINI!</h3>
              </div>
              <div class="panel-body">
                <?php
                if($_GET['alert'] <> '' )
                {
                  echo"
                      <div class='alert alert-success'>
                        <strong>Success!</strong> Akun Anda Berhasil Di Buat!
                      </div> ";
                }
                elseif ($_GET['error'] <> '' ) {
                  echo"
                    <div class='alert alert-warning'>
                        <strong>Kesalahan!</strong> Password & Konfirmasi Password Harus Sama!
                    </div> 
                  ";
                }
                elseif ($_GET['duplicate'] <> '' ) {
                  echo"
                    <div class='alert alert-danger'>
                        <strong>GAGAL!</strong> Nama Pengguna Sudah Ada, Coba Ganti!
                    </div> 
                  ";
                }
                elseif ($_GET['false'] <> '' ) {
                  echo"
                    <div class='alert alert-danger'>
                        <strong>Ada masalah!</strong> Coba Ulangi Lagi!
                    </div> 
                  ";
                }
              ?>
                <form action="setting/function/proses_tambah_user.php" method="post">
                  <div class="form-group">
                    *Nama Pengguna<input type="text" class="form-control" id="exampleInputEmail3" name="username" placeholder="Masukan Nama Pengguna" required>
                  </div>
                  <div class="form-group">
                    *Nama Depan<input type="text" class="form-control" id="exampleInputEmail3" name="namadepan" placeholder="Nama Depan" required>
                  </div>
                  <div class="form-group">
                    Nama Belakang<input type="text" class="form-control" id="exampleInputEmail3" name="namabelakang" placeholder="Nama Belakang" >
                  </div>
                  <div class="form-group">
                   *Jenis Kelamin <select name="jk" class="form-control">
                      <option value="L">Laki Laki</option>
                      <option value="P">Perempuan</option>
                   </select>
                  </div>
                  <div class="form-group">
                   *Status <select name="status" class="form-control">
                      <option value="Lajang">Lajang</option>
                      <option value="Duda">Duda</option>
                      <option value="Janda">Janda</option>
                      <option value="Tanpa Status">Tanpa Status</option>
                   </select>
                  </div>
                  <div class="form-group">
                    *Password<input type="password" class="form-control" id="exampleInputEmail3" name="password" placeholder="Masukan Password" required>
                  </div>
                   <div class="form-group">
                    *Konfirmasi Password<input type="password" class="form-control" id="exampleInputEmail3" name="konfirpassword" placeholder="Konfirmasi Password" required>
                  </div>
                  <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                  <hr>
                  <div class="pull-left">
                    <b>Catatan</b> <br>
                    <li>Mendaftar berarti menyetujui <a href="#" data-toggle="modal" data-target="#myModal">syarat & ketentuan</a></li>
                    <li>(*) Wajib diisi</li>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-md-5">
            <div class="panel panel-default groups">
              <div class="panel-heading">
                <h3 class="panel-title">KATA MEREKA </h3>
              </div>
              <div class="panel-body">
                <div class="group-item">
                  <img src="img/adela.png" alt="">
                  <h4><a href="#" class="">Riska Nurhikmah</a></h4>
                  <p>Saya Menemukan Suami Saya Disini :*</p>
                </div>
                <div class="clearfix"></div>
                <div class="group-item">
                  <img src="img/wkwk.jpg" alt="">
                  <h4><a href="#" class="">Ikbal Ramadhan</a></h4>
                  <p>Aplikasi Yang Cukup Unik Dan Bermanfaat Untuk Para Jomblo :v</p>
                </div>
                <div class="clearfix"></div>
                <div class="group-item">
                  <img src="img/sukma.jpg" alt="">
                  <h4><a href="#" class="">Sukma Latifah</a></h4>
                  <p>Meskipun pernah dikecewain, tapi akhirnya aku bisa menemukan pasangan abadiku disini.</p>
                </div>
                <div class="group-item">
                  <img src="img/rahman.jpg" alt="">
                  <h4><a href="#" class="">Rohman Supriadi</a></h4>
                  <p>Aplikasi yang bermanfaat untuk para jones.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
