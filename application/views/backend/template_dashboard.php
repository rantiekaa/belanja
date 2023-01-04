<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
		<meta name="author" content="AdminKit">
		<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
		<link rel="canonical" href="https://demo-basic.adminkit.io/" />
		<title> <?=$title;?> </title>
		<link href="<?=base_url()?>assets/backend/css/app.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
		
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="wrapper">
			<nav id="sidebar" class="sidebar js-sidebar">
				<div class="sidebar-content js-simplebar">
					<a class="sidebar-brand" href="index.html">
						<span class="align-middle">Belanja</span>
					</a>
					<ul class="sidebar-nav">
						<li class="sidebar-item <?php if($menu == 'dashboard'): ?>active<?php endif; ?>">
							<a class="sidebar-link" href="<?=base_url()?>backend">
								<i class="align-middle" data-feather="sliders"></i>
								<span class="align-middle">Dashboard</span>
							</a>
						</li>
						<li class="sidebar-header">Product</li>
						<li class="sidebar-item <?php if($menu == 'product-lists'): ?>active<?php endif; ?>">
							<a class="sidebar-link" href="<?=base_url()?>backend/product">
								<i class="align-middle" data-feather="list"></i>
								<span class="align-middle">Products</span>
							</a>
						</li>
						<!-- <li class="sidebar-item <?php if($menu == 'add-product'): ?>active<?php endif; ?>">
							<a class="sidebar-link" href="<?=base_url()?>backend/add_product">
								<i class="align-middle" data-feather="plus"></i>
								<span class="align-middle">Add Product</span>
							</a>
						</li> -->
						<li class="sidebar-item <?php if($menu == 'category'): ?>active<?php endif; ?>">
							<a class="sidebar-link" href="<?=base_url()?>backend/category">
								<i class="align-middle" data-feather="filter"></i>
								<span class="align-middle">Categorys</span>
							</a>
						</li>
						<li class="sidebar-header">Order</li>
						<li class="sidebar-item <?php if($menu == 'orders'): ?>active<?php endif; ?>">
							<a class="sidebar-link" href="<?=base_url()?>backend/orders">
								<i class="align-middle" data-feather="shopping-bag"></i>
								<span class="align-middle">Orders</span>
							</a>
						</li>
						<li class="sidebar-header">Customer</li>
						<li class="sidebar-item <?php if($menu == 'customers'): ?>active<?php endif; ?>">
							<a class="sidebar-link" href="<?=base_url()?>backend/customers">
								<i class="align-middle" data-feather="user"></i>
								<span class="align-middle">Customers</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="main">
				<nav class="navbar navbar-expand navbar-light navbar-bg">
					<a class="sidebar-toggle js-sidebar-toggle">
						<i class="hamburger align-self-center"></i>
					</a>
					<div class="navbar-collapse collapse">
						<ul class="navbar-nav navbar-align">
							<li class="nav-item dropdown">
								<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
									<i class="align-middle" data-feather="settings"></i>
								</a>
								<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
									<!-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> -->
									<span class="text-dark">Admin</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a class="dropdown-item" href="pages-profile.html">
										<!-- <i class="align-middle me-1" data-feather="user"></i> Profile </a> -->
									<!-- <a class="dropdown-item" href="#">
										<i class="align-middle me-1" data-feather="pie-chart"></i> Analytics </a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="index.html">
										<i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy </a>
									<a class="dropdown-item" href="#">
										<i class="align-middle me-1" data-feather="help-circle"></i> Help Center </a>
									<div class="dropdown-divider"></div> -->
									<a class="dropdown-item" href="<?=base_url("Backend_func/logout")?>">Log out</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<main class="content">
					<div class="container-fluid p-0">
						<h1 class="h3 mb-3"> <?=$title;?></h1>
                        <?=$contents;?>
					</div>
				</main>
				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-muted">
							<div class="col-6 text-start">
								<p class="mb-0">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">
										<strong>AdminKit</strong>
									</a> - <a class="text-muted" href="https://adminkit.io/" target="_blank">
										<strong>Bootstrap Admin Template</strong>
									</a> &copy;
								</p>
							</div>
							<div class="col-6 text-end">
								<ul class="list-inline">
									<li class="list-inline-item">
										<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
									</li>
									<li class="list-inline-item">
										<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
									</li>
									<li class="list-inline-item">
										<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
									</li>
									<li class="list-inline-item">
										<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
		<script src="<?=base_url()?>/assets/backend/js/app.js"></script>
	</body>
</html>