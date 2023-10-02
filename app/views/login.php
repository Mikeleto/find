
<?php include_once 'header.php' ?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Login</h1>
    </div>
    <div class="card-body">
        <form action="login/verifyUser" method="POST">
            <div class="form-group text-left mb-2">
                <label for="user">Usuario:</label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group text-left mb-2">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group text-left mb-2">
                <input type="checkbox" name="remember">
                <label for="remember">Recordar</label>
                <div class="col-sm-6">
                <a href="login/olvido" class="btn btn-info">¿No recuerdas la contraseña?</a>
                </div>
                </div>
        </div>
    </div>


                </div>
<?php include_once 'footer.php' ?>
           
</body>
</html>
