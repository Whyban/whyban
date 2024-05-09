<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projects Add - T-Sync</title>

  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects Add') }}
        </h2>
    </x-slot>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/css/variables.css" rel="stylesheet">
   <link href="assets/css/main.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
<!-- Site wrapper -->
<div class="wrapper">
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/sync-removebg-preview.ico" alt="AdminLTELogo" height="200" width="200">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content" style="margin-left: 5%; margin-right: 5%; margin-top: 2%; background: white;">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">General</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('project-add') }}" method="post"> <!-- Form starts here -->
            @csrf <!-- CSRF Token -->
            <div class="form-group">
              <label for="inputName">Project Name</label>
              <input type="text" name="project_name" id="inputName" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputDescription">Project Description</label>
              <textarea name="project_description" id="inputDescription" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="inputStatus">Status</label>
              <select name="status" id="inputStatus" class="form-control custom-select">
                <option selected disabled>Select one</option>
                <option>On Hold</option>
                <option>Cancelled</option>
                <option>Success</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Client Company</label>
              <input type="text" name="client_company" id="inputClientCompany" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputProjectLeader">Project Leader</label>
              <input type="text" name="project_leader" id="inputProjectLeader" class="form-control">
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col-md-6">
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Budget</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="inputEstimatedBudget">Estimated budget</label>
            <input type="number" name="estimated_budget" id="inputEstimatedBudget" class="form-control">
          </div>
          <div class="form-group">
            <label for="inputSpentBudget">Total amount spent</label>
            <input type="number" name="total_amount_spent" id="inputSpentBudget" class="form-control">
          </div>
          <div class="form-group">
            <label for="inputEstimatedDuration">Estimated project duration</label>
            <input type="number" name="estimated_duration" id="inputEstimatedDuration" class="form-control">
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="#" class="btn btn-secondary">Cancel</a>
      <button type="submit" class="btn btn-success float-right">Create new Project</button> <!-- Submit button -->
    </div>
  </div>
  </form> <!-- Form ends here -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center mb-0">
                    <h4 class="modal-title mb-0 pb-0">Chat with Developers</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="chat-container">
                    <div class="admin">
                        <img src="{{ asset('assets/images/admin.png') }}" alt="Admin" class="admin-img rounded-circle">
                    </div>
                    <div class="chat-bubble">
                        <p>Hey there! How can we assist you today?</p>
                    </div>
                </div>
                <form id="messageForm">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" id="messageInput" placeholder="Type your message...">
                        <div class="send-icon">
                            <img src="{{ asset('assets/images/send.png') }}" alt="chat" class="send" width="30" height="30">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="chatbox-wrapper">
  <a href="chatify">
		<div class="chatbox-toggle">
			<i class="fa-regular fa-message"></i>
		</div>
    </a>
	</div>
  <!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="background:#9c9a9a;">

<div class="footer-legal">
<div class="container">

<div class="row justify-content-between">
<div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
<footer class="container">
<p style="color: #3e556f;">&copy; 2024 T-Sync. &middot; <a href="#" style="color: #3e556f;">Privacy</a> &middot; <a href="#" style="color: #3e556f;">Terms</a></p>
</footer>

<div class="credits">
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
</div>

</div>

<div class="col-md-3">
<div class="social-links mb-3 mb-lg-0 text-center text-md-end">
<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
<a href="#" class="github"><i class="bi bi-github"></i></a>
</div>

</div>

</div>

</div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>


</x-app-layout>
