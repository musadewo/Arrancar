<form action="<?= base_url('admin/tambah_aksi') ?>" method="POST">
    <div class="form-group">
        <label>username</label>
        <input type="text" name="username" class="form-control">
        <?= form_error('username', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <div class="form-group">
        <label>nama</label>
        <input type="text" name="nama" class="form-control">
        <?= form_error('nama', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <div class="form-group">
        <label>password</label>
        <input type="text" name="password" class="form-control">
        <?= form_error('password', '<div class="text-small text-danger">', '</div>')?>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">Simpan</i></button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash">Hapus</i></button>
</form>