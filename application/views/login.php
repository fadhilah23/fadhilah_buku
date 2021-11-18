<!doctype html>
<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>BUKU</title>
  </head>
  <body style="background-image: url(https://i.pinimg.com/736x/63/cd/e7/63cde71113a37e1ea20ae246627e0310.jpg);">
    <div class="container-fluid"style="background-image: url(https://i.pinimg.com/736x/63/cd/e7/63cde71113a37e1ea20ae246627e0310.jpg);">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url(https://i.pinimg.com/736x/63/cd/e7/63cde71113a37e1ea20ae246627e0310.jpg);">
          <a class="navbar-brand" href=""><?php echo $head['judul']; ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Akun
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="login/logout">Logout</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="welcome/cari_buku">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              
            </form>
          </div>
        </nav>

        <div class="card mt-5 bg-transparent text-dark" >
          <div class="card-header text-center">
            Login
          </div>
          <div class="card-body" style="background-image: url(https://i.pinimg.com/736x/63/cd/e7/63cde71113a37e1ea20ae246627e0310.jpg);">
            <hr>
            <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
            <?php endif; ?>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <form action="" method="post">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                    <small class="text-danger"><?php echo form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                    <small class="text-danger"><?php echo form_error('password'); ?></small>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                  </div>
                </form>
              </div>
              <div class="col-md-4"></div>
            </div>

          </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>