@extends('layouts.admin.app')
@section('content')
<div class="card-group">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h3>86%</h3>
                    <h6 class="card-subtitle">Total Product</h6>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h3>40%</h3>
                    <h6 class="card-subtitle">Pending Product</h6>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h3>56%</h3>
                    <h6 class="card-subtitle">Product A</h6>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h3>26%</h3>
                    <h6 class="card-subtitle">Product B</h6>
                </div>
                <div class="col-12">
                    <div class="progress">
                        <div class="progress-bar bg-inverse" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- place order / Exchange -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white">
                            <i class="ti-pie-chart"></i>
                        </h1>
                    </div>
                    <div>
                        <h4 class="card-title">Bandwidth usage</h4>
                        <h6 class="text-white op-5">March 2019</h6>
                    </div>

                </div>

                <div class="row m-t-20 align-items-center">
                    <div class="col-4">
                        <h3 class="font-light text-white">50 GB</h3>
                    </div>
                    <div class="col-8 text-right">
                        <div class="bandwidth"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-cyan text-white">
            <div class="card-body">
                <div class="d-flex">
                    <div class="m-r-20 align-self-center">
                        <h1 class="text-white">
                            <i class="ti-pie-chart"></i>
                        </h1>
                    </div>
                    <div>
                        <h4 class="card-title">Download count</h4>
                        <h6 class="text-white op-5">March 2019</h6>
                    </div>

                </div>

                <div class="row m-t-20 align-items-center">
                    <div class="col-4">
                        <h3 class="font-light text-white">14506</h3>
                    </div>
                    <div class="col-8 text-right">
                        <div class="spark-count"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-body">
                <h4 class="card-title">Product Sale</h4>
                <div id="visitor" style="height:223px; width:100%;" class="m-t-20"></div>
                <!-- row -->
                <div class="row m-t-30 m-b-15">
                    <!-- column -->
                    <div class="col-4 birder-right text-left">
                        <h4 class="m-b-0">60%
                            <small>
                                <i class="ti-arrow-up text-success"></i>
                            </small>
                        </h4>Iphone</div>
                        <!-- column -->
                        <div class="col-4 birder-right text-center">
                            <h4 class="m-b-0">28%
                                <small>
                                    <i class="ti-arrow-down text-danger"></i>
                                </small>
                            </h4>Samsung</div>
                            <!-- column -->
                            <div class="col-4 text-right">
                                <h4 class="m-b-0">12%
                                    <small>
                                        <i class="ti-arrow-up text-success"></i>
                                    </small>
                                </h4>One+</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Last Month Income</h4>
                            <div id="income" class="m-t-30"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- project of the month -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="card">
                        <div class="card-body p-b-0">
                            <h4 class="card-title">Projects of the Month</h4>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Team Lead</th>
                                            <th class="border-top-0">Project</th>
                                            <th class="border-top-0">Weeks</th>
                                            <th class="border-top-0">Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10">
                                                        <img src="{{ asset('adm/images/users/d1.jpg') }}" alt="user" class="rounded-circle" width="45">
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Hanna Gover</h4>
                                                        <span>hgover@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td>35</td>
                                            <td class="font-medium">$96K</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10">
                                                        <img src="{{ asset('adm/images/users/d2.jpg') }}" alt="user" class="rounded-circle" width="45">
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16 font-medium">Daniel Kristeen</h4>
                                                        <span>Kristeen@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td>35</td>
                                            <td class="font-medium">$96K</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10">
                                                        <img src="{{ asset('adm/images/users/d3.jpg') }}" alt="user" class="rounded-circle" width="45">
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16 font-medium">Julian Josephs</h4>
                                                        <span>Josephs@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td>35</td>
                                            <td class="font-medium">$96K</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10">
                                                        <img src="{{ asset('adm/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="45">
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16 font-medium">Jan Petrovic</h4>
                                                        <span>hgover@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td>35</td>
                                            <td class="font-medium">$96K</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10">
                                                        <img src="{{ asset('adm/images/users/d2.jpg') }}" alt="user" class="rounded-circle" width="45">
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16 font-medium">Daniel Kristeen</h4>
                                                        <span>Kristeen@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td>35</td>
                                            <td class="font-medium">$96K</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4 class="card-title">Temp Guide</h4>
                            <div class="d-flex align-items-center flex-row m-t-30">
                                <div class="display-5 text-info">
                                    <i class="wi wi-day-showers"></i>
                                    <span>73
                                        <sup>°</sup>
                                    </span>
                                </div>
                                <div class="m-l-10">
                                    <h3 class="m-b-0">Saturday</h3>
                                    <small>Ahmedabad, India</small>
                                </div>
                            </div>
                            <table class="table no-border mini-table m-t-20">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">Wind</td>
                                        <td class="font-medium">ESE 17 mph</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Humidity</td>
                                        <td class="font-medium">83%</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Pressure</td>
                                        <td class="font-medium">28.56 in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Cloud Cover</td>
                                        <td class="font-medium">78%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul class="row list-style-none text-center m-t-30">
                                <li class="col-3">
                                    <h4 class="text-info">
                                        <i class="wi wi-day-sunny"></i>
                                    </h4>
                                    <span class="d-block text-muted">09:30</span>
                                    <h3 class="m-t-5">70
                                        <sup>°</sup>
                                    </h3>
                                </li>
                                <li class="col-3">
                                    <h4 class="text-info">
                                        <i class="wi wi-day-cloudy"></i>
                                    </h4>
                                    <span class="d-block text-muted">11:30</span>
                                    <h3 class="m-t-5">72
                                        <sup>°</sup>
                                    </h3>
                                </li>
                                <li class="col-3">
                                    <h4 class="text-info">
                                        <i class="wi wi-day-hail"></i>
                                    </h4>
                                    <span class="d-block text-muted">13:30</span>
                                    <h3 class="m-t-5">75
                                        <sup>°</sup>
                                    </h3>
                                </li>
                                <li class="col-3">
                                    <h4 class="text-info">
                                        <i class="wi wi-day-sprinkle"></i>
                                    </h4>
                                    <span class="d-block text-muted">15:30</span>
                                    <h3 class="m-t-5">76
                                        <sup>°</sup>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Task, Feeds -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Task List</h4>
                            <div class="todo-widget scrollable" style="height:450px;">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label todo-label" for="customCheck">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                                <span class="badge badge-pill badge-danger float-right">Today</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/1.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Steave">
                                            </li>
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/2.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Jessica">
                                            </li>
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/3.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Priyanka">
                                            </li>
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/4.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Selina">
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label todo-label" for="customCheck1">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span>
                                                <span class="badge badge-pill badge-primary float-right">1 week </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label todo-label" for="customCheck2">
                                                <span class="todo-desc">Give Purchase report to</span>
                                                <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/3.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Priyanka">
                                            </li>
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/4.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Selina">
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label todo-label" for="customCheck3">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span>
                                                <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label todo-label" for="customCheck4">
                                                <span class="todo-desc">Give Purchase report to</span>
                                                <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/3.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Priyanka">
                                            </li>
                                            <li class="assignee">
                                                <img class="assignee-img" src="{{ asset('adm/images/users/4.jpg') }}" alt="user" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Selina">
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Feeds</h4>
                            <div class="feed-widget scrollable" style="height:450px;">
                                <ul class="list-style-none feed-body m-0 p-b-20">
                                    <li class="feed-item">
                                        <div class="feed-icon bg-info">
                                            <i class="far fa-bell"></i>
                                        </div>
                                        <a href="">You have 4 pending tasks.</a>
                                        <span class="ml-auto font-12 text-muted">Just Now</span>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-success">
                                            <i class="ti-server"></i>
                                        </div>
                                        <a href=""> Server #1 overloaded.</a>
                                        <span class="ml-auto font-12 text-muted">2 Hours ago</span>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-warning">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                        <a href="">New order received.</a>
                                        <span class="ml-auto font-12 text-muted">31 May</span>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-danger">
                                            <i class="ti-user"></i>
                                        </div>
                                        <a href="">New user registered.</a>
                                        <span class="ml-auto font-12 text-muted">30 May</span>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-inverse">
                                            <i class="far fa-bell"></i>
                                        </div>
                                        <a href="">New user registered.</a>
                                        <span class="ml-auto font-12 text-muted">27 May</span>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-info">
                                            <i class="far fa-bell"></i>
                                        </div>
                                        <a href="">You have 4 pending tasks.</a>
                                        <span class="ml-auto font-12 text-muted">Just Now</span>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-icon bg-danger">
                                            <i class="ti-user"></i>
                                        </div>
                                        <a href="">New user registered.</a>
                                        <span class="ml-auto font-12 text-muted">30 May</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="card-body">
                                    <h4 class="card-title">Reviews</h4>
                                    <h5 class="card-subtitle">Overview of Review</h5>
                                    <h2 class="font-medium m-t-40 m-b-0">25426</h2>
                                    <span class="text-muted">This month we got 346 New Reviews</span>
                                    <div class="image-box m-t-30 m-b-30">
                                        <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Simmons">
                                            <img src="{{ asset('adm/images/users/1.jpg') }}" class="rounded-circle" width="45" alt="user">
                                        </a>
                                        <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitz">
                                            <img src="{{ asset('adm/images/users/2.jpg') }}" class="rounded-circle" width="45" alt="user">
                                        </a>
                                        <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Phil">
                                            <img src="{{ asset('adm/images/users/3.jpg') }}" class="rounded-circle" width="45" alt="user">
                                        </a>
                                        <a href="#" class="m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Melinda">
                                            <img src="{{ asset('adm/images/users/4.jpg') }}" class="rounded-circle" width="45" alt="user">
                                        </a>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-lg btn-info waves-effect waves-light">Checkout All Reviews</a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-6 border-left">
                                <div class="card-body">
                                    <ul class="list-style-none">
                                        <li class="m-t-30">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-emoticon-happy display-5 text-muted"></i>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Positive Reviews</h5>
                                                    <span class="text-muted">25547 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="m-t-40">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-emoticon-sad display-5 text-muted"></i>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Negative Reviews</h5>
                                                    <span class="text-muted">5547 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li class="m-t-40 m-b-40">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-emoticon-neutral display-5 text-muted"></i>
                                                <div class="m-l-10">
                                                    <h5 class="m-b-0">Neutral Reviews</h5>
                                                    <span class="text-muted">547 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card earning-widget">
                        <div class="card-body">
                            <h4 class="m-b-0">Total Earning</h4>
                        </div>
                        <div class="border-top scrollable" style="height:365px;">
                            <table class="table v-middle no-border">
                                <tbody>
                                    <tr>
                                        <td style="width:40px">
                                            <img src="{{ asset('adm/images/users/1.jpg') }}" width="50" class="rounded-circle" alt="logo">
                                        </td>
                                        <td>Andrew Simon</td>
                                        <td align="right">
                                            <span class="label label-info">$2300</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('adm/images/users/2.jpg') }}" width="50" class="rounded-circle" alt="logo">
                                        </td>
                                        <td>Daniel Kristeen</td>
                                        <td align="right">
                                            <span class="label label-success">$3300</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('adm/images/users/3.jpg') }}" width="50" class="rounded-circle" alt="logo">
                                        </td>
                                        <td>Dany John</td>
                                        <td align="right">
                                            <span class="label label-primary">$4300</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('adm/images/users/4.jpg') }}" width="50" class="rounded-circle" alt="logo">
                                        </td>
                                        <td>Chris gyle</td>
                                        <td align="right">
                                            <span class="label label-warning">$5300</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('adm/images/users/5.jpg') }}" width="50" class="rounded-circle" alt="logo">
                                        </td>
                                        <td>Opera mini</td>
                                        <td align="right">
                                            <span class="label label-danger">$4567</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('adm/images/users/6.jpg') }}" width="50" class="rounded-circle" alt="logo">
                                        </td>
                                        <td>Microsoft edge</td>
                                        <td align="right">
                                            <span class="label label-megna">$7889</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            @push('css')

            @endpush
            @push('js')

            @endpush