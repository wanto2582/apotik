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

			<?php $this->load->view("komponen/header.php") ?>
			<div class="inner-wrapper"> 
				<?php $this->load->view("komponen/sidebar.php") ?>
				<section role="main" class="content-body">
					<header class="page-header">  
						<h2>Dashboard</h2>  
					</header>  
					<!-- start: page --> 

                    <section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						 
							
                         <div class="inner-body mg-main"> 
                             <div class="row" style="margin-top:-30px;"> 
                                 <div class="col-md-6 col-lg-12 col-xl-6">
                                     <div class="row">
                                         <div class="col-lg-3 col-6">
                                             <section class="panel panel-featured-left panel-featured-primary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-primary">
                                                                 <i class="fa fa-database"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                             <div class="summary">
                                                                 <h4 class="title">Master</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Data</b></strong>
                                                                 <br><span><a href="<?php echo base_url()?>master">
                                                                 <i class="fa fa-database"> Lihat detail</i></a></span>

                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         <div class="col-lg-3 col-6">
                                             <section class="panel panel-featured-left panel-featured-warning">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-warning">
                                                                 <i class="fa fa-plus-square-o"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Transaksi</b></strong>
                                                                     <br><span><a href="<?php echo base_url()?>pembelian">
                                                                     <i class="fa fa-plus-square-o"> Lihat detail</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         <div class="col-lg-3 col-6">
                                             <section class="panel panel-featured-left panel-featured-tertiary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-tertiary">
                                                                 <i class="fa fa-reorder"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Stok</b></strong>
                                                                     <br><span><a href="<?php echo base_url()?>stok">
                                                                     <i class="fa fa-reorder"> Lihat detail</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         <div class="col-lg-3 col-6">
                                             <section class="panel panel-featured-left panel-featured-quartenary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-quartenary">
                                                                 <i class="fa  fa-shopping-cart"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Penjualan</b></strong>
                                                                     <br><span><a href="<?php echo base_url()?>penjualan">
                                                                     <i class="fa  fa-shopping-cart"> Lihat detail</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         
                                         <div class="col-md-12 col-lg-3 col-xl-3">
                                             <section class="panel panel-featured-left panel-featured-secondary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-secondary">
                                                                 <i class="fa fa-money"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Keuangan</b></strong>
                                                                     <br><span><a href="<?php echo base_url()?>keuangan">
                                                                     <i class="fa fa-money"> Lihat Keuangan</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         <div class="col-md-12 col-lg-3 col-xl-3">
                                             <section class="panel panel-featured-left panel-featured-tertiary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-tertiary">
                                                                 <i class="fa fa-bar-chart-o"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Laporan</b></strong>
                                                                     <br><span><a href="<?php echo base_url()?>laporan">
                                                                     <i class="fa fa-bar-chart-o"> Lihat laporan</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         <div class="col-md-12 col-lg-3 col-xl-3">
                                             <section class="panel panel-featured-left panel-featured-primary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-primary">
                                                                 <i class="fa fa-users"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>User</b></strong>
                                                                 <br><span><a href="<?php echo base_url()?>user/user">
                                                                 <i class="fa fa-users"> Lihat detail</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                         </div>
                                         
                                         <div class="col-md-12 col-lg-3 col-xl-3">
                                             <section class="panel panel-featured-left panel-featured-tertiary">
                                                 <div class="panel-body">
                                                     <div class="widget-summary">
                                                         <div class="widget-summary-col widget-summary-col-icon">
                                                             <div class="summary-icon bg-tertiary">
                                                                 <i class="fa fa-cog"></i>
                                                             </div>
                                                         </div>
                                                         <div class="widget-summary-col">
                                                         <div class="summary">
                                                                 <h4 class="title">Data</h4>
                                                                 <div class="info">
                                                                 <strong class="title"><b>Tool</b></strong>
                                                                     <br><span><a href="<?php echo base_url()?>tools/profil">
                                                                     <i class="fa fa-cog"> Lihat detail</i></a></span>
                                                                 </div>
                                                             </div> 
                                                         </div>
                                                     </div>
                                                 </div>
                                             </section>
                                             </div> </div>


                                             <section class="panel"> 
                        <div class="panel-body">       

                            <div class="row"> 
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <div class="row">
                                    <div class="col-md-4 col-xl-12">
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Keuntungan Hari ini</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="keuntungan_hari_ini"></strong>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div> 
                                    <div class="col-md-4 col-xl-12">
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Keuntungan Minggu Ini</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="keuntungan_minggu_ini"></strong>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div> 
                                    <div class="col-md-4 col-xl-12">
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Keuntungan Bulan Ini</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="keuntungan_hari_ini"></strong>
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
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <div class="row">
                                    <div class="col-md-9 col-xl-12">
                                        <section class="panel"> 
		                                     <header class="panel-heading">  
												<h2 class="panel-title">Jumlah Transaksi Penjualan 2 Minggu Terakhir</h2>
											</header>
											<div class="panel-body">  
												<div class="chart chart-md" id="GrafikPenjualan"></div> 
											</div>
                                        </section>
                                    </div> 
                                    <div class="col-md-3 col-xl-12">
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Total Penjualan Hari Ini</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="penjualan_hari_ini"></strong>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Total Penjualan Minggu Ini</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="penjualan_minggu_ini"></strong>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Total Penjualan Bulan Ini</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="penjualan_bulan_ini"></strong>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="panel">
                                            <div class="panel-body bg-primary">
                                                <div class="widget-summary"> 
                                                    <div class="widget-summary-col">
                                                        <div class="summary">
                                                            <h4 class="title">Total Piutang Belum Dibayar</h4>
                                                            <div class="info">
                                                                <strong class="amount" id="piutang_belum_dibayar"></strong>
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
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <div class="row">
                                    <div class="col-md-3 col-xl-12">
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
                                    <div class="col-md-3 col-xl-12">
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
                                    <div class="col-md-3 col-xl-12">
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
                                    <div class="col-md-3 col-xl-12">
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
                    
                    <div class="row">
                        <div class="col-md-5">
                            <section class="panel"> 
                                <div class="panel-body"> 
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <section class="panel">
                                                <div class="panel-body bg-primary">
                                                    <div class="widget-summary"> 
                                                        <div class="widget-summary-col">
                                                            <div class="summary">
                                                                <h4 class="title"> 
                                                                    Jumlah Purchase Order
                                                                </h4>
                                                                <div class="info">
                                                                    <strong class="amount" id="total_po"></strong>
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
                                                                <h4 class="title"> 
                                                                    Jumlah Pembelian
                                                                </h4>
                                                                <div class="info">
                                                                    <strong class="amount" id="total_pembelian"></strong>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <section class="panel">
                                                <div class="panel-body bg-primary">
                                                    <div class="widget-summary"> 
                                                        <div class="widget-summary-col">
                                                            <div class="summary">
                                                                <h4 class="title"> 
                                                                    Jumlah Penerimaan
                                                                </h4>
                                                                <div class="info">
                                                                    <strong class="amount" id="total_penerimaan"></strong>
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
                                                                <h4 class="title"> 
                                                                    Jumlah Retur Pembelian
                                                                </h4>
                                                                <div class="info">
                                                                    <strong class="amount" id="total_retur"></strong>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                        </div>
                        <div class="col-md-7"> 
                            <section class="panel">
                                <header class="panel-heading"> 
                                    <h2 class="panel-title">Produk Terlaris</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-condensed mb-none" id="produk_terlaris">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Item</th>
                                                    <th>Nama Produk</th>
                                                    <th>Stok</th>
                                                    <th>Total Terjual</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <section class="panel">
                                <header class="panel-heading"> 
                                    <h2 class="panel-title">Produk akan Kadaluarsa</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-condensed mb-none" id="kadaluarsa">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Item</th>
                                                    <th>Nama Produk</th>
                                                    <th>Tanggal Kadaluarsa</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section> 
                        </div>
                    </div>
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
        url: '<?php echo base_url()?>dashboard/penjualan_2_minggu', // getchart.php
        dataType: 'JSON',
        type: 'GET',
        data: {get_values: true},
        success: function(response) { 
			Morris.Line({
				resize: true,
				element: 'GrafikPenjualan',
				data: response,
				xkey: 'tanggal',
				ykeys: ['jumlah'],
				labels: ['Jumlah Transaksi'],
				hideHover: true,
				lineColors: ['#0088cc'],
				xLabelFormat: function (d) {
				    return ("0" + d.getDate()).slice(-2) + '-' + ("0" + (d.getMonth() + 1)).slice(-2) + '-' + d.getFullYear();
				},
				xLabelAngle: 45,
			});
        }
    });

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
            $('#penjualan_hari_ini').html(item.total_penjualan_hari_ini);  
            $('#penjualan_minggu_ini').html(item.total_penjualan_minggu_ini);  
            $('#penjualan_bulan_ini').html(item.total_penjualan_bulan_ini);   
            $('#piutang_belum_dibayar').html(item.total_piutang_belum_bayar);   
            $('#sudah_jatuh_tempo').html(item.sudah_jatuh_tempo);  
            $('#total_po').html(item.total_po);  
            $('#total_pembelian').html(item.total_pembelian);  
            $('#total_penerimaan').html(item.total_penerimaan);  
            $('#total_retur').html(item.total_retur);  
            }); 
        }
    });
    
    $.ajax({
        type: 'GET',
        url: '<?php echo base_url()?>dashboard/produk_kadaluarsa', 
        dataType 	: 'json',
        success: function(response) { 
            var i = 0; 
            var datarow =''; 
            $.each(response.datasub, function(i, itemsub) {
                i = i + 1;
                datarow+="<tr><td>"+i+"</td>"; 
                datarow+="<td>"+itemsub.kode_item+"</td>"; 
                datarow+="<td>"+itemsub.nama_item+"</td>"; 
                datarow+="<td>"+itemsub.tgl_expired+"</td>";   
                datarow+="</tr>"; 
            });   
            if(datarow == '' ){ 
                $('#kadaluarsa').append('<tr><td colspan="4" align="center"> Tidak ada produk akan kadaluarsa</td></tr>');
            }else{
                $('#kadaluarsa').append(datarow);
            }
        }
    }); 

    $.ajax({
        type: 'GET',
        url: '<?php echo base_url()?>dashboard/produk_terlaris', 
        dataType 	: 'json',
        success: function(response) { 
            var i = 0; 
            var datarow =''; 
            $.each(response.datasub, function(i, itemsub) {
                i = i + 1;
                datarow+="<tr><td>"+i+"</td>"; 
                datarow+="<td>"+itemsub.kode_item+"</td>"; 
                datarow+="<td>"+itemsub.nama_item+"</td>"; 
                datarow+="<td>"+itemsub.stok+"</td>";
                datarow+="<td>"+itemsub.total+"</td>";   
                datarow+="</tr>"; 
            });   
            if(datarow == '' ){ 
                $('#produk_terlaris').append('<tr><td colspan="4" align="center"> Tidak ada produk data</td></tr>');
            }else{
                $('#produk_terlaris').append(datarow);
            }
        }
    }); 

	</script>
	</body>
</html>