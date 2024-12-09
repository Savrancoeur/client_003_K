<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - AUS Admin</title>
    <!-- datatable css link -->
    <link
      rel="stylesheet"
      href="../../../public/libs/datatables/css/datatables.min.css"
    />

    <!-- sweetalert css link -->
    <link
      rel="stylesheet"
      href="../../../public/libs/sweetalert/sweetalert2.min.css"
    />

    <!-- Custom css link -->
    <link href="../../css/admin.css" rel="stylesheet" />
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">AUS Sport Club Admin</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <div id="layoutSidenav">
      <!-- Sidebar Menu -->
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-chart-line"></i>
                </div>
                Dashboard
              </a>

              <a class="nav-link" href="events.html">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-calendar-check"></i>
                </div>
                Events
              </a>

              <a class="nav-link" href="members.html">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-users"></i>
                </div>
                Members
              </a>

              <a class="nav-link" href="messages.html">
                <div class="sb-nav-link-icon">
                  <i class="fa-regular fa-comments"></i>
                </div>
                Message
              </a>
            </div>
          </div>
        </nav>
      </div>

      <!-- Main Content -->
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Events Management</h1>

            <!-- Alert Box -->
            <div id="alert-box" class="mb-4"></div>

            <!-- 
                        use submitProfile(title, message)
                        to display alert box with title and message
                         -->

            <!-- Event Creation and Editing Form -->
            <div class="row my-5">
              <div class="col-md-6">
                <form action="" method="" class="border border-2 p-3">
                  <h4 class="text-success">Add Upcoming Event</h4>
                  <div class="form-group my-3">
                    <label for="largeInput">Event Name</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      name="eventName"
                      id="name"
                      placeholder="Enter event name..."
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="description">Description</label>
                    <textarea
                      class="form-control"
                      name="eventDescription"
                      id="comment"
                      rows="5"
                    >
                    </textarea>
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Event Date</label>
                    <input
                      type="date"
                      class="form-control form-control"
                      name="eventDate"
                      id="name"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Event Time</label>
                    <input
                      type="time"
                      class="form-control form-control"
                      name="eventTime"
                      id="name"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Event Location</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      name="eventLocation"
                      id="name"
                      placeholder="Enter event location..."
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Registration Due Date</label>
                    <input
                      type="date"
                      class="form-control form-control"
                      name="dueDate"
                      id="name"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Participant Limit</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      name="participantLimit"
                      id="name"
                      placeholder="10"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="defaultSelect">Age Group</label>
                    <select
                      class="form-select form-control"
                      id="defaultSelect"
                      name="ageGroup"
                    >
                      <option selected disabled>Select age group</option>
                      <option>-18</option>
                      <option>18-30</option>
                      <option>+30</option>
                    </select>
                  </div>

                  <div class="form-group my-3">
                    <label for="exampleFormControlFile1">Event Photo</label>
                    <input
                      type="file"
                      class="form-control-file"
                      name="eventPhoto"
                      id="exampleFormControlFile1"
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label for="defaultSelect">Sport Type</label>
                    <select
                      class="form-select form-control"
                      id="defaultSelect"
                      name="sportType"
                    >
                      <option selected disabled>Select sport type</option>
                      <option>Football</option>
                      <option>Basketball</option>
                      <option>Marathon</option>
                    </select>
                  </div>

                  <div class="card-action">
                    <button class="btn btn-success">Add Event</button>
                    <button class="btn btn-secondary">Cancel</button>
                  </div>
                </form>
              </div>

              <div class="col-md-6">
                <form action="" method="" class="border border-2 p-3">
                  <h4 class="text-primary">Update Event Info</h4>
                  <div class="form-group my-3">
                    <label for="largeInput">Event Name</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      name="eventName"
                      id="name"
                      placeholder="Enter event name..."
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="description">Description</label>
                    <textarea
                      class="form-control"
                      name="eventDescription"
                      id="comment"
                      rows="5"
                    >
                    </textarea>
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Event Date</label>
                    <input
                      type="date"
                      class="form-control form-control"
                      name="eventDate"
                      id="name"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Event Time</label>
                    <input
                      type="time"
                      class="form-control form-control"
                      name="eventTime"
                      id="name"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Event Location</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      name="eventLocation"
                      id="name"
                      placeholder="Enter event location..."
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Registration Due Date</label>
                    <input
                      type="date"
                      class="form-control form-control"
                      name="dueDate"
                      id="name"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="largeInput">Participant Limit</label>
                    <input
                      type="text"
                      class="form-control form-control"
                      name="participantLimit"
                      id="name"
                      placeholder="10"
                    />
                  </div>

                  <div class="form-group my-3">
                    <label for="defaultSelect">Age Group</label>
                    <select
                      class="form-select form-control"
                      id="defaultSelect"
                      name="ageGroup"
                    >
                      <option selected disabled>Select age group</option>
                      <option>-18</option>
                      <option>18-30</option>
                      <option>+30</option>
                    </select>
                  </div>

                  <div class="form-group my-3">
                    <label for="exampleFormControlFile1">Event Photo</label>
                    <input
                      type="file"
                      class="form-control-file"
                      name="eventPhoto"
                      id="exampleFormControlFile1"
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label for="defaultSelect">Sport Type</label>
                    <select
                      class="form-select form-control"
                      id="defaultSelect"
                      name="sportType"
                    >
                      <option selected disabled>Select sport type</option>
                      <option>Football</option>
                      <option>Basketball</option>
                      <option>Marathon</option>
                    </select>
                  </div>

                  <div class="card-action">
                    <button class="btn btn-primary">Update Event</button>
                    <button class="btn btn-secondary">Cancel</button>
                  </div>
                </form>
              </div>
            </div>

            <hr class="h1" />

            <!-- Event Datas Table -->
            <h2 class="my-3 text-center text-danger h2">Events Data</h2>
            <div class="row">
              <div class="card-body">
                <table
                  id="eventsTable"
                  class="table table-bordered table-hover table-head-bg-warning"
                >
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Limit</th>
                      <th scope="col">Date</th>
                      <th scope="col">Age</th>
                      <th scope="col">Sport</th>
                      <th scope="col">Due Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AUS</td>
                      <td>300</td>
                      <td>2025-2-12 09:31</td>
                      <td>18-30</td>
                      <td>Football</td>
                      <td>2025-2-20</td>
                      <td>
                        <i
                          class="fa-regular fa-pen-to-square text-info me-4"
                        ></i>
                        <i class="fa-solid fa-trash text-danger"></i>
                      </td>
                    </tr>

                    <tr>
                      <td>AUS</td>
                      <td>300</td>
                      <td>2025-2-12 09:31</td>
                      <td>18-30</td>
                      <td>Football</td>
                      <td>2025-2-20</td>
                      <td>
                        <i
                          class="fa-regular fa-pen-to-square text-info me-4"
                        ></i>
                        <i class="fa-solid fa-trash text-danger"></i>
                      </td>
                    </tr>

                    <tr>
                      <td>AUS</td>
                      <td>300</td>
                      <td>2025-2-12 09:31</td>
                      <td>18-30</td>
                      <td>Football</td>
                      <td>2025-2-20</td>
                      <td>
                        <i
                          class="fa-regular fa-pen-to-square text-info me-4"
                        ></i>
                        <i class="fa-solid fa-trash text-danger"></i>
                      </td>
                    </tr>

                    <tr>
                      <td>AUS</td>
                      <td>300</td>
                      <td>2025-2-12 09:31</td>
                      <td>18-30</td>
                      <td>Football</td>
                      <td>2025-2-20</td>
                      <td>
                        <i
                          class="fa-regular fa-pen-to-square text-info me-4"
                        ></i>
                        <i class="fa-solid fa-trash text-danger"></i>
                      </td>
                    </tr>

                    <tr>
                      <td>AUS</td>
                      <td>300</td>
                      <td>2025-2-12 09:31</td>
                      <td>18-30</td>
                      <td>Football</td>
                      <td>2025-2-20</td>
                      <td>
                        <i
                          class="fa-regular fa-pen-to-square text-info me-4"
                        ></i>
                        <i class="fa-solid fa-trash text-danger"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>

        <!-- footer section -->
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; AUS Sport Club 2024</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!-- bootstrap js link -->
    <script src="../../../public/libs/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- jquery js link -->
    <script src="../../../public/libs/jquery/jquery-3.7.1.min.js"></script>

    <!-- fontawesome js link -->
    <script src="../../../public/libs/fontawesome-6/js/all.min.js"></script>

    <!-- datatables js link -->
    <script src="../../../public/libs/datatables/js/datatables.min.js"></script>

    <!-- **********
    datatable initialization here 
    ********** -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Initialize the DataTable
        $("#eventsTable").DataTable({
          paging: true, // Enable pagination
          searching: true, // Enable search bar
          ordering: true, // Enable column sorting
          info: true, // Show table info
          lengthChange: true, // Allow changing the number of rows per page
          pageLength: 5, // Default number of rows per page
          columnDefs: [
            {
              targets: 6, // Disable sorting on the 'Action' column (7th column, 0-indexed)
              orderable: false,
            },
          ],
          language: {
            search: "Filter records:", // Customize search bar label
            paginate: {
              previous: "Prev", // Customize pagination buttons
              next: "Next",
            },
          },
        });
      });
    </script>

    <!-- sweetalert js link -->
    <script src="../../../public/libs/sweetalert/sweetalert2.all.min.js"></script>

    <!-- custom js link -->
    <script src="../../js/admin.js"></script>
  </body>
</html>
