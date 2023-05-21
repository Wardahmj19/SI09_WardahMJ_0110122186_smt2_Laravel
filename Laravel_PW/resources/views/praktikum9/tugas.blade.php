<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMERIKSAAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
    <h3 class="text-center mt-3">FORM PEMERIKSAAN</h3>
    <hr>
    <hr>
</div>
<form class="m-5" action="{{ route('praktikum9/hasil') }}" method="post">
@csrf
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tgl" name="tgl" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="lhr" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="lhr" name="lhr" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umr" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-hourglass-2"></i>
          </div>
        </div> 
        <input id="umr" name="umr" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="Laki-laki" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="Laki-laki" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="Perempuan" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="Perempuan" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="gp" class="col-4 col-form-label">Gejala Penyakit</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-hotel"></i>
          </div>
        </div> 
        <input id="gp" name="gp" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="wp" class="col-4 col-form-label">Waktu Pemeriksaan</label> 
    <div class="col-8">
      <select id="wp" name="wp" class="custom-select">
        <option value="">---Silahkan Pilih---</option>
        <?php  foreach($wp as $w) { ?>
            <option value="<?= $w; ?>">  <?= $w ?> </option>
        <?php } ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="td" class="col-4 col-form-label">Tekanan Darah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-stethoscope"></i>
          </div>
        </div> 
        <input id="td" name="td" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">mmhg</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="au" class="col-4 col-form-label">Asam Urat</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-stethoscope"></i>
          </div>
        </div> 
        <input id="au" name="au" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">mg/dl</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kl" class="col-4 col-form-label">Kolesterol</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-stethoscope"></i>
          </div>
        </div> 
        <input id="kl" name="kl" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">mg/dl</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="gd" class="col-4 col-form-label">Gula Darah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-stethoscope"></i>
          </div>
        </div> 
        <input id="gd" name="gd" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">mg/dl</div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<table class="table text-center">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis Pemeriksaan</th>
      <th scope="col">Normal Kondisi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Tekanan Darah</td>
      <td>120/80 mmhg</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Asam Urat</td>
      <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kolesterol</td>
      <td>< 200 mg/dl</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Gula Darah</td>
      <td>Puasa : 70 - 110 mg/dl <br>
          2 jam setelah makan : 100 - 150 mg/dl <br>
          Sewaktu/acak : 70 - 125 mg/dl</td>
    </tr>
  </tbody>
</table>
<hr>
</body>
</html>