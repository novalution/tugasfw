<?= $this->extend("template/master") ?>
<?= $this->section("content") ?>
<div class="main-content container-fluid">
  <section class="section">
    <div class="section-header">
      <h1>Daftar User</h1>
    </div>
    <hr>
    <a class="btn btn-success btn-rounded mb-3" href="/user/create">Tambah Anggota</a>
    <form method="GET" action="" class="form-group">
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="Submit">CARI ANGGOTA</button>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <?php echo $jumlah; ?>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>
        <table id="datatable" class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Avatar</th>
              <th>Username</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1 + (10 * ($page - 1));
            foreach ($siswa as $row) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td><img src="<?= base_url() ?>\assets\img\<?= $row['avatar'] ?>" alt="" width="100px"></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><a href="<?= base_url('user/detail/' . $row['nama']) ?>" class="btn btn-success">
                    Detail</a></td>
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>

<?= $this->Endsection("content") ?>