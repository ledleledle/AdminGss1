<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

    <div class="card mb-3">
            <div class="card-header">
              <strong>Input Data</strong> Admin</div>
            <div class="card-body">
              <form method="POST" action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="NIP">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Password">
                  </div>
              </form>
            </div>
            <div class="card-footer small text-muted"><button class="btn btn-primary btn-sm"><i class="fas fa-upload"></i> Submit</button></div>
          </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
