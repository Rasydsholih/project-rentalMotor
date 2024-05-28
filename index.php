<style>
        body{
            display:flex;
            justify-content:center;
            flex-direction:column;
        }

        

        
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel="icon" type="image/x-icon" href="asset/img/motor.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  

form {
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 600px;
    position: relative;
    left: 60px;
}
</style>
<body>
        <br>
        <h1 style="text-align: center;">RENTAL MESSI</h1>

        <hr>
        
       
            <form class="row  mx-auto" method="post" action="" style="margin-left: 100px;">
                <div class="col-sm-3">
                    <label class="visually-hidden" for="nama">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="specificSizeInputName" placeholder="Nama" name="nama">
                </div>
                <div class="col-sm-3">
                    <label class="visually-hidden" for="waktu">Waktu</label>
                    <input type="number" class="form-control" id="specificSizeInputName" placeholder="Waktu" name="waktu">
                </div>
                <div class="col-sm-3">
                    <label class="visually-hidden" for="jenis">jenis motor</label>
                    <select class="form-select" id="specificSizeSelect" name="jenis">
                    <option value="Nmax">Nmax</option>
                    <option value="Vesmet">Vesmet</option>
                    <option value="Aerox">Aerox</option>
                    <option value="Zx25r">Zx25r</option>
                    </select>
                </div>
                <div class="switch">
                    <button name="kirim" style="width: 120px;" type="submit" class="btn btn-primary mt-2 ">Tambah</button>
                </div>
            </form>
       
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-SYyqXdpJnFDTLPQ4d+aCXOwkgxEV9vmV1Evr3fNfNEW0c8jweW0CKfdvuqQtkUfY" crossorigin="anonymous"></script>
</body>
</html>



<?php

include 'rentalmotor.php';  

$proses = new Rental();
$proses->setHarga(110000, 100000, 150000, 90000);

if (isset($_POST['kirim'])) {
    $proses->Nama = $_POST['nama'];
    $proses->Waktu = $_POST['waktu'];
    $proses->Jenis = $_POST['jenis'];

    $proses->CetakRental();
}
?>