<?= $this->extend("template/master") ?>
<?= $this->section("content") ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Tambah Data</h2>
                <form id="form" action="<?= base_url('user/insertAjax'); ?>" method="POST" id="anggotamodal">
                    <?= csrf_field();  ?>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="namadepan" class="col-form-label">Nama Depan</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="namadepan" class="form-control" name="namadepan" autofocus>
                            <div class="invalid-feedback" id="errornamadepan"></div>
                        </div>

                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="namabelakang" class="col-form-label">Nama Belakang</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="namabelakang" class="form-control" name="namabelakang">
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="alamat" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-auto">
                            <textarea type="text" id="alamat" class="form-control" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-check form-check-inline mb-4 mx-3">
                        Jenis Kelamin :
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Laki-Laki" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
                    </div>
                    <div class="form-check form-check-inline mb-4 mx-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="Perempuan" />
                        <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="telepon" class="col-form-label">Telepon</label>
                        </div>
                        <div class="col-auto">
                            <input type="int" id="telepon" class="form-control" name="telepon">
                            <div class="invalid-feedback" id="errortelepon"></div>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-auto">
                            <input type="email" id="email" class="form-control" name="email">
                            <div class="invalid-feedback" id="erroremail"></div>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="username" class="col-form-label">Username</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="username" class="form-control" name="username">
                            <div class="invalid-feedback" id="erroruname"></div>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="password" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="password" class="form-control" name="password">
                            <div class="invalid-feedback" id="errorpass"></div>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="kpass" class="col-form-label">Konfrimasi Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="kpass" class="form-control" name="kpass">
                            <div class="invalid-feedback" id="errorkpass"></div>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <label for="avatar" class="col-form-label">Foto</label>
                        </div>
                        <div class="col-auto">
                            <input type="file" class="form-control" id="avatar" name="avatar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <div class="invalid-feedback" id="errorava"></div>
                        </div>
                    </div>
                    <div class="align-items-center mb-4">
                        <div class="col-auto">
                            <button id="submit" type="submit" class="btn btn-success my-3">Tambah Anggota</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.error) {
                            if (response.error.namadepan) {
                                $('#namadepan').addClass('is-invalid');
                                $('#errornamadepan').html(response.error.namadepan);
                            } else {
                                $('#namadepan').removeClass('is-invalid');
                                $('#errornamabelakang').html('');
                            }

                            if (response.error.telepon) {
                                $('#telepon').addClass('is-invalid');
                                $('#errortelepon').html(response.error.telepon);
                            } else {
                                $('#telepon').removeClass('is-invalid');
                                $('#errortelepon').html('');
                            }

                            if (response.error.email) {
                                $('#email').addClass('is-invalid');
                                $('#erroremail').html(response.error.email);
                            } else {
                                $('#email').removeClass('is-invalid');
                                $('#erroremail').html('');
                            }

                            if (response.error.username) {
                                $('#username').addClass('is-invalid');
                                $('#erroruname').html(response.error.username);
                            } else {
                                $('#username').removeClass('is-invalid');
                                $('#erroruname').html('');
                            }

                            if (response.error.password) {
                                $('#password').addClass('is-invalid');
                                $('#errorpass').html(response.error.password);
                            } else {
                                $('#password').removeClass('is-invalid');
                                $('#errorpass').html('');
                            }

                            if (response.error.kpass) {
                                $('#kpass').addClass('is-invalid');
                                $('#errorkpass').html(response.error.kpass);
                            } else {
                                $('#kpass').removeClass('is-invalid');
                                $('#errorkpass').html('');
                            }

                            if (response.error.avatar) {
                                $('#avatar').addClass('is-invalid');
                                $('#errorava').html(response.error.avatar);
                            } else {
                                $('#avatar').removeClass('is-invalid');
                                $('#errorava').html('');
                            }


                        } else {
                            alert(response.sukses);
                            window.location.replace('/user/index');
                        }
                    }
                });
            });
        });
    </script>
</section>
<?= $this->endSection("content") ?>