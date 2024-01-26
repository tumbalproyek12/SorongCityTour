<?php
session_start();

include("../php/conn-koneksi.php");
if (!isset($_SESSION["username"])) {
	header("location: ../login.php");
}

$queryOrder = mysqli_query($con, "SELECT * FROM orders");
$jumlahOrder = mysqli_num_rows($queryOrder);

$queryPlaces = mysqli_query($con,"SELECT * FROM places");
$jumlahPlaces = mysqli_num_rows($queryPlaces);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>ADMIN - SorongCityTour</title>

	<!-- Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="description" content="SorongCitytour" />
	<meta name="author" content="Clxf12" />
	<link rel="shortcut icon" href="../favicon.ico" />

	<!-- FontAwesome JS-->
	<script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="../assets/css/portal.css" />
</head>

<body class="app">
	<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
									role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div>

						<div class="app-utilities col-auto">
							<!--//app-utility-item-->
							<div class="app-utility-item app-user-dropdown dropdown">
								<a class="btn app-btn-secondary" href="../php/conn-logout.php">Log Out</a>
							</div>
							<div class="app-utility-item app-user-dropdown dropdown">
								<img src="../assets/images/user.png" alt="user profile" />
							</div>
							<!--//app-user-dropdown-->
						</div>
						<!--//app-utilities-->
					</div>
					<!--//row-->
				</div>
				<!--//app-header-content-->
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="index.php"><span class="logo-text">SorongCityTour_
							<?php echo $_SESSION['username']; ?>
						</span></a>

				</div><!--//app-branding-->
				<!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="index.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
										<path fill-rule="evenodd"
											d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
										<circle cx="3.5" cy="5.5" r=".5" />
										<circle cx="3.5" cy="8" r=".5" />
										<circle cx="3.5" cy="10.5" r=".5" />
									</svg>
								</span>
								<span class="nav-link-text">Orders</span> </a><!--//nav-link-->
						</li>
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link active" href="orders.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
										<path fill-rule="evenodd"
											d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
									</svg>
								</span>
								<span class="nav-link-text">Places</span> </a><!--//nav-link-->
						</li>
						<!--//nav-item-->
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link" href="docs.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-walking"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6.44 3.752A.75.75 0 0 1 7 3.5h1.445c.742 0 1.32.643 1.243 1.38l-.43 4.083a1.8 1.8 0 0 1-.088.395l-.318.906.213.242a.8.8 0 0 1 .114.175l2 4.25a.75.75 0 1 1-1.357.638l-1.956-4.154-1.68-1.921A.75.75 0 0 1 6 8.96l.138-2.613-.435.489-.464 2.786a.75.75 0 1 1-1.48-.246l.5-3a.75.75 0 0 1 .18-.375l2-2.25Z" />
										<path fill-rule="evenodd"
											d="M6.25 11.745v-1.418l1.204 1.375.261.524a.8.8 0 0 1-.12.231l-2.5 3.25a.75.75 0 1 1-1.19-.914zm4.22-4.215-.494-.494.205-1.843.006-.067 1.124 1.124h1.44a.75.75 0 0 1 0 1.5H11a.75.75 0 0 1-.531-.22Z" />
									</svg>
								</span>
								<span class="nav-link-text">Docs</span> </a><!--//nav-link-->
						</li>
						<!--//nav-item-->

					</ul>
					<!--//app-menu-->
				</nav>
				<!--//app-nav-->
				<div class="app-sidepanel-footer">
					<nav class="app-nav app-nav-footer">
						<ul class="app-menu footer-menu list-unstyled">
						</ul>
						<!--//footer-menu-->
					</nav>
				</div>
				<!--//app-sidepanel-footer-->
			</div>
			<!--//sidepanel-inner-->
		</div>
		<!--//app-sidepanel-->
	</header>
	<!--//app-header-->

	<div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Places</h1>
					</div>
					<div class="col-auto">
						<div class="page-utilities">
							<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
								<div class="col-auto">
									<form class="docs-search-form row gx-1 align-items-center">

										<!--//col-->
										<div class="col-auto">
											<a class="btn app-btn-secondary" href="#"><svg width="1em" height="1em"
													viewBox="0 0 16 16" class="bi bi-upload me-2" fill="currentColor"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
													<path fill-rule="evenodd"
														d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
												</svg>Upload File</a>
										</div>
								</div>
								<!--//row-->
							</div>
							<!--//table-utilities-->
						</div>
						<!--//col-auto-->
					</div>
					<!--//row-->

					<div class="row g-4">
						<div class="col-6 col-md-4 col-xl-3 col-xxl-2">
							<div class="app-card app-card-doc shadow-sm h-100">
								<div class="app-card-thumb-holder p-3">
									<span class="icon-holder">
										<i class="fas fa-file-pdf pdf-file"></i>
									</span>
									<a class="app-card-link-mask" href="#file-link"></a>
								</div>
								<div class="app-card-body p-3 has-card-actions">
									<h4 class="app-doc-title truncate mb-0">
										<a href="#file-link">Interdum semper</a>
									</h4>
									<div class="app-doc-meta">
										<ul class="list-unstyled mb-0">
											<li><span class="text-muted">Type:</span> PDF</li>
											<li><span class="text-muted">Size:</span> 2.5MB</li>
											<li>
												<span class="text-muted">Opened:</span> 3 months ago
											</li>
										</ul>
									</div>
									<!--//app-doc-meta-->

									<div class="app-card-actions">
										<div class="dropdown">
											<div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
												aria-expanded="false">
												<svg width="1em" height="1em" viewBox="0 0 16 16"
													class="bi bi-three-dots-vertical" fill="currentColor"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
												</svg>
											</div>
											<!--//dropdown-toggle-->
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#"><svg width="1em" height="1em"
															viewBox="0 0 16 16" class="bi bi-pencil me-2"
															fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd"
																d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
														</svg>Edit</a>
												</li>
												<li>
													<hr class="dropdown-divider" />
												</li>
												<li>
													<a class="dropdown-item" href="#"><svg width="1em" height="1em"
															viewBox="0 0 16 16" class="bi bi-trash me-2"
															fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
															<path fill-rule="evenodd"
																d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
														</svg>Delete</a>
												</li>
											</ul>
										</div>
										<!--//dropdown-->
									</div>
									<!--//app-card-actions-->
								</div>
								<!--//app-card-body-->
							</div>
							<!--//app-card-->
						</div>
						<!--//col-->
					</div>
					<!--//row-->
					<div class="tab-content" id="orders-table-tab-content">
						<div class="tab-pane fade show active" id="orders-all" role="tabpanel"
							aria-labelledby="orders-all-tab">
							<div class="app-card app-card-orders-table shadow-sm mb-5">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">Name</th>
													<th class="cell">Addres</th>
													<th class="cell">Detail</th>
													<th class="cell">Price</th>
													<th class="cell">Image</th>
													<th class="cell">Days</th>
													<th class="cell">Used</th>
												</tr>
											</thead>
											<tbody>
												<?php
												if ($jumlahPlaces == 0) {
													?>
													<tr>
														<td colspan=6 class="text-center">Tidak Ada Orderan</td>
													</tr>
													<?php
												} else {
													while ($dataPlaces = mysqli_fetch_array($queryPlaces)) {
														?>
														<tr>
															<td>
																<?php echo $dataPlaces['name'] ?>
															</td>
															<td>
																<?php echo $dataPlaces['address'] ?>
															</td>
															<td>
																<?php echo $dataPlaces['detail'] ?>
															</td>
															<td>Rp
																<?php echo $dataPlaces['price'] ?>
															</td>
															<td>
																<?php echo $dataPlaces['img'] ?>
															</td>
															<td>
																<?php echo $dataPlaces['days'] ?>
															</td>
															<td>
																<?php echo $dataPlaces['used'] ?>
															</td>
														</tr>
														<?php
													}
												}
												?>


											</tbody>
										</table>
									</div>
									<!--//table-responsive-->
								</div>
								<!--//app-card-body-->
							</div>
							<!--//app-card-->

						</div>
					</div>
					<!--//tab-content-->
					<div class="row g-4 settings-section">
						<div class="col-12 col-md-8">
							<h3 class="section-title">General</h3>
							<div class="app-card app-card-settings shadow-sm p-4">
								<div class="app-card-body">
									<form class="settings-form" action="" method="post" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="setting-input-2" class="form-label">Place Name</label>
											<input type="text" class="form-control" id="name" name="name"
												value="nama Tempat" required />
										</div>
										<div class="mb-3">
											<label for="setting-input-3" class="form-label">Alamat</label>
											<input type="email" class="form-control" id="address" name="address"
												value="Alamat tempat" />
										</div>
										<div class="mb-3">
											<label for="setting-input-3" class="form-label">Detail</label>
											<input type="email" class="form-control" id="detail" name="detail"
												value="Detail Tempat" />
										</div>
										<div class="mb-3">
											<label for="setting-input-3" class="form-label">Harga</label>
											<input type="email" class="form-control" id="price" name="price"
												value="Detail Harga" />
										</div>
										<div class="mb-3">
											<label for="setting-input-3" class="form-label">Foto</label>
											<input type="email" class="form-control" id="setting-input-3"
												value="Untuk Input Foto(ongoing)" />
										</div>
										<div class="mb-3">
											<label for="setting-input-3" class="form-label">Hari</label>
											<input type="email" class="form-control" id="setting-input-3"
												value="durasi Tempat Wisata" />
										</div>
										<div class="mb-3">
											<label for="setting-input-3" class="form-label">Dihitung</label>
											<select class="form-select" multiple aria-label="multiple select example">
												<option selected>Open this select menu</option>
												<?php
													while( $dataPlaces = mysqli_fetch_array($queryPlaces)) {
												?>
													<option value="1"><?php echo $dataPlaces['used'];?></option>
													<option value="2"><?php echo $dataPlaces['used'];?></option>
												<?php
													}
												?>
											</select>
										</div>
										<button type="submit" class="btn app-btn-secondary">
											Save Changes
										</button>
									</form>
								</div>
								<!--//app-card-body-->
							</div>
							<!--//app-card-->
						</div>
					</div>
					<!--//row-->
				</div>
				<!--//container-fluid-->
			</div>
			<!--//app-content-->

			<footer class="app-footer">
				<div class="container text-center py-3">
					<small class="copyright">Github <span class="sr-only"> </span><i class="fa-brands fa-github"
							style="color: #6a9dfb;"></i> : <a class="app-link" href="https://github.com/clxf12"
							target="_blank">Clxf12</a> :p</small>

				</div>
			</footer><!--//app-footer-->
		</div>
		<!--//app-wrapper-->

		<!-- Javascript -->
		<script src="../assets/plugins/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Page Specific JS -->
		<script src="../assets/js/app.js"></script>
</body>

</html>