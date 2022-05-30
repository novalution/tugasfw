<a href="#" id="tambah" class="btn btn-rounded btn-success mb-3">Tambah Anggota</a>

<table id="datatable">
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
        <?php
        $no = 1;
        foreach ($list as $item) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img src="<?= base_url() ?>\assets\img\<?= $item['avatar'] ?>" alt="" width="100px"></td>
                <td><?= $item['username'] ?></td>
                <td><?= $item['email'] ?></td>
                <td>
                    <a href="<?= base_url('user/detail/' . $item['nama']) ?>" class="btn">Detail</a>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
        $('#tambah').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= base_url('/user/getform') ?>",
                dataType: "json",
                success: function(response) {
                    $('#viewmodal').html(response.data).show();
                    $('#formmodal').modal('show');
                }
            });
        });
    });
</script>