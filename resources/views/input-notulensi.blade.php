<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dashboard Input Notulensi</title>
  </head>
  <body>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah Notulensi</button>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Notulensi Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
                <div class="row g-2">
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Nomer Undangan:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Tanggal Rapat:</label>
                          <input type="date" class="form-control" id="recipient-name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Ruang/Lokasi</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Cari</option>
                            <option value="1">C 102</option>
                            <option value="2">C 105</option>
                            <option value="3">C 203</option>
                            <option value="4">C 206</option>
                            <option value="5">M15</option>
                            <option value="6">M22</option>
                        </select>                    
                    </div>
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Waktu Rapat:</label>
                          <input type="time" class="form-control" id="recipient-name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Pemimpin Rapat</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Cari</option>
                            <option value="1">Andhik Ampuh </option>
                            <option value="2">Desy Intan </option>
                            <option value="3">Umi Sa'adah</option>
                            <option value="4">Nailussa`ada </option>
                            <option value="5">Iwan Syarif</option>
                            <option value="6">Idris Winarno</option>
                        </select> 
                    </div>
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Notulen Rapat</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Cari</option>
                            <option value="1">Annisa Arsylia</option>
                            <option value="2">Madani Sofi </option>
                            <option value="3">Tsania Ursila</option>
                            <option value="4">Salwa Fathiyatus </option>
                            <option value="5">Lisa Hidayatus </option>
                            <option value="6">Iga Dwi Lestari</option>
                        </select> 
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Jumlah Agenda</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Cari</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select> 
                    </div>
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Peserta Rapat</label>
                          <input type="text" class="form-control" id="recipient-name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Agenda</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Total Peserta Rapat</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Cari</option>
                            <option value="1">5</option>
                            <option value="2">10</option>
                            <option value="3">15</option>
                            <option value="4">20</option>
                            <option value="5">25</option>
                        </select> 
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col-md">
                        <label for="formFile" class="col-form-label">File Lampiran</label>
                        <input type="file" class="form-control" id="recipient-name">
                    </div>
                    <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Detail Rapat</label>
                          <input type="text" class="form-control" id="recipient-name">
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="col-md">
                        <label for="formFile" class="col-form-label">Upload File Notulensi</label>
                        <input type="file" class="form-control" id="recipient-name">
                    </div>
                    <!-- <div class="col-md">
                        <label for="recipient-name" class="col-form-label">Tanggal Rapat:</label>
                          <input type="text" class="form-control" id="recipient-name">
                    </div>
                  </div> -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>