<?= $this->session->flashdata('pesan')?>
<div class="card">
    <div class="card-header">
        <a href="<?= base_url('admin/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">
            Tambah admin</i> </a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id_user</th>
                    <th>username</th>
                    <th>nama</th>
                    <th>password</th>
                    <th>action</th>
                </tr>
        </thead>
        <?php $no=1;
        foreach($admin as $adm) :  ?>
        <tbody>
            <tr>
                <td><?= $no++?> </td>
                <td><?= $adm->username?></td>
                <td><?= $adm->nama?></td>
                <td><?= $adm->password?></td>
                <td>
                    <button data-toggle="modal" data-target="#edit<?= $adm->id_user?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i></button><a href="<?= base_url('admin/delete/' .$adm->id_user)?>" 
                    class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                    <i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
        <?php endforeach?>
    </table>
    </div>
</div>
<?php foreach($admin as $adm) { ?>
    <div class="modal fade" id="edit<?= $adm->id_user?>" tabindex="-1" aria-labelledby="exampleModalLabel" 
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/edit/' .$adm->id_user) ?>" method="POST">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="username" class="form-control" value="<?= $adm->username ?>">
                        <?= form_error('username', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label>nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $adm->nama ?>">
                        <?= form_error('nama', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="text" name="password" class="form-control" value="<?= $adm->password ?>">
                        <?= form_error('password', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="modal-footer">   
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save">Simpan</i></button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash">Hapus</i></button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<?php } ?>