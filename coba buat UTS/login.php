

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login FTI</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    <header>
        <style>
            .backgrumundimg {
                background-image: url(img/LogoFTI.jpG);
                background-repeat: no-repeat;
                background-position: top right ;
            }
        </style>
    </header>
</head>
<body class="bg-light">
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Masuk ke akun Mahasiswa FTI</h4>
        <p>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
            <br>
            <br>
            <br>

            <section> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img img-responsive" src="img/LogoFTI.jpG" width="200px"  />
                </div>
            </div>
        </div>
    </section>

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>
        


    </div>
</div>
    
</body>
</html>