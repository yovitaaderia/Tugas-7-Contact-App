<?php $title = 'Register' ?>
<?php 
    ob_start();
    include 'style.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>

<?php $body = ob_get_clean(); ?>
<?php include 'master.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Contact-App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #cd7672;
        font-family: 'Poppins', sans-serif;
      }
      .class mb-3 {
        margin-bottom: 10px;
      }
    </style>
  </head>

  <body>
    <section class="h-100">
      <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5 fs-3 fw-bold">Contact Manager App</div>
            <div class="card shadow">
              <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4 text-center">
                  REGISTRASI
                </h1>
                <form
                  method="POST"
                  class="needs-validation"
                  novalidate=""
                  autocomplete="off"
                >
                  <div class="mb-3">
                    <label class="mb-2 text-muted fw-bold" for="name"
                      >Nama</label
                    >
                    <input
                      id="name"
                      type="text"
                      class="form-control fst-italic"
                      name="name"
                      placeholder="Masukkan nama anda..."
                      value=""
                      required
                      autofocus
                    />
                    <div class="invalid-feedback">Name is required</div>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted fw-bold" for="email"
                      >Email</label
                    >
                    <input
                      id="email"
                      type="email"
                      class="form-control fst-italic"
                      name="email"
                      placeholder="Masukkan email anda..."
                      value=""
                      required
                    />
                    <div class="invalid-feedback">Email is invalid</div>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted fw-bold" for="password"
                      >Password</label
                    >
                    <input
                      id="password"
                      type="password"
                      class="form-control fst-italic"
                      name="password"
                      placeholder="Masukkan password..."
                      required
                    />
                    <div class="invalid-feedback">Password is required</div>
                  </div>

                  <div class="align-items-center d-flex">
                    <a href="<?php echo urlpath('login'); ?>" class="btn btn-primary ms-auto">Register</a>
                  </div>
                </form>
              </div>
              <div class="card-footer py-3 border-0">
                <div class="text-center bg-light">
                  Sudah memiliki akun?
                  <a href="<?php echo urlpath('login'); ?>" class="text-primary">Login<a href="<?php echo urlpath('dashboard'); ?>"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
