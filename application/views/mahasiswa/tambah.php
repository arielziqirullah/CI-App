<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
              
              <form action="" method="post">
                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama">
                      <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                      <label for="nim">Nim</label>
                      <input type="text" class="form-control" name="nim" id="nim">
                      <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" id="email">
                      <small class="form-text text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                      <option value="Teknik Elektro">Teknik Elektro</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Teknik Sipil">Teknik Sipil</option>
                      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Industri">Teknik Industri</option>
                      <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                      <option value="Teknik Kelautan">Teknik Kelautan</option>
                      <option value="Teknik Sistem Perkapalan">Teknik Sistem Perkapalan</option>
                      <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                      <option value="Teknik Pengembangan Wilayah Kota">Teknik Pengembangan Wilayah Kota</option>
                      <option value="Teknik Geologi">Teknik Geologi</option>
                      <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                    </select>
                  </div>
                  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
              </form>    
            </div>
        </div>

            

        </div>
    </div>

</div>