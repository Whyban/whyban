<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - T-Sync</title>

  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendar') }}
        </h2>
    </x-slot>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>
<body>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
               Calendar
        </div>
        <div class="panel-body" >
            <div id="calendar"></div>
        </div>
    </div>
</div>
<!-- Event Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <div class="form-group">
                        <label for="eventTitle">Event Title</label>
                        <input type="text" class="form-control" id="eventTitle" placeholder="Enter event title">
                    </div>
                    <input type="hidden" id="startDate">
                    <input type="hidden" id="endDate">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEvent">Save Event</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit/Delete Event Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edit/Delete Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editEventForm">
                    <div class="form-group">
                        <label for="editEventTitle">Event Title</label>
                        <input type="text" class="form-control" id="editEventTitle" placeholder="Enter event title">
                    </div>
                    <input type="hidden" id="editStartDate">
                    <input type="hidden" id="editEndDate">
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="editEvent">Update Event</button>
                <button type="button" class="btn btn-danger" id="deleteEvent">Delete Event</button>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Delete Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this event?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="confirmDeleteEvent">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('message'))

<script>
    toastr.options = {
        "progressBar" : true,
        "closeButton" : true,
    }
    toastr.success("{{ Session::get('message') }}",'Success!',{timeOut:12000});
    toastr.info("{{ Sesssion::get('message') }}");
</script>

@endif

</body>
<script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            navLinks: true,
            editable: true,
            events: "getevent",
            displayEventTime: false,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            // Set start and end dates in the modal form
            $('#startDate').val(moment(start).format('YYYY-MM-DD'));
                $('#endDate').val(moment(end).format('YYYY-MM-DD'));

                // Show the modal
                $('#eventModal').modal('show');

                // Save event when Save button is clicked
                $('#saveEvent').off('click').on('click', function () {
                    var title = $('#eventTitle').val();
                    if (title) {
                        $.ajax({
                            url: "{{ URL::to('createevent') }}",
                            data: 'title=' + title + '&start=' + $('#startDate').val() + '&end=' + $('#endDate').val() + '&_token=' + "{{ csrf_token() }}",
                            type: "POST",
                            success: function (data) {
                                swal("The event has been added!", {
                                    icon: "success",
                                }).then((willReload) => {
                                    if (willReload) {
                                        location.reload();
                                    }
                                });
                                $('#calendar').fullCalendar('refetchEvents');
                                $('#eventModal').modal('hide');
                                $('#eventForm')[0].reset();
                            }
                        });
                    } else {
                        alert("Event Title is required");
                    }
                });
        },
        eventClick: function (event) {
               // Populate the edit modal with event data
               $('#editEventTitle').val(event.title);
                $('#editStartDate').val(moment(event.start).format('YYYY-MM-DD'));
                $('#editEndDate').val(moment(event.end).format('YYYY-MM-DD'));

                // Show the modal
                $('#editEventModal').modal('show');

                 // Handle delete event
                 $('#deleteEvent').on('click', function () {
                    $('#confirmDeleteModal').modal('show');
                    $('#editEventModal').modal('hide');

                    // Confirm delete event when Delete button is clicked
                    $('#confirmDeleteEvent').on('click', function () {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('deleteevent') }}",
                            data: {
                                id: event.id,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function (response) {
                                swal("Deleted Successfully", {
                                    icon: "success",
                                }).then((willReload) => {
                                    if (willReload) {
                                        location.reload();
                                    }
                                });
                                if (parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);

                                    $('#confirmDeleteModal').modal('hide');
                                    $('#editEventModal').modal('hide');
                                }
                            }
                        });
                    });
                });

                // Edit event when Edit button is clicked
                $('#editEvent').off('click').on('click', function () {
                    var title = $('#editEventTitle').val();
                    var start = $('#editStartDate').val();
                    var end = $('#editEndDate').val();
                    if (title) {
                        $.ajax({
                            url: "{{ URL::to('updateevent') }}",
                            data: 'title=' + title + '&start=' + start + '&end=' + end + '&id=' + event.id + '&_token=' + "{{ csrf_token() }}",
                            type: "POST",
                            success: function (data) {
                                swal("Updated Successfully", {
                                    icon: "success",
                                }).then((willReload) => {
                                    if (willReload) {
                                        location.reload();
                                    }
                                });
                                $('#calendar').fullCalendar('refetchEvents');
                                $('#editEventModal').modal('hide');
                            }
                        });
                    } else {
                        swal("Event Title is required", {
                            icon: "warning",
                        });
                    }
                });
            }
        });
    });
</script>
</html>
</x-app-layout>
