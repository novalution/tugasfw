<?= $this->extend("template/master") ?>
<?= $this->section("content") ?>

<main style="margin-top: 58px">
  <div class="container-fluid pt-4">
    <!-- Section: Main chart -->
    <section class="mb-4">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Hello, <?= $list2['nama'] ?> !</strong></h5>
        </div>
        <div class="card-body">
          <h1>Biodata <?= $list2['username'] ?></h1>
          <div class="row">
            <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                  <td>Nama</td>
                  <td> <?= $list2['nama'] ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td> <?= $list2['alamat'] ?></td>
                </tr>
                <tr>
                  <td>Tempat Tanggal Lahir</td>
                  <td> <?= $list2['tempat_lahir'] . '/' . $list2['tanggal_lahir'] ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td> <?= $list2['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td> <?= $list2['email'] ?></td>
                </tr>
                <tr>
                  <td>Telepon</td>
                  <td> <?= $list2['telepon'] ?></td>
                </tr>
                <tr>
                  <td>Terdaftar Sejak</td>
                  <td> <?= $list2['created_at'] ?></td>
                </tr>
              </table>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-8 offset-md-2 ">
                  <img src="<?= base_url() ?>\assets\img\<?= $list2['avatar'] ?>" alt="" width="100%">
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-6"><a href="#" class="btn btn-warning btn-block">Edit</a></div>
                <div class="col-md-6"><a href="#" class="btn btn-danger btn-block">Delete</a></div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- Section: Main chart -->

  </div>
  <?= $this->Endsection("content") ?>