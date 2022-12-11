<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container" .padding-top-sm>
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0" ><h5 class="text-center">Admin <span class="font-weight-bold 
            text-primary">Only</span></h5></div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url()?>c_logadmin/auth">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                </div>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <input type="submit"  class="btn btn-primary"   name="tombol_login" value="Login" float center;>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
