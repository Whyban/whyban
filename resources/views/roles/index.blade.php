<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roles - T-Sync</title>

  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
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
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/sync-removebg-preview.ico" alt="AdminLTELogo" height="200" width="200">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <span class="alert alert-success" id="alert-success" style="display: none"></span>
    <span class="alert alert-danger" id="alert-danger" style="display: none"></span>
    <!-- /.content-header -->
    <section class="content" style="margin-left: 5%; margin-right: 5%; margin-top: 2%; background: white;">
      <div class="container-fluid" >
        <div class="row">
          <div class="col-12" >
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Roles Information</h3>
                <div class="float-right">
                  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-add-new"><i class="fas fa-user-plus"></i>Add New Roles</button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Notes</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th class="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @if (count($roles) > 0)
                                @foreach ($roles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->notes }}</td>
                                        <td>
                                            @if ($item->is_active)
                                            Active
                                        @else
                                            In-Active
                                        @endif
                                        </td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td><button class="btn btn-primary btn-sm editBtn"  data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-notes="{{ $item->notes }}" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i>Edit</button></td>
                                        <td><button class="btn btn-danger btn-sm deleteBtn" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i>Delete</button></td>
                                    </tr>
                                @endforeach
                           @else
                                    <tr>
                                        <td colspan="6">No Data Found!</td>
                                    </tr>
                           @endif
                        </tbody>
                    </table>

              </div>

            {{-- ADD ROLES MODAL --}}
            <div class="modal fade" id="modal-add-new">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New Roles</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="addRolesForm">
                    <div class="form-group">

                      <label>Name</label>
                      <input type="text" class="form-control" name="name"  id=""  placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                      <label>Notes</label>
                      <textarea name="notes" id="" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Is Active</label>
                      <input type="checkbox" name="is_active" id="">
                    </div>
                  <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary addButton"  value = "Add New Record">
                  </div>
                </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            </div>

            {{-- EDIT ROLES MODAL --}}
            <div class="modal fade" id="editModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Roles</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="editRolesForm">
                        @csrf
                        <input type="hidden" id="roles_id" name="roles_id">
                      <div class="form-group">

                        <label>Name</label>
                        <input type="text" class="form-control" name="name"  id="name"  >
                      </div>
                      <div class="form-group">
                        <label>Notes</label>
                        <textarea name="notes" id="notes" class="form-control" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Is Active</label>
                        <input type="checkbox" name="is_active" id="is_active">
                      </div>
                    <div class="modal-footer justify-content-between">
                      <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-primary editButton" value = "Update New Record">
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              </div>
              </form>

            {{-- DELETE MODAL --}}
            <div class="modal fade" id="deleteModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Delete Roles</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                        Do you really want to delete <p class="roles_name"></p> ?

                    <div class="modal-footer justify-content-between">
                      <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-danger deleteBTN" value = "Delete">
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              </div>
              </form>



                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            </div>

      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
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


  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


{{-- ADD AJAX --}}
<script>
    $(document).ready(function(){
         $('#addRolesForm').submit('click', function(e){
            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: '{{ route("addRoles") }}',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.addButton').prop('disabled', true);
                },
                complete: function(){
                    $('.addButton').prop('disabled', false);
                },
                success: function(data){
                    if(data.success == true){
                        $('#modal-add-new').modal('hide');
                        printSuccessMsg(data.msg);
                        var reloadInterval = 1000;
                        function reloadPage(){
                            location.reload(true);
                        }
                        var intervalId = setInterval(reloadPage, reloadInterval);
                    }else if(data.success == false){
                        printErrorMsg(data.msg);
                    }else{
                        printValidationErrorMsg(data.msg);
                    }
                }
           });
           return false;
        });
        // DELETE AJAX
        $('.deleteBtn').on('click', function(){
            var roles_id = $(this).attr('data-id');
            var roles_name = $(this).attr('data-name');
            $('.roles_name').html('');
            $('.roles_name').html(roles_name);

            $('.deleteBTN').on('click', function(){
            var url = "{{ route('deleteRoles','roles_id') }}";
            url = url.replace('roles_id',roles_id);

            // console.log(url);
            $.ajax({
                url: url,
                type: 'GET',
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.deleteBTN').prop('disabled', true);
                },
                complete: function(){
                    $('.deleteBTN').prop('disabled', false);
                },
                success: function(data){
                    if(data.success == true){
                        $('#deleteModal').modal('hide');
                        printSuccessMsg(data.msg);
                        var reloadInterval = 1000;
                        function reloadPage(){
                            location.reload(true);
                        }
                        var intervalId = setInterval(reloadPage, reloadInterval);
                    }else{
                        printErrorMsg(data.msg);
                    }
                }
            });
        });
        });

        // EDIT ROLES FUNCTIONALITY
        $('.editBtn').on('click', function(){
            var roles_id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var notes = $(this).attr('data-notes');

            $('#name').val(name);
            $('#notes').val(notes);
            $('#roles_id').val(roles_id);

            // EDIT SUBMIT
           $('#editRolesForm').submit('click', function(e){
            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: '{{ route("editRoles") }}',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.editButton').prop('disabled', true);
                },
                complete: function(){
                    $('.editButton').prop('disabled', false);
                },
                success: function(data){
                    if(data.success == true){
                        $('#editModal').modal('hide');
                        printSuccessMsg(data.msg);
                        var reloadInterval = 1000;
                        function reloadPage(){
                            location.reload(true);
                        }
                        var intervalId = setInterval(reloadPage, reloadInterval);
                    }else if(data.success == false){
                        printErrorMsg(data.msg);
                    }else{
                        printValidationErrorMsg(data.msg);
                    }
                }
           });
        });

        function printValidationErrorMsg(msg){
                $.each(msg, function(field_name,error){
                    console.log(field_name,error);
                    $(document).find('#'+field_name+'_error').text(error);
                });
            }

        });
        function printErrorMsg(msg){
                $('#alert-danger').html('');
                $('#alert-danger').css('display','block');
                $('#alert-danger').append(''+msg+'');
            }
            function printSuccessMsg(msg){
                $('#alert-success').html('');
                $('#alert-success').css('display','block');
                $('#alert-success').append(''+msg+'');
                document.getElementById('addRolesForm').reset();
            }



    });
</script>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

</x-app-layout>
