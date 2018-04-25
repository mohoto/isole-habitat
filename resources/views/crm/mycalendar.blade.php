<!doctype html>

<html lang="fr">

<head>
    <link href="{{ asset('isolation-crm/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('isolation-crm/lib/fullcalendar.min.css')}}">
    <link href="{{ asset('isolation-crm/css/style.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('isolation-crm/lib/fullcalendar.print.css')}}" media="print"/>
    <script src="{{ asset('isolation-crm/lib/moment.min.js')}}"></script>
    <script src="{{ asset('isolation-crm/lib/jquery.min.js')}}"></script>
    <script src="{{ asset('isolation-crm/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('isolation-crm/lib/fullcalendar.min.js')}}"></script>
    <script src="{{ asset('isolation-crm/plugins/fullcalendar/js/jquery.fullcalendar.js')}}"></script>
    <script src="{{ asset('isolation-crm/lib/locale-all.js')}}"></script>
    <script>
        $(function(){
            $('#calendar').fullCalendar({
                defaultView: 'agendaWeek',
                locale: 'fr',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                weekNumbers: true,
                eventLimit: true, // allow "more" link when too many events
                events: 'https://fullcalendar.io/demo-events.json'
            });
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Calendar</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-default btn-block waves-effect waves-light">
                                                <i class="fa fa-plus"></i> Create New
                                            </a>
                                            <div id="external-events" class="m-t-20">
                                                <br>
                                                <p>Drag and drop your event or click in the calendar</p>
                                                <div class="external-event bg-primary" data-class="bg-primary" style="position: relative;">
                                                    <i class="fa fa-move"></i>My Event One
                                                </div>
                                                <div class="external-event bg-pink" data-class="bg-pink" style="position: relative;">
                                                    <i class="fa fa-move"></i>My Event Two
                                                </div>
                                                <div class="external-event bg-info" data-class="bg-info" style="position: relative;">
                                                    <i class="fa fa-move"></i>My Event Three
                                                </div>
                                                <div class="external-event bg-purple" data-class="bg-purple" style="position: relative;">
                                                    <i class="fa fa-move"></i>My Event Four
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class="checkbox m-t-40">
                                                <input id="drop-remove" type="checkbox">
                                                <label for="drop-remove">
                                                    Remove after drop
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-lg-9">
                            <div class="card-box">
                                <div id="calendar"></div>
                            </div>
                        </div> <!-- end col -->
                    </div>  <!-- end row -->

                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title font-18 mt-0"><strong>Add Event</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title font-18 mt-0"><strong>Add</strong> a category</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                    <option value="inverse">Inverse</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                </div>
                <!-- end col-12 -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
</body>

</html>