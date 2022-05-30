<div class="modal fade" id="formmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- header-->
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Judul Modal</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                Konten yang ingin ditampilkan disini
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<!-- <div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <?= csrf_field();  ?>
                    <div class="align-items-center">
                        <div class="col-auto">
                            <label for="nama" class="col-form-label">Nama</label>
                        </div>

                    </div>
                    <div class="align-items-center">
                        <div class="col-auto">
                            <label for="alamat" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="alamat" class="form-control" name="alamat">
                        </div>
                    </div>
                    <div class="align-items-center">
                        <div class="col-auto">
                            <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                    <div class="align-items-center">
                        <div class="col-auto">
                            <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="align-items-center">
                        <div class="col-auto">
                            <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-auto">
                            <input type="enum" id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                        </div>
                    </div>
                    <div class="align-items-center">
                        <div class="col-auto">
                            <label for="telepon" class="col-form-label">Telepon</label>
                        </div>
                        <div class="col-auto">
                            <input type="int" id="telepon" class="form-control" name="telepon">
                        </div>
                        <div class="align-items-center">
                            <div class="col-auto">
                                <label for="avatar" class="col-form-label">Foto</label>
                            </div>
                            <div class="col-auto">
                                <input type="file" class="form-control" id="avatar" name="avatar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            </div>
                            <div class="align-items-center">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success my-3">Submit</button>
                                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div> -->