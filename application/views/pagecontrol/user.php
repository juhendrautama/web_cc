			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile User</h6>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="pagecontrol/user/update/<?php echo $user->id_user?>" >
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="basicInput">Nama Lengkap</label>
                        <input name="nama" required type="text" value="<?php echo $user->nama_lengkap?>" class="form-control" id="basicInput" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Username</label>
                        <input name="username" required type="text" value="<?php echo $user->username?>" class="form-control" id="basicInput" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Password</label>
                        <input name="password" type="password" value="" class="form-control" id="basicInput" placeholder="Password">
                        <small style="color:red;">Abaikan jika tidak ingin mengganti password</small>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Foto</label>
                        <input name="userfile" type="file" class="form-control" id="basicInput">
                        <small style="color:red;">Abaikan jika tidak ingin mengganti foto</small>
                    </div>
                    <button name="update" class="btn btn-primary" type="submit">Simpan</button>
                </div>
                <div class="col-md-4">
                    <img class="img-thumbnail" src="upload/user/<?php echo $user->foto?>" width="100%" alt="" />
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


    