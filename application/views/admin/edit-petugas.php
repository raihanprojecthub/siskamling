<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="" method="post" enctype="multipart/form-data">
      <!-- <input type="hidden" name="id_petugas" value="<php echo $row->id_petugas ?>"> -->
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required value="Alvin Austin"><!-- Value diambil dari database -->
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required value="alvinaustin123@gmail.com"><!-- Value diambil dari database -->
              </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-group">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Masukkan Password" required value="$2y$10$kkAUZwTdHjWWfn.O/EqFUueuCeVvKqzz65Li5d7r7yE10mPjxuNVq"><!-- Value diambil dari database -->
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="level">Roles <span class="text-danger">*</span></label>
                <select name="level" class="form-control form-control-user">
                  <!-- <php foreach ($roles as $r) { ?>
                  <option value="<= $r['id_roles'];?>" <php echo $row->level == $r['nama_roles'] ? 'selected' : '' ?>><= $r['nama_roles'];?></option>
                  <php } ?> -->
                </select>
              </div>
            </td>
          </tr>
        </table>

        <a href="<?php echo site_url('admin/DataPetugas/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>