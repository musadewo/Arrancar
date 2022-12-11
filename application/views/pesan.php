<?= $this->session->flashdata('pesan')?>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pesan/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus">
            Tambah pesan</i> </a>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id_pesan</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>nomor_telepon</th>
                    <th>suject</th>
                    <th>pesan</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $id_pesan=1;
            foreach($pesan as $psn) :  ?>
            <tbody>
                <tr>
                    <td><?= $id_pesan++?> </td>
                    <td><?= $psn->nama?></td>
                    <td><?= $psn->email?></td>
                    <td><?= $psn->nomor_telepon?></td>
                    <td><?= $psn->subject?></td>
                    <td><?= $psn->pesan?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $psn->id_pesan?>" 
                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <a href="<?= base_url('pesan/delete/' .$psn->id_pesan)?>" class="btn btn-danger btn-sm" 
                        onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="fas fa-trash">                        </i></a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach?>
            </table>
        </div>
    </div>
    <?php foreach($pesan as $psn) { ?>
        <div class="modal fade" id="edit<?= $psn->id_pesan?>" tabindex="-1" aria-labelledby="exampleModalLabel" 
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('pesan/edit/' .$psn->id_pesan) ?>" method="POST">
                    <div class="form-group">
                        <label>nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $psn->nama ?>">
                        <?= form_error('nama', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" class="form-control" value="<?= $psn->email ?>">
                        <?= form_error('email', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label>nomor_telepon</label>
                        <input type="number" name="nomor_telepon" class="form-control" value="<?= $psn->nomor_telepon ?>">
                        <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label>subject</label>
                        <input type="text" name="subject" class="form-control" value="<?= $psn->subject ?>">
                        <?= form_error('subject', '<div class="text-small text-danger">', '</div>')?>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="pesan" class="form-control" value="<?= $psn->pesan ?>">
                        <?= form_error('pesan', '<div class="text-small text-danger">', '</div>')?>
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
