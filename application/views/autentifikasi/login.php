  <div class="page-header clear-filter login" filter-color="blue-ocean">
    <div class="page-header-image" style="background-image:url(<?= base_url('assets/img/assets/login-header.jpg') ?>)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="POST" action="<?= base_url('autentifikasi') ?>">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="../assets/img/now-logo.png" alt="">
                </div>
              </div>
              <?= $this->session->flashdata('pesan'); ?>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </span>
                  </div>
                  <input type="text" name="email" placeholder="Email..." class="form-control" />
                </div>
                <?= form_error('email', '<h6 class="text-primary pull-left mt-0 pl-3">', '</h6>'); ?>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </span>
                  </div>
                  <input type="password" name="password" placeholder="Password..." class="form-control" />
                </div>
                <?= form_error('password', '<h6 class="text-primary pull-left mt-0 pl-3">', '</h6>'); ?>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-info btn-round btn-lg btn-block">Masuk</button>
                <div class="pull-left">
                  <h6>
                    <a href="<?= base_url('autentifikasi/registrasi') ?>" class="link">Buat Akun</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#pablo" class="link">Lupa Password</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>