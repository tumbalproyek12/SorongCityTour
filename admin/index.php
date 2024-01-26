<?php
session_start();

include("../php/conn-koneksi.php");
if (!isset($_SESSION["username"])) {
  header("location: ../login.php");
}

$queryOrder = mysqli_query($con, "SELECT * FROM orders");
$jumlahOrder = mysqli_num_rows($queryOrder);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>ADMIN - SorongCityTour</title>

  <!-- Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="SorongCityTour" />
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
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                  <title>Menu</title>
                  <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                    d="M4 7h22M4 15h22M4 23h22"></path>
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
              <a class="nav-link active" href="index.php">
                <span class="nav-icon">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
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
            <!--//nav-item-->
            <li class="nav-item">
              <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
              <a class="nav-link" href="orders.php">
                <span class="nav-icon">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path fill-rule="evenodd" d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                  </svg>
                </span>
                <span class="nav-link-text">Places</span> </a><!--//nav-link-->
            </li>
            <!--//nav-item-->
            <li class="nav-item">
              <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
              <a class="nav-link" href="docs.php">
                <span class="nav-icon">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-walking" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6.44 3.752A.75.75 0 0 1 7 3.5h1.445c.742 0 1.32.643 1.243 1.38l-.43 4.083a1.8 1.8 0 0 1-.088.395l-.318.906.213.242a.8.8 0 0 1 .114.175l2 4.25a.75.75 0 1 1-1.357.638l-1.956-4.154-1.68-1.921A.75.75 0 0 1 6 8.96l.138-2.613-.435.489-.464 2.786a.75.75 0 1 1-1.48-.246l.5-3a.75.75 0 0 1 .18-.375l2-2.25Z" />
                    <path fill-rule="evenodd"
                      d="M6.25 11.745v-1.418l1.204 1.375.261.524a.8.8 0 0 1-.12.231l-2.5 3.25a.75.75 0 1 1-1.19-.914zm4.22-4.215-.494-.494.205-1.843.006-.067 1.124 1.124h1.44a.75.75 0 0 1 0 1.5H11a.75.75 0 0 1-.531-.22Z" />
                </span>
                <span class="nav-link-text">Docs</span> </a><!--//nav-link-->
            </li>
            <!--//nav-item-->
          </ul>
          <!--//app-menu-->
        </nav>->
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
            <h1 class="app-page-title mb-0">Orders</h1>
          </div>
          <div class="col-auto">
            <div class="page-utilities">
              <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                  <select class="form-select w-auto">
                    <option selected value="option-1">All</option>
                    <option value="option-2">This week</option>
                    <option value="option-3">This month</option>
                    <option value="option-4">Last 3 months</option>
                  </select>
                </div>
              </div>
              <!--//row-->
            </div>
            <!--//table-utilities-->
          </div>
          <!--//col-auto-->
        </div>
        <!--//row-->

        <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
          <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
            href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
          <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid"
            role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
          <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
            href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
          <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
            href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
        </nav>

        <div class="tab-content" id="orders-table-tab-content">
          <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
              <div class="app-card-body">
                <div class="table-responsive">
                  <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        <th class="cell">Order</th>
                        <th class="cell">Product</th>
                        <th class="cell">Customer</th>
                        <th class="cell">Date</th>
                        <th class="cell">Status</th>
                        <th class="cell">Total</th>
                        <th class="cell">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($jumlahOrder == 0) {
                        ?>
                        <tr>
                          <td colspan=6 class="text-center">Tidak Ada Orderan</td>
                        </tr>
                        <?php
                      } else {
                        while ($data = mysqli_fetch_array($queryOrder)) {
                          ?>
                          <tr>
                            <td>#
                              <?php echo $data['id'] ?>
                            </td>
                            <td>
                              <?php echo $data['booking'] ?>
                            </td>
                            <td>
                              <?php echo $data['costumer'] ?>
                            </td>
                            <td>
                              <?php echo $data['date'] ?>
                            </td>
                            <td>
                              <?php echo $data['status'] ?>
                            </td>
                            <td>Rp
                              <?php echo $data['total'] ?>
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
            <h3 class="section-title">input</h3>
            <div class="app-card app-card-settings shadow-sm p-4">
              <div class="app-card-body">
                <form class="settings-form">
                  <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="N" required />
                  </div>
                  <div class="mb-3">
                    <label for="setting-input-3" class="form-label">Detail</label>
                    <input type="email" class="form-control" id="detail" name="detail"
                      value="Detail TourGUide" />
                  </div>
                  <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Link Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="link facebook" required />
                  </div>
                  <div class="mb-3">
                    <label for="setting-input-2" class="form-label">Link Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="link instagram"
                      required />
                  </div>
                  <button type="submit" class="btn app-btn-primary" name="simpan">
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