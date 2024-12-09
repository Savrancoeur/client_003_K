<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- meta data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Rufina:400,700"
      rel="stylesheet"
    />

    <!-- title of site -->
    <title>AUS Sport Club</title>

    <!-- SweetAlert2 CSS -->
    <link
      rel="stylesheet"
      href="../../public/libs/sweetalert/sweetalert2.min.css"
    />

    <!--bootstrap.min.css-->
    <link
      rel="stylesheet"
      href="../../public/libs/bootstrap-5/css/bootstrap.min.css"
    />

    <!--style.css-->
    <link rel="stylesheet" href="../css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="../css/responsive.css" />
  </head>

  <body>
    <!-- User Profile and Participation History Section -->
    <section class="user-profile py-5">
      <div class="container">
        <!-- Alert Box -->
        <div id="alert-box" class="mb-4"></div>

        <!-- Profile Header -->
        <div class="d-flex justify-content-between align-items-center mb-5">
          <h2 class="text-primary h2">User Profile</h2>
          <button onclick="goHome()" class="btn btn-warning shadow-sm">
            <i class="bi bi-arrow-left-circle me-2"></i>Back to Home
          </button>
        </div>

        <!-- User Profile Form -->
        <form class="row g-4 p-4 rounded shadow bg-white">
          <!-- Phone -->
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input
              type="tel"
              id="phone"
              class="form-control"
              placeholder="Enter Your Phone Number"
            />
          </div>

          <!-- Date of Birth -->
          <div class="col-md-6">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" id="dob" class="form-control" />
          </div>

          <!-- Skill Level -->
          <div class="col-md-6">
            <label for="skill-level" class="form-label">Skill Level</label>
            <select id="skill-level" class="form-select">
              <option value="">Select your skill level</option>
              <option value="beginner">Beginner</option>
              <option value="intermediate">Intermediate</option>
              <option value="advanced">Advanced</option>
            </select>
          </div>

          <!-- Preferred Sport -->
          <div class="col-md-6">
            <label for="sport" class="form-label">Preferred Sport</label>
            <select id="sport" class="form-select">
              <option value="">Select your preferred sports</option>
              <option value="soccer">Soccer</option>
              <option value="tennis">Tennis</option>
              <option value="basketball">Basketball</option>
            </select>
          </div>

          <!-- Buttons -->
          <div class="col-12 d-flex justify-content-end gap-3">
            <button type="reset" class="btn btn-danger shadow-sm">
              <i class="bi bi-x-circle me-1"></i>Cancel
            </button>
            <button
              type="button"
              class="btn btn-success shadow-sm"
              onclick="submitProfile()"
            >
              <i class="bi bi-check-circle me-1"></i>Submit
            </button>
          </div>
        </form>

        <!-- Participation History -->
        <div class="mt-5 p-4 rounded shadow bg-light history">
          <h2 class="text-primary h2">Your Participation History</h2>
          <p class="text-muted my-3 h4">
            You have participated in the following events since you’ve become
            our member...
          </p>
          <ul class="list-unstyled my-3">
            <li>
              <a href="#" class="text-primary h5">Annual Sport Day 2024</a>
            </li>
            <li>
              <a href="#" class="text-primary h5">Annual Marathon 2024</a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Register and Managing Events Section -->
    <div class="container my-5 rme-section">
      <!-- Section: Register Events -->
      <div class="row">
        <div class="col-md-6">
          <div class="card shadow p-4">
            <h4 class="text-primary mb-4">Register Events</h4>
            <form id="registerForm">
              <div class="mb-3">
                <label for="eventSelect" class="form-label">Select Event</label>
                <select class="form-select" id="eventSelect" required>
                  <option selected disabled>Select event</option>
                  <option value="Annual Sport Day 2024">
                    Annual Sport Day 2024
                  </option>
                  <option value="Annual Marathon 2024">
                    Annual Marathon 2024
                  </option>
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Your Name"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter Your Email"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Register
              </button>
            </form>
          </div>
        </div>

        <!-- Section: Manage Your Registrations -->
        <div class="col-md-6">
          <div class="card shadow p-4">
            <h4 class="text-primary mb-4">Manage Your Registrations</h4>
            <p class="mb-2">
              You are currently registered for the following events:
            </p>
            <ul class="list-group">
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                Annual Sport Day 2024
                <button class="btn btn-danger cancel-btn">Dec 2024</button>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                Annual Marathon 2024
                <button class="btn btn-danger cancel-btn">Dec 2024</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src="../../public/libs/jquery/jquery-3.7.1.min.js"></script>

    <!-- SweetAlert2 JavaScript -->
    <script src="../../public/libs/sweetalert/sweetalert2.all.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="../../public/libs/bootstrap-5/js/bootstrap.min.js"></script>

    <!--Profile JS-->
    <script src="../js/profile.js"></script>
  </body>
</html>
