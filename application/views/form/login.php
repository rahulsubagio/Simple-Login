<body class="text-center">
  <form class="form-signin" action="<?= base_url('auth/login') ?>" method="POST">
    <img class="mb-5" src="<?= base_url('assets/') ?>gambar/logo.png" alt="" width="120">
    <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
    <?php if ($this->session->flashdata('success')) : ?>
      <div class="alert alert-success" role="alert">
        <?= $this->session->flashdata('success') ?>
      </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('failed')) : ?>
      <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('failed') ?>
      </div>
    <?php endif; ?>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <div class="text-center">
      <a class="note text-decoration-none" href="<?= base_url('auth/register') ?>">Create an Account!</a>
    </div>
    <hr>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <a class="btn btn-lg btn-danger btn-block" type="button" href="<?= base_url('auth') ?>">Home</a>
    <p class="mt-5 mb-3 text-muted">KopiPaste &copy; 2020</p>
  </form>
</body>

</html>