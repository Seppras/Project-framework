<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Program Kerja Universitas Dr. Soetomo</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-unitomo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/user/dashboard" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo-unitomo.png" width="50" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/validator/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Program Kerja</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/validator/evaluasi_proker" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Evaluasi Program Kerja</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/login" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex"></div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle" />
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body p-4">
              <h4 class="text-center my-3 pb-3">Usulan Program Kerja</h4>

              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Program Kerja</th>
                    <th scope="col">Status</th>
                    <th scope="col">Verifikasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Seminar UI/UX</td>
                    <td>In progress</td>
                    <td>
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal-1">
                        Detail
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Data Informasi
                              </h1>
                            </div>
                            <div class="modal-body">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Pengajuan Program Kerja
                              </h1>
                              <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Nama Pengajuan Program Kerja
                                    </div>
                                    Seminar
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Nama Kegiatan</div>
                                    Seminar UI/UX
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Tujuan Program Kerja
                                    </div>
                                    Untuk menimba ilmu para mahasiswa maupun
                                    pemula yang belajar UI/UX
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Target Program Kerja
                                    </div>
                                    100 Orang
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Nama Penanggung Jawab
                                    </div>
                                    Budi
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Email Penanggung Jawab
                                    </div>
                                    Budi17@gmail.com
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      No. Telp Penanggung Jawab
                                    </div>
                                    089578653541
                                  </div>
                                </li>
                              </ol>
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Pengajuan Anggaran Program Kerja
                              </h1>
                              <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Anggaran Yang akan Di Ajukan
                                    </div>
                                    Rp. 5JT
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Biaya Pemasukan</div>
                                    Rp. 3JT
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Biaya Pengeluaran
                                    </div>
                                    Rp. 4JT
                                  </div>
                                </li>
                              </ol>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Okay
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Verifikasi
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header"></div>
                            <div class="modal-body">
                              Data telah Di Verifikasi
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">
                                Done
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Rapat Kerja Audit Teknologi</td>
                    <td>In progress</td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Detail
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Data Informasi
                              </h1>
                            </div>
                            <div class="modal-body">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Pengajuan Program Kerja
                              </h1>
                              <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Nama Pengajuan Program Kerja
                                    </div>
                                    Rapat Kerja
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Nama Kegiatan</div>
                                    Rapat Kerja Audit
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Tujuan Program Kerja
                                    </div>
                                    Untuk membahas diskusi dalam mengelolah
                                    keuangan audit.
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Target Program Kerja
                                    </div>
                                    20 Orang
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Nama Penanggung Jawab
                                    </div>
                                    Adit
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Email Penanggung Jawab
                                    </div>
                                    Adit09@gmail.com
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      No. Telp Penanggung Jawab
                                    </div>
                                    081265437623
                                  </div>
                                </li>
                              </ol>
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Pengajuan Anggaran Program Kerja
                              </h1>
                              <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Anggaran Yang akan Di Ajukan
                                    </div>
                                    Rp. 3JT
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">Biaya Pemasukan</div>
                                    Rp. 1.JT
                                  </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                      Biaya Pengeluaran
                                    </div>
                                    Rp. 2 JT
                                  </div>
                                </li>
                              </ol>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Okay
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Verifikasi
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header"></div>
                            <div class="modal-body">
                              Data telah Di Verifikasi
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary">
                                Done
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>