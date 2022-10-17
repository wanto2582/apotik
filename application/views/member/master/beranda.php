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
						<h2>Master Data</h2>  
					</header>  

					<!-- start: page -->
					<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						 
							
							<div class="inner-body mg-main"> 
                                <div class="row" style="margin-top:-30px;"> 
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-primary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-primary">
                                                                    <i class="fa fa-user-md"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Dokter</h4>
                                                                    <div class="info">
                                                                    <strong class="amount"><?php echo $total_dokter;?> orang</strong>
                                                                    <br><span><a href="<?php echo base_url()?>master/dokter"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>

                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-secondary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-secondary">
                                                                    <i class="fa fa-users"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Pembeli Terdaftar</h4>
                                                                    <div class="info">
                                                                        <strong class="amount"><?php echo $total_pembeli;?> orang</strong>
                                                                        <br><span><a href="<?php echo base_url()?>master/pembeli"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-tertiary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-tertiary">
                                                                    <i class="fa fa-truck"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Supplier</h4>
                                                                    <div class="info">
                                                                        <strong class="amount"><?php echo $total_supplier;?> perusahaan</strong>
                                                                        <br><span><a href="<?php echo base_url()?>master/supplier"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-quartenary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-quartenary">
                                                                    <i class="fa fa-list-ol"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Kategori Produk</h4>
                                                                    <div class="info">
                                                                        <strong class="amount"><?php echo $total_kategori;?> Kategori</strong>
                                                                        <br><span><a href="<?php echo base_url()?>master/itemkategori"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-secondary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-secondary">
                                                                    <i class="fa fa-list-ol"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Satuan Produk</h4>
                                                                    <div class="info">
                                                                        <strong class="amount"><?php echo $total_satuan;?> Satuan</strong>
                                                                        <br><span><a href="<?php echo base_url()?>master/satuan"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-tertiary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-tertiary">
                                                                    <i class="fa fa-list-ol"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Merk</h4>
                                                                    <div class="info">
                                                                        <strong class="amount"><?php echo $total_merk;?> Merk</strong>
                                                                        <br><span><a href="<?php echo base_url()?>master/merk"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-primary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-primary">
                                                                    <i class="fa fa-barcode"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Obat dan Alkes</h4>
                                                                    <div class="info">
                                                                    <strong class="amount"><?php echo $total_item;?> Produk</strong>
                                                                    <br><span><a href="<?php echo base_url()?>master/items"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            
                                            <div class="col-md-12 col-lg-6 col-xl-6">
                                                <section class="panel panel-featured-left panel-featured-tertiary">
                                                    <div class="panel-body">
                                                        <div class="widget-summary">
                                                            <div class="widget-summary-col widget-summary-col-icon">
                                                                <div class="summary-icon bg-tertiary">
                                                                    <i class="fa fa-barcode"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-summary-col">
                                                                <div class="summary">
                                                                    <h4 class="title">Jumlah Racikan</h4>
                                                                    <div class="info">
                                                                        <strong class="amount"><?php echo $total_racikan;?> Racikan</strong>
                                                                        <br><span><a href="<?php echo base_url()?>master/racikan"><i class="fa fa-arrow-circle-o-right"> Lihat detail</i></a></span>
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
                                <div class="row" style="margin-top:-30px;">  

                                    <div class="col-md-12"> 
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
        <script>
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