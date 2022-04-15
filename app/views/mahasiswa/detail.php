<div class="container mt-5">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
      <p class="card-text"><?= $data['mhs']['email']; ?></p>
      <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
      <h5>Mata Kuliah Yang Diambil</h5>
      <ul>
        <?php foreach ($data['studi'] as $studi) : ?>
          <li><?= $studi['namaMatkul']; ?></li>
        <?php endforeach; ?>
      </ul>
      <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      <button data-toggle="modal" data-target="#formModal" class="card-link btn btn-primary">Tambah Matkul</button>
    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Mata Kuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambahMatkul/<?= $data['mhs']['id'] ?>" method="post">
          <input type="hidden" name="id" id="id" value="<?= $data['mhs']['id']; ?>">

          <div class="form-group">
            <label for="matkul">Mata kuliah</label>
            <select class="form-control" id="matkul" name="matkul">
              <?php foreach ($data['mk'] as $mk) : ?>
                <option value="<?= $mk['idMatkul']; ?>"><?= $mk['namaMatkul']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Mata Kuliah</button>
        </form>
      </div>
    </div>
  </div>
</div>