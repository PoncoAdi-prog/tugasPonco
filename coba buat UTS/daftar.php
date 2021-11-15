<!DOCTYPE html>
<html>
<head>
    <title> balajar kerjakan UTS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1 class="text-center">Selamat datang di FTI </h1>
    <h2 class="text-center"> Silahkan isi form dengan benar </h2>

    <!-- Awal Cad From -->
    <div class="card mt-3">
     <div class="card-header bg-primary text-white">
        From Input Data mahasiswa
     </div>
     <div class="card-body">
        <form action= "pendaftaran.php" method= "POST">
        <fieldset>
            <legend class="col-form-label col-sm-2 pt-0">Jenis kelamin</legend> <!--checkbox   -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>
            
            <p>     <!--required= wajib isi!   -->
                <label for="nim">   NIM: </label>
                <input type="test" name="nim" required placeholder="isikan NIM anda"  />
            </p> 
            <p>
                <label for="nama">  Nama:</label>
                <input type="text" name="nama" required placeholder= "isikan nama" />
            </p>
            <p>
                <label for="alamat">    Alamat: </label>
                <input type="text" name="alamat" required placeholder= "isikan alamat anda dengan benar" />
            </p>
            <p>
                <label for="prodi">Prodi: </label>
                <input type="text" name="prodi" placeholder= "isikan dengan benar" />
            </p>
                <label for="Usia"> Usia :</label> <!--combobox   -->
                <select name="usia" id="">
                    <option value="volvo">17</option>
                    <option value="saab">18</option>
                    <option value="opel">19</option>
                    <option value="audi">21</option>
                    <option value="audi">22</option>
                    <option value="audi">23</option>
                    <option value="audi">24</option>
                    <option value="audi">25</option>
                    <option value="audi">26</option>
                    <option value="audi">28</option>
                    <option value="audi">29</option>
                    <option value="audi">30</option>
                    <option value="audi">31</option>
                </select>
                <br><br>
            <p>
                <input type="submit" value="Simpan"  name="daftar" />
            </p>
            <div class="mb-3">  <!-- textarea  -->
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>
        </fieldset>
        </from>
       </div> 
      </div>
    <!-- Awal Cad From -->


    <!-- Awal Cad tabel -->
  
    <!-- Awal Cad tabel -->

</div>

</body>

</html>