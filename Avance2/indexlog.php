<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar - COR</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- FontAwesome 6-->
    <script src="https://kit.fontawesome.com/f2f22da355.js" crossorigin="anonymous"></script>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!-- Link al CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body id="log">
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content" >
            <div class="col-12 user-img">
            <img src="images/logoimg.png">
            </div>
            <br>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario" id="user-group">
                </div>
                <br>
                <div class="form-group" >
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña" id="pass-group">
                </div>
                <br>
                <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>Ingresar</button>
            </form>
            <br>
            <br>
        </div>
    </div>
</div>

</body>
</html>