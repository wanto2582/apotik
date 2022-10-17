<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html class="fixed sidebar-left-collapsed">
    <head>  
		<meta charset="UTF-8"> 
		<link rel="shortcut icon" href="<?php echo base_url()?>/assets/images/favicon.png" type="image/ico">   
		<title>Apotek Kita</title>    
		<meta name="author" content="Paber"> 
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/stylesheets/theme.css" /> 
		<link rel="stylesheet" href="<?php echo base_url()?>assets/stylesheets/skins/default.css" /> 
		<link rel="stylesheet" href="<?php echo base_url()?>assets/stylesheets/theme-custom.css"> 
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/morris/morris.css" />
		<script src="<?php echo base_url()?>assets/vendor/modernizr/modernizr.js"></script>  
	</head>
	<body class="bgbody">
		<section class="body">

			<!-- start: header -->
            <?php $this->load->view("komponen/header.php") ?>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
                <?php $this->load->view("komponen/sidebar.php") ?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">  
						<h2>Keuangan</h2>  
					</header>  

					<!-- start: page -->
					<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						 
							<div class="inner-body mg-main">  
                                <section class="panel" style="margin-top:-30px;"> 
                                    <div class="panel-body">   
                                        <div class="row"> 
                                            <div class="col-md-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-xl-12">
                                                        <section class="panel">
                                                            <div class="panel-body bg-primary">
                                                                <div class="widget-summary"> 
                                                                    <div class="widget-summary-col">
                                                                        <div class="summary">
                                                                            <h4 class="title">Total Hutang Belum Dibayar</h4>
                                                                            <div class="info">
                                                                                <strong class="amount" id="total_hutang_belum_bayar"></strong>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div> 
                                                    <div class="col-md-6 col-xl-12">
                                                        <section class="panel">
                                                            <div class="panel-body bg-primary">
                                                                <div class="widget-summary"> 
                                                                    <div class="widget-summary-col">
                                                                        <div class="summary">
                                                                            <h4 class="title">Hutang Akan Jatuh Tempo</h4>
                                                                            <div class="info">
                                                                                <strong class="amount" id="akan_jatuh_tempo"></strong>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div> 
                                                    <div class="col-md-6 col-xl-12">
                                                        <section class="panel">
                                                            <div class="panel-body bg-primary">
                                                                <div class="widget-summary"> 
                                                                    <div class="widget-summary-col">
                                                                        <div class="summary">
                                                                            <h4 class="title">Hutang Sudah Jatuh Tempo</h4>
                                                                            <div class="info">
                                                                                <strong class="amount" id="sudah_jatuh_tempo"></strong>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div> 
                                                    <div class="col-md-6 col-xl-12">
                                                        <section class="panel">
                                                            <div class="panel-body bg-primary">
                                                                <div class="widget-summary"> 
                                                                    <div class="widget-summary-col">
                                                                        <div class="summary">
                                                                            <h4 class="title">Sudah Dibayar Minggu Ini</h4>
                                                                            <div class="info">
                                                                                <strong class="amount" id="dibayar_minggu_ini"></strong>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </section> 
                                <section class="panel"> 
                                    <div class="panel-body">     
                                        <div class="row"> 
                                            <div class="col-md-9 col-lg-12 col-xl-4">
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-12">
                                                        <section class="panel"> 
                                                            <header class="panel-heading">  
                                                                <h2 class="panel-title">Pemasukan dan Pengeluaran 2 Minggu Terakhir</h2>
                                                            </header>
                                                            <div class="panel-body">  
                                                                <div class="chart chart-md" id="GrafikCash"></div> 
                                                            </div>
                                                        </section>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </section>
							</div>
						</div>
					</section>
					<!-- end: page -->
				</section>
			</div>
 
		</section>

		
		<!-- Vendor -->
		<script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>  
		<script src="<?php echo base_url()?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url()?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url()?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url()?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url()?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<script src="<?php echo base_url()?>assets/javascripts/theme.js"></script> 
		<script src="<?php echo base_url()?>assets/javascripts/theme.init.js"></script>   
		<script src="<?php echo base_url()?>assets/vendor/raphael/raphael.js"></script>
        <script src="<?php echo base_url()?>assets/vendor/morris/morris.js"></script>
        <script> 

 

	$.ajax({
        url: '<?php echo base_url()?>dashboard/cash_2_minggu', // getchart.php
        dataType: 'JSON',
        type: 'GET', 
        success: function(response) {

			Morris.Line({
				resize: true,
				element: 'GrafikCash',
				data: response,
				xkey: 'tanggal',
				ykeys: ['masuk','keluar'],
				labels: ['Uang Masuk (Rp) ','Uang Keluar (Rp) '],
				hideHover: true,
				lineColors: ['#0088cc', '#734ba9'],
				xLabelFormat: function (d) {
				    return ("0" + d.getDate()).slice(-2) + '-' + ("0" + (d.getMonth() + 1)).slice(-2) + '-' + d.getFullYear();
				},
				xLabelAngle: 45,
			});
        }
    });


	$.ajax({
        url: '<?php echo base_url()?>dashboard/laporan_ringkas', // getchart.php
        dataType: 'JSON',
        type: 'GET', 
        success: function(response) {
            $.each(response, function(i, item) {  
            $('#akan_jatuh_tempo').html(item.akan_jatuh_tempo);  
            $('#dibayar_minggu_ini').html(item.dibayar_minggu);  
            $('#total_hutang_belum_bayar').html(item.total_hutang_belum_bayar);   
            $('#sudah_jatuh_tempo').html(item.sudah_jatuh_tempo);  
            }); 
        }
    });
    

	</script>

	</body>
</html>