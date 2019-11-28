<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="life.js"></script>
    <title>Formulir Pembelian Tiket</title>

  </head>
  <body>
    <div class="container">
      <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

        <!-- hasan judul nama no ktp -->


        <!-- taufik Tanggal lahir jenis Tiket harga tiket -->
            <form action="form.php">
      <div class="form-group">
        <label for="exampleFormControlSelect1" name="tgl lahir">Tanggal Lahhir</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <?php for ($i=1; $i <= 31 ; $i++) {
               echo "<option> $i </option>";
            } ?>
          </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1" name="bulan madu">Bulan</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <?php for ($i=1; $i <= 12 ; $i++) {
             echo "<option> $i </option>";
          } ?>

            </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1" name="tgl lahir">Tahun Lahir</label>
          <select class="form-control" id="exampleFormControlSelecet1">
              <?php for ($i=1800; $i <= 2019 ; $i++) {
                 echo "<option> $i </option>";
              } ?>
            </select>
        </div>
          <label for="exampleFormControlSelect1" name="tiket">Info Tiket</label><br>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tiket" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">VVIP</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tiket" id="inlineRadio2">
        <label class="form-check-label" for="inlineRadio2">VVIP A</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tiket" id="inlineRadio2">
        <label class="form-check-label" for="inlineRadio3">VVIP B</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tiket" id="inlineRadio2">
        <label class="form-check-label" for="inlineRadio4">VVIP C</label>
      </div>
      <div class="form-group">
      <label for="exampleFormControlInput1" name="harga tiket">Harga Tiket</label>
      <input type="email" class="form-control" name="harga tiket" id="exampleFormControlInput1" placeholder="Rp.50.000">
    </div>
    </form>





        <!-- adit jumlah Tiket total harga tombol submit -->


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>
