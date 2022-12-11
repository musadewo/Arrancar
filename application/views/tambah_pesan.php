<form action="<?= base_url('pesan/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label>nama</label>
        <input type="text" name="nama" class="form-control">
        <?= form_error('nama', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" class="form-control">
        <?= form_error('email', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <div class="form-group">
        <label>nomor telepon</label>
        <input type="number" name="nomor_telepon" class="form-control">
        <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <div class="form-group">
        <label>subject</label>
        <input type="text" name="subject" class="form-control">
        <?= form_error('subject', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <div class="form-group">
        <label>pesan</label>
        <input type="text" name="pesan" class="form-control">
        <?= form_error('pesan', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash">Hapus</i></button>
</form>