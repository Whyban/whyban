<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projects - T-Sync</title>

  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects View') }}
        </h2>
    </x-slot>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <!-- Google Fonts -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
   <!-- summernote -->
   <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      {{-- <th style="width: 30%">
                          Team Members
                      </th> --}}
                      <th>
                          Project Progress
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                    @if (count($projects) > 0)

                  @foreach($projects as $project)
                  <tr class="project-row" data-id="{{ $project->id }}">
                <td>{{ $loop->iteration }}</td>
                {{-- <td>{{ $project->id }}</td> --}}
                <td>
                    {{ $project->project_name }}
                    <br />
                <small>
                    {{ $project->created_at->format('F d, Y') }}
                </small>
                </td>
                {{-- <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                              </li>
                          </ul>
                      </td> --}}
                      <td class="project_progress" data-progress="{{ $project->project_progress }}">
                    @php
                        $progress = $project->project_progress;
                        $progressBgClass = '';
                        $progressWidth = $progress . '%';
                        if ($progress <= 40) {
                            $progressBgClass = 'bg-red';
                        } elseif ($progress <= 75) {
                            $progressBgClass = 'bg-orange';
                        } else {
                            $progressBgClass = 'bg-green';
                        }
                    @endphp
                    <div class="progress progress-sm">
                    <div class="progress-bar {{ $progressBgClass }}" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progressWidth }}">
                    </div>
                    </div>
                    <small>
                        {{ $progress }}% Complete
                    </small>
                </td>

                <td>
                @if($project->status == 'Cancelled')
                        <span class="badge badge-danger">{{ $project->status }}</span>
                    @elseif($project->status == 'Success')
                        <span class="badge badge-success">{{ $project->status }}</span>
                    @elseif($project->status == 'On Hold')
                        <span class="badge badge-info">{{ $project->status }}</span>
                    @else
                        {{ $project->status }}
                    @endif
                </td>
                <td class="project-actions text-right">
                          {{-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> --}}
                          <a class="btn btn-info btn-sm edit-project" data-toggle="modal" data-target="#editProjectModal" data-project='@json($project)'>
                        <i class="fas fa-pencil-alt"></i>
                             Edit
                        </a>
                        <a class="btn btn-danger btn-sm delete-project" data-toggle="modal" data-target="#deleteProjectModal" data-name="{{ $project->project_name }}" data-id="{{ $project->id }}">
                        <i class="fas fa-trash"></i>
                          Delete
                        </a>
                        </form>
                      </td>

            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="4">No Data Found!</td>
                </tr>
            @endif


              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Modal for Edit Button -->
<div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editProjectModalLabel">Edit Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form id="editProjectForm">
              @csrf
              @method('PUT')
              <div class="modal-body">
                  <!-- Project Name Field -->
                  <div class="form-group">
                    <label for="project_name">Project Name</label>
                    <input type="text" class="form-control" id="project_name" name="project_name" value="{{ $projects }}">
                </div>
                <!-- Status Field -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="On Hold" {{ $projects == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                        <option value="Cancelled" {{ $projects == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                        <option value="Success" {{ $projects == 'Success' ? 'selected' : '' }}>Success</option>
                    </select>
                </div>
                <!-- Project Progress Field -->
                <div class="form-group">
                    <label for="project_progress">Project Progress (%)</label>
                    <input type="number" class="form-control" id="project_progress" name="project_progress" value="{{ $projects }}">
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- Modal for Edit Button -->

 <!-- Modal for delete Button -->
 <div class="modal fade" id="deleteProjectModal" tabindex="-1" role="dialog" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteProjectModalLabel">Delete Project</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form id="deleteProjectForm" method="POST">
            @csrf
            @method('DELETE')
              <div class="modal-body">


              </div>
          </form>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger deleteButton">Delete</button>
              </div>
      </div>
  </div>
</div>

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
<!-- Modal for delete Button -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function () {
    $('.edit-project').click(function () {
        // Find the parent row of the clicked button
       // Find the parent row of the clicked button
       var row = $(this).closest('.project-row');

        // Extract project ID from the row
        var projectId = row.data('id');
        console.log("Project ID:", projectId);

        // Extract data from the row
        var projectName = row.find('td:eq(1)').text().trim(); // Assuming project name is in the second column
        var status = row.find('td:eq(4)').text().trim(); // Assuming status is in the fifth column
        var progress = row.find('.project_progress').data('progress'); // Assuming progress is in a specific class within the row

        projectName = projectName.split('\n')[0].trim();

        // Fill modal fields with project data
        $('#project_name').val(projectName);
        $('#status').val(status);
        $('#project_progress').val(progress);

        // Set form action dynamically
        $('#editProjectForm').attr('action', '/projects/' + projectId);

        // Show the modal
        $('#editProjectModal').modal('show');
    });

      $('#editProjectForm').submit(function(e) {
          e.preventDefault();
          var form = $(this);
          $.ajax({
              url: form.attr('action'),
              type: 'PUT',
              data: form.serialize(),
              success: function(response) {
                  $('#editProjectModal').modal('hide');
                  // Optionally, update the project details in the table without reloading the page
                  window.location.href = '/view_project';
              }
          });
      });

      // Handling the click event for the save changes button
      $('#editProjectModal').on('click', '.btn-primary', function() {
          $('#editProjectForm').submit(); // Submit the form when save changes button is clicked
      });

  });
</script>

<script>
  $(document).ready(function () {
    var projectId;
    $('.delete-project').click(function () {
       projectId = $(this).data('id');
        var projectName = $(this).data('name').trim();
        console.log("Project Name:", projectName);

        // Set the project name in the modal
        $('#deleteProjectModal').find('.modal-body').html('<p style="white-space: nowrap;"> Do you want to delete ' + projectName + '?</p>');

        // Store project ID in delete button's data attribute
        $('.deleteButton').data('projectId', projectId);

    });

            // Handle delete button click
            $('.deleteButton').click(function () {
            var form = $('#deleteProjectForm');
            var url = '/projects/' + projectId + '/delete';

            $.ajax({
                url: url,
                type: 'DELETE',
                data: form.serialize(),
                success: function (response) {
                    $('#deleteProjectModal').modal('hide');
                    // Optionally, update the project details in the table without reloading the page
                    window.location.href = '/view_project';
                }
            });
        });
    });
</script>



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
