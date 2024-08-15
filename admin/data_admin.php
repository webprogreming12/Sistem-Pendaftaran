<?php 
include('header.php');
$id=$_SESSION['id_admin'];
    $sql_user = "SELECT * FROM admin where id_admin = '$id'";
    $result_user = mysqli_query($koneksi, $sql_user);

        if(mysqli_num_rows($result_user)){
            $data= mysqli_fetch_array($result_user);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Admin</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Admin</h4></div>
              <div class="card-body">

                <form method="POST" action="aksi" class="needs-validation" novalidate="">
                  <input type="hidden" name="id" value="<?= $data['id_admin']; ?>">

                    <div class="form-group ">
                      <label for="last_name" class="d-block text-primary">Username</label>
                      <input id="last_name" type="text" class="form-control" name="username" value="<?= $data['username']; ?>" tabindex="2" required>

                    </div>

                    <div class="form-group mb-3">
                      <label for="password" class="d-block text-primary">Password</label>
                      <input id="password" type="text" class="form-control" name="password" value="<?= $data['password']; ?>" tabindex="3" required>
                  
                    </div>
                  <div class="form-group">
                    <button  name="btn-ubah-admin" class="btn btn-primary btn-sm">
                      Ubah
                    </button>
                  </div>
                </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>