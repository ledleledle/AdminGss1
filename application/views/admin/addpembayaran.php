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
              <strong>Input</strong> Pembayaran</div>
            <div class="card-body">
              <form method="POST" action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="NIS">
                  </div>
                  <div class="form-group">
                    <label><b>Bulan :</b></label>
                      <select class="form-control">
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>Tahun :</b></label>
                      <select class="form-control">
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label><b>SPP :</b></label>
                      <select class="form-control">
                        <option>Lunas</option>
                        <option>Belum Lunas</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                      <input type="text" class="form-control" id="amount2" placeholder="SPP Nominal">
                      </div>
                  </div>
                  <div class="form-group">
                    <label><b>LKS :</b></label>
                      <select class="form-control">
                        <option>Lunas</option>
                        <option>Belum Lunas</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                      <input type="text" class="form-control" id="amount" placeholder="LKS Nominal">
                      </div>
                  </div>
                  <div class="form-group">
                    <label><b>DLL :</b></label>
                      <select class="form-control">
                        <option>Lunas</option>
                        <option>Belum Lunas</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                      <input type="text" class="form-control" id="amount1" placeholder="DLL Nominal">
                      </div>
                  </div>
                  <div class="form-group">
                    <label><b>Denda :</b></label>
                      <select class="form-control">
                        <option>Lunas</option>
                        <option>Belum Lunas</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                      <input type="text" class="form-control" id="amount3" placeholder="Denda Nominal">
                      </div>
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
    <script>
      $(document).ready(function() {
    $("#amount").on("input", function() {
        // allow numbers, a comma or a dot
        var v= $(this).val(), vc = v.replace(/[^0-9,\.]/, '');
        if (v !== vc)        
            $(this).val(vc);
    });
});
       $(document).ready(function() {
    $("#amount1").on("input", function() {
        // allow numbers, a comma or a dot
        var v= $(this).val(), vc = v.replace(/[^0-9,\.]/, '');
        if (v !== vc)        
            $(this).val(vc);
    });
});
        $(document).ready(function() {
    $("#amount2").on("input", function() {
        // allow numbers, a comma or a dot
        var v= $(this).val(), vc = v.replace(/[^0-9,\.]/, '');
        if (v !== vc)        
            $(this).val(vc);
    });
});
        $(document).ready(function() {
    $("#amount3").on("input", function() {
        // allow numbers, a comma or a dot
        var v= $(this).val(), vc = v.replace(/[^0-9,\.]/, '');
        if (v !== vc)        
            $(this).val(vc);
    });
});
    </script>
</body>
</html>
