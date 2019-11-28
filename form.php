<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Email</th>
            <th scope="col">No Ktp</th>
            <th scope="col">Tanggal lahir</th>
            <th scope="col">Bulan</th>
            <th scope="col">Tahun Lahir</th>
            <th scope="col">Info Tiket</th>
            <th scope="col">Harga Tiket</th>
            <th scope="col">Jumlah Tiket</th>
            <th scope="col">Total Harga</th>


            <!-- nambah kolom yg lu kerjakan masing2 -->
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $_GET['first'];?>
            </td>
            <td><?php echo $_GET['last']; ?></td>
            <td><?php echo $_GET['email']; ?></td>
            <td><?php echo $_GET['ktp']; ?></td>
            <td><?php echo $_GET['lahir']; ?></td>
            <td><?php echo $_GET['bulan']; ?></td>
            <td><?php echo $_GET['tahun']; ?></td>
            <td><?php if (isset($_GET['tiket'])) {
              echo $_GET['tiket'];
            };?></td>

            <td><?php echo $_GET['harga_tiket']; ?></td>
                <td><?php echo $_GET['totaltiket']; ?></td>
                    <td><?php echo $_GET['totaltoket']; ?></td>





              <!-- nambah kolom yg lu kerjakan masing2 -->
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>
