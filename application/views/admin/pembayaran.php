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

    <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

    <!-- Icon Cards-->
    
    <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-graduation-cap"></i>
              Pembayaran
                <div class="btn-group mr-1 float-right" role="group" aria-label="First group">
                <a href="<?php echo site_url('admin/index/addpembayaran') ?>"><div class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Add Item</div></a></div>
            <div class="btn-group mr-2 float-right" role="group" aria-label="Second group">
               <button class="btn btn-success btn-sm " data-toggle="modal" data-target="#printpembayaran"><i class="fas fa-print"></i> Print</button></div></div>
            <div class="card-body">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>NIS</th>
                      <th>Bulan</th>
                      <th>Tahun</th>
                      <th>SPP</th>
                      <th>SPP Nominal</th>
                      <th>LKS</th>
                      <th>LKS Nominal</th>
                      <th>DLL</th>
                      <th>DLL Nominal</th>
                      <th>Denda</th>
                      <th>Denda Nominal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>NIS</th>
                      <th>Bulan</th>
                      <th>Tahun</th>
                      <th>SPP</th>
                      <th>SPP Nominal</th>
                      <th>LKS</th>
                      <th>LKS Nominal</th>
                      <th>DLL</th>
                      <th>DLL Nominal</th>
                      <th>Denda</th>
                      <th>Denda Nominal</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                  <td>1</td>
                  <td>666</td>
                  <td>Coding 3 jam</td>
                  <td>Akhir</td>
                  <td>666</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                  <td><div class="btn-group mr-1 float-right" role="group" aria-label="First group"><a href="#"><div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div></a>&nbsp;
                  <a href="#"><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></a></div></td>
                </tr>
                </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
