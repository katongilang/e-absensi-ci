<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="nav-md" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
  <div class="container body">
    <div class="main_container">


     <!-- sidebar menu -->
     <?php $this->load->view("admin/_partials/sidebar.php") ?>
     <!-- /sidebar menu -->


     <!-- top navigation -->
     <?php $this->load->view("admin/_partials/navbar.php") ?>
     <!-- /top navigation -->

     <div class="right_col" role="main">
      <div class="page-title">
        <div class="title_left">
          <span class="badge" style="font-size: 2em;">UPLOAD DATA ABSEN DATANG</span>
        </div>
        <div class="title_right col-md-3 col-xs-12">
          <div class="pull-right">
           <?php
           date_default_timezone_set('Asia/Jakarta');
           $date=date("d/m/Y");
           echo "$date  ";
           ?>
           <span id="clock"></span>
         </div>
       </div>
     </div>

     
     <div class="row" >
      <div class="col-md-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
          <h1 id="show_data"></h1>
          <h2 style="margin-right: 20px;"><i class="fa fa-edit"></i> Form Upload Data</h2> 
          <div class="navbar-right">
           <a href="<?=base_url('Admin_upload_finger/absen_datang')?>" type="submit" class="btn btn-danger">Batal <i class="fa fa-close"></i></a>   
           <span>
            <ul class="nav panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
          </span>
        </div>  

        <div class="clearfix"></div>
      </div>
      <div class="x_content">
       <form class="form-horizontal form-label-left input_mask" action="<?= base_url(); ?>Admin-Manajemen-Kategori/tambah" method="POST">


        <div class="form-group">
          <div class="col-md-3 col-xs-12">
            <input name="gambar" type="file" id="gambar">
          </div>
          <button type="submit" name="submit" value="Submit" class="btn btn-success"><i class="fa fa-eye"></i> Lihat Data</button>
        </div>

      </form>
    </div>

  </div> 
</div>  
</div>
</div>

<!-- footer content -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- /footer content -->
</div>
</div>

<!------------------- File JS ---------------------->
<?php $this->load->view("admin/_partials/js.php") ?>
<!-- bootstrap-daterangepicker -->
<script src="<?=base_url('')?>assets/js/moment.min.js"></script>
<script src="<?=base_url('')?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script>
  $('#myDatepicker1').datetimepicker({
    format: 'DD.MM.YYYY'
  });
  $('#myDatepicker2').datetimepicker({
    format: 'DD.MM.YYYY'
  });
</script>
<!------------------- File JS ---------------------->   
</body>
</html>