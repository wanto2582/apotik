<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left" style="background-image: linear-gradient(to right, #2F4F4F ,#008B8B,#2F4F4F);">
				
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <div class="nano" style="background-image: linear-gradient(to right, #008B8B ,#2F4F4F,#008B8B);">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a href="<?php echo base_url()?>">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                    <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaster"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-database"></i>
                    <span>Master Data</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>master" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/dokter" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Dokter</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/pembeli" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Pembeli</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/supplier" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Supplier</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/itemkategori" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Kategori Item</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/satuan" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master  Satuan Item</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/merk" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Merk</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/items" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Obat dan Alkes</a>
 							</li> 
							<li>
								<a href="<?php echo base_url()?>master/racikan" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Master Racikan</a>
 							</li> 
						</ul>
					    </div>
                        </li>

                
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembelian"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-plus-square-o"></i>
                    <span>Pembelian</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapsePembelian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>pembelian" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard</a>
 							</li> 
                             <li>
								<a href="<?php echo base_url()?>pembelian/po" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder"></i> Purchase Order</a>
								 
							</li> 
							<li>
								<a href="<?php echo base_url()?>pembelian/langsung" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder"></i> Pembelian / Faktur</a>
								 
								</li> 
							<li>
								<a href="<?php echo base_url()?>pembelian/penerimaan" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder"></i> Penerimaan Barang</a>
								 
							</li> 
							<li>
								<a href="<?php echo base_url()?>pembelian/retur" class="menu-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder"></i> Retur Pembelian</a>
								 
							</li>  
						</ul>
					    </div>
                        </li>
                        
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStok"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-reorder"></i>
                    <span>Stok</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapseStok" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>stok" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard</a>
 							</li> 
                             <li>
							<a href="<?php echo base_url()?>stok/keluar" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Stok Keluar Retur Pembelian</a>
															 
						</li> 
						<li>
							<a href="<?php echo base_url()?>stok/adjustment" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-folder"></i> Stok Adjustment</a>
															 
						</li> 
						<li>
							<a href="<?php echo base_url()?>stok/opname" class="menu-item">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Stok Opname</a>
															 
						</li> 
						<li>
							<a href="<?php echo base_url()?>stok/barcode" class="menu-item">
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-folder"></i> Cetak Barcode</a>
															 
						</li>  
						<li>
							<a href="<?php echo base_url()?>stok/kartustok" class="menu-item">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <i class="fa fa-folder"></i> Kartu Stok</a>
															 
						</li>  
						</ul>
					    </div>
                        </li>
                        
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePenjualan"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa  fa-shopping-cart"></i>
                    <span>Penjualan</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapsePenjualan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>penjualan" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard</a>
 							</li> 
                             <li>
								<a href="<?php echo base_url()?>penjualan/diskon" class="menu-item">
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <i class="fa fa-folder"></i> Diskon Produk</a>
															 
							</li> 
							<li>
								<a href="<?php echo base_url()?>penjualan/jenispembayaran" class="menu-item">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <i class="fa fa-folder"></i> Jenis Pembayaran</a>
															 
							</li> 
														 
						</ul>
					    </div>
                        </li>
                        
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKeuangan"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-file"></i>
                    <span>Keuangan</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapseKeuangan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>keuangan" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard</a>
 							</li> 
                             <li>
							<a href="<?php echo base_url()?>keuangan/koderekening" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Kode Rekening</a>
															 
						</li> 
						<li>
							<a href="<?php echo base_url()?>keuangan/hutang" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Hutang</a>
															 
						</li> 
						<li>
							<a href="<?php echo base_url()?>keuangan/cashinout" class="menu-item">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Cash in Cash Out</a>
															 
						</li>  
                         <li>
							<a href="<?php echo base_url()?>keuangan/piutang" class="menu-item">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Piutang</a>
															 
						</li>  
						</ul>
					    </div>
                        </li>
                                 
 <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Laporan</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapseLaporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>laporan" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard</a>
 							</li> 
                             <li>
							<a href="<?php echo base_url()?>laporan/po" class="menu-item">
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder"></i> Laporan Purchase Order</a>
							
						</li>  
						<li>
							<a href="<?php echo base_url()?>laporan/pembelian" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-folder"></i> Laporan Pembelian</a>
							
						</li> 
						<li>
							<a href="<?php echo base_url()?>laporan/penerimaan" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-folder"></i> Laporan Penerimaan</a>
							
						</li> 
						<li>
							<a href="<?php echo base_url()?>laporan/stok" class="menu-item">
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Laporan Stok</a>
							
						</li> 
						<li>
							<a href="<?php echo base_url()?>laporan/penjualan" class="menu-item">
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <i class="fa fa-folder"></i> Laporan Penjualan</a>
							
						</li> 
						</ul>
					    </div>
                        </li>
                                 
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-users"></i>
                    <span>User</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>user/user" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i>User Management</a>
 							</li> 
                             <li>
															<a href="<?php echo base_url()?>user/kategori" class="menu-item">
                                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <i class="fa fa-folder"></i> User Kategori</a>
															 
														</li> 
														 
						</ul>
					    </div>
                        </li>                                 
                                                               
  <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTool"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-cog"></i>
                    <span>Tool</span> &nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down"></i>
                </a>
                 
                <div id="collapseTool" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <ul class="nav nav-item">
                            <li>
								<a href="<?php echo base_url()?>tools/profil" class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-arrow-circle-o-right"></i>User Management</a>
 							</li> 
                              
														<li>
															<a href="<?php echo base_url()?>tools/import_item" class="menu-item">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <i class="fa fa-folder"></i> Import Item</a>
															 
														</li>  
						</ul>
					    </div>
                        </li>                                       
                                  
                            </ul>
                        </nav>
                         <hr class="separator" />
                     </div>
                 </div>
             </aside>
            <!-- end: sidebar -->