 

@extends('layouts.layout')

@section('title', 'Listagem das Contas')

@section('content')
 <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">

               <!-- Page Header -->
               <div class="page-header d-lg-flex d-block">
                <div class="page-leftheader">
                    <div class="page-title">Client<span class="fw-normal text-muted ms-2">Dashboard</span></div>
                </div>
                <div class="page-rightheader">
                    <div class="d-flex align-items-center flex-wrap my-auto end-content breadcrumb-end">
                        <div class="d-lg-flex d-block">
                            <div class="btn-list">
                                <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newprojectmodal"><i class="fe fe-plus fs-12 my-auto me-2"></i>Create New Project</button>
                                <button  class="btn btn-light3" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="fe fe-mail"></i> </button>
                                <button  class="btn btn-light3" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="fe fe-phone-call"></i> </button>
                                <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="fe fe-info"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header Close -->
            

            <!-- Row -->
            <div class="row">
                <div class="col-xxl-9 col-xl-12  col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 ">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="mt-0 text-start">
                                                <span class="fs-16 fw-semibold">Total Projects</span>
                                                <h3 class="mb-0 mt-1 text-primary fs-25">12,548</h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon1 bg-primary my-auto  float-end"> <i class="fe fe-briefcase"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="mt-0 text-start">
                                                <span class="fs-16 fw-semibold">On Going</span>
                                                <h3 class="mb-0 mt-1 text-secondary fs-25">94</h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon1 bg-secondary my-auto  float-end"> <i class="fe fe-info"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="mt-0 text-start">
                                                <span class="fs-16 fw-semibold">Completed Projects</span>
                                                <h3 class="mb-0 mt-1 text-success fs-25">11,134</h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon1 bg-success my-auto  float-end"> <i class="fe fe-check"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-8 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="card-options">
                                        <div class="btn-list">
                                            <a  href="javascript:void(0);" class="btn ripple btn-outline-light text-dark float-start me-4 d-flex my-1"><span class="dot-label bg-primary me-2 my-auto"></span>Expenses</a>
                                            <a  href="javascript:void(0);" class="btn ripple btn-outline-light text-dark float-start me-4 d-flex my-1"><span class="dot-label bg-primary bg-opacity-20 me-2 my-auto"></span>Projects</a>
                                            <a  href="javascript:void(0);" class="btn ripple btn-outline-light  my-1" data-bs-toggle="dropdown" aria-expanded="false"> Year <i class="fe fe-chevron-down"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                <li><a  href="javascript:void(0);" class="dropdown-item">Yearly</a></li>
                                                <li><a  href="javascript:void(0);" class="dropdown-item">Monthly</a></li>
                                                <li><a  href="javascript:void(0);" class="dropdown-item">Weekly</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-2 px-1">
                                    <div class="chart-wrapper">
                                        <div id="chartbar-statistics" class=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-header  border-0">
                                    <h4 class="card-title">Spend Analysis </h4>
                                </div>
                                <div class="card-body px-0">
                                    <div id="analysis" class="mx-auto apex-dount"></div>
                                    <div class="row mt-3">
                                        <div class="col-10 mx-auto">
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="p-2 d-flex"><span class="dot-label bg-primary me-2 mt-1"></span><span class="fw-normal"> Design</span></td>
                                                            <td class="p-2"><span class="me-4 fs-16">:</span><span class="ms-auto fw-semibold fs-16">$953</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-2 d-flex"><span class="dot-label bg-secondary me-2 mt-1"></span> <span class="fw-normal">Development</span></td>
                                                            <td class="p-2"><span class="me-4 fs-16">:</span><span class="ms-auto fw-semibold fs-16">$12,426</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="p-2 d-flex"><span class="dot-label bg-success me-2 mt-1 "></span> <span class="fw-normal">Service</span></td>
                                                            <td class="p-2"><span class="me-4 fs-16">:</span><span class="ms-auto fw-semibold fs-16">$25,453</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body pb-0">
                                    <div class="d-flex">
                                        <div class="">
                                            <div class="mt-0 text-start">
                                                <span class="fs-16 fw-semibold">Total Expenses</span>
                                                <h2 class="mb-1 mt-1">$21,5489</h2>
                                                <div class="">
                                                    <span class="fs-13 mt-2 text-danger">
                                                        <i class="fe fe-arrow-up-right me-1 p-1 rounded-circle bg-danger-transparent text-danger"></i>+24%
                                                    </span><span  class="ms-2 text-muted fs-13">then Last Year</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown"> <a  href="javascript:void(0);" class="btn ripple btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"> Year <i class="fe fe-chevron-down"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                    <li><a  href="javascript:void(0);"  class="dropdown-item">Yearly</a></li>
                                                    <li><a  href="javascript:void(0);"  class="dropdown-item">Monthly</a></li>
                                                    <li><a  href="javascript:void(0);"  class="dropdown-item">Weekly</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="expenses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div id="carousel-indicator" class="carousel slide dashboard-carousel" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Completed Project</h4>
                                                <div class="d-flex">
                                                    <div class="task-img bg-primary-transparent me-4 flex-shrink-0">
                                                        <img src="../assets/images/media/png/19.png" alt="img" class="">
                                                </div>
                                                    <div class="mt-2 carousel-body">
                                                        <h6 class="mb-1 fw-semibold fs-16 text-over">Angular App Development</h6>
                                                        <p class="fs-14 text-muted">Application Development</p>
                                                    </div>
                                                </div>
                                                <h6 class="fs-16 fw-normal mt-2 text-muted"><a  href="javascript:void(0);" class="text-primary">Congratulations!</a> Your Angular Project Completed Chcek Your Demo</h6>
                                                <div class="d-grid">
                                                    <a  href="javascript:void(0);" class="btn btn-light btn-block text-primary mt-2">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Design Updated</h4>
                                                <div class="d-flex">
                                                    <div class="task-img bg-primary-transparent me-4">
                                                        <img src="../assets/images/media/png/17.png" alt="img" class="">
                                                    </div>
                                                    <div class="mt-2 carousel-body">
                                                        <h6 class="mb-1 fw-semibold fs-16 text-over">Adobe XD Project</h6>
                                                        <p class="fs-14 text-muted">Mobile App Ui Designing</p>
                                                    </div>
                                                </div>
                                                <h6 class="fs-16 fw-normal mt-2 text-muted"><a  href="javascript:void(0);" class="text-primary">Congratulations!</a> Your App Design uploaded Chcek Your Demo</h6>
                                                <div class="d-grid">
                                                    <a  href="javascript:void(0);" class="btn btn-light btn-block text-primary mt-2">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Completed Project</h4>
                                                <div class="d-flex">
                                                    <div class="task-img bg-primary-transparent me-4">
                                                        <img src="../assets/images/media/png/18.png" alt="img" class="">
                                                    </div>
                                                    <div class="mt-2 carousel-body">
                                                        <h6 class="mb-1 fw-semibold fs-16 text-over">HTML Design Project</h6>
                                                        <p class="fs-14 text-muted">Mobile App Ui Designing</p>
                                                    </div>
                                                </div>
                                                <h6 class="fs-16 fw-normal mt-2 text-muted"><a  href="javascript:void(0);" class="text-primary">Congratulations!</a> Your App Design uploaded Chcek Your Demo</h6>
                                                <div class="d-grid">
                                                    <a  href="javascript:void(0);" class="btn btn-light btn-block text-primary mt-2">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-indicator" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-indicator" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

            <!--Row-->
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header justify-content-between">
                            <h4 class="card-title">Recent Orders</h4>
                            <div class="card-options pr-3">
                                <div class="dropdown"> <a  href="javascript:void(0);" class="btn ripple btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> See All</a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                        <li><a  href="javascript:void(0);"  class="dropdown-item">Monthly</a></li>
                                        <li><a  href="javascript:void(0);"  class="dropdown-item">Yearly</a></li>
                                        <li><a  href="javascript:void(0);"  class="dropdown-item">Weekly</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-menu-heading table_tabs mt-2 p-0 ">
                            <div class="tabs-menu1">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class="ms-4"><a href="#tab5" class="active"  data-bs-toggle="tab">Projects</a></li>
                                    <li><a href="#tab6"  data-bs-toggle="tab">Services</a></li>
                                    <li><a href="#tab7" data-bs-toggle="tab">Support</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body table_tabs1 p-0 border-0">
                            <div class="tab-content">
                                <div class="tab-pane  p-0 border-0 active" id="tab5">
                                    <div class="table-responsive card-table-one">
                                        <table class="table table-vcenter text-nowrap  mb-0 orders-table">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Order Projects</th>
                                                    <th class="border-top-0">Order Date</th>
                                                    <th class="border-top-0">Deadline</th>
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <img src="../assets/images/media/png/17.png" alt="img" class="">
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Adobe Xd Ui Design</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">Ui Designing And Prototype</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start fs-13 text-muted">12-2-2020</td>
                                                    <td class="text-start fs-13 text-muted">15-2-2020</td>
                                                    <td class="custom-min-w-5">
                                                        <div id="attendance"></div>
                                                    </td>
                                                    <td class="text-start">
                                                        <div class="d-flex">
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="fe fe-send primary text-primary"></i></a>
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <span class="fe fe-globe text-primary ms-1"></span>
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Website Redesign</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">Admin project theme Redesign</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start fs-13 text-muted">16-1-2020</td>
                                                    <td class="text-start fs-13 text-muted">12-2-2020</td>
                                                    <td class="custom-min-w-5">
                                                        <div id="attendanc2"></div>
                                                    </td>
                                                    <td class="text-start">
                                                        <div class="d-flex">
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="fe fe-send primary text-primary"></i></a>
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <img src="../assets/images/media/png/18.png" alt="img" class="">
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">HTML Updated</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">4.2.3 New Version Updated</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start fs-13 text-muted">16-1-2020</td>
                                                    <td class="text-start fs-13 text-muted">10-2-2020</td>
                                                    <td class="custom-min-w-5">
                                                        <div id="attendance3"></div>
                                                    </td>
                                                    <td class="text-start">
                                                        <div class="d-flex">
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="fe fe-send primary text-primary"></i></a>
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <span class="fe fe-trending-up text-primary ms-1"></span>
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Project Updated</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">Senior Protoyper</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start fs-13 text-muted">16-1-2021</td>
                                                    <td class="text-start fs-13 text-muted">9-2-2021</td>
                                                    <td class="custom-min-w-5">
                                                        <div id="attendance4"></div>
                                                    </td>
                                                    <td class="text-start">
                                                        <div class="d-flex">
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="fe fe-send primary text-primary"></i></a>
                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                                <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane  p-0 border-0" id="tab6">
                                    <div class="table-responsive card-table-one">
                                        <table class="table table-vcenter text-nowrap  mb-0 orders-table">
                                            <thead>
                                                <tr>
                                                    <th class="wd-10 border-top-0">Order Services</th>
                                                    <th class="wd-10 border-top-0">Start Date</th>
                                                    <th class="wd-10 border-top-0">End Date</th>
                                                    <th class="wd-15 border-top-0">Status</th>
                                                    <th class="wd-15 border-top-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <span class="fe fe-globe text-primary ms-1"></span>
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Domain Register</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">www.beauty.com</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 text-muted">12-2-2020</td>
                                                    <td class="fs-13 text-muted">15-2-2020</td>
                                                    <td>
                                                        <span class="badge bg-success">Paid</span>
                                                    </td>
                                                    <td class="">
                                                        <a  href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <span class="fa fa-bullhorn text-pink ms-1"></span>
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Digital Marketing</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">Angular Project</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=" fs-13 text-muted">16-2-2020</td>
                                                    <td class="fs-13 text-muted">18-2-2020</td>
                                                    <td>
                                                        <span class="badge bg-danger">Pending</span>
                                                    </td>
                                                    <td class="">
                                                        <a  href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <span class="fe fe-airplay text-info ms-1"></span>
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Website Maintenance</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">Wordpress Template</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 text-muted">10-2-2020</td>
                                                    <td class="fs-13 text-muted">18-2-2020</td>
                                                    <td>
                                                        <span class="badge bg-success">Paid</span>
                                                    </td>
                                                    <td class="">
                                                        <a  href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="table_img rounded-circle bg-light me-3">
                                                                <span class="fe fe-server text-orange ms-1"></span>
                                                            </div>
                                                            <div class="me-3 mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">Hosting Services</h6>
                                                                <div class="clearfix"></div>
                                                                <small class="text-muted">Beauty Parlour</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="fs-13 text-muted">9-2-2021</td>
                                                    <td class="fs-13 text-muted">15-2-2021</td>
                                                    <td>
                                                        <span class="badge bg-danger">Pending</span>
                                                    </td>
                                                    <td class="">
                                                        <a  href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane  p-0 border-0 " id="tab7">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Projects</label>
                                            <select name="projects"  class="form-control custom-select select2">
                                                <option value="0">Choose Project</option>
                                                <option value="1">Project 01</option>
                                                <option value="2">Project 02</option>
                                                <option value="3">Project 03</option>
                                                <option value="4">Project 04</option>
                                                <option value="5">Project 05</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Priority</label>
                                            <select name="projects"  class="form-control custom-select select2">
                                                <option value="0">Choose One</option>
                                                <option value="1">High</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Low</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Note:</label>
                                            <textarea class="form-control" rows="3">Some text here...</textarea>
                                        </div>
                                        <a  href="javascript:void(0);" class="btn btn-primary mt-4">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header justify-content-between">
                            <h4 class="card-title">Recent Invoices</h4>
                            <div class="card-options pr-3">
                                <div class="dropdown">
                                    <a href="" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> View All</a>
                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-download-cloud me-2"></i>Download</a></li>
                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 pt-4">
                            <div class="table-responsive card-table-one">
                                <table class="table table-vcenter text-nowrap mb-0 invoice-table">
                                    <thead>
                                        <tr>
                                            <th>Invoice ID</th>
                                            <th>Projects</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md bradius fs-20 bg-success-transparent text-success">
                                                        <span class="fe fe-check"></span>
                                                    </span>
                                                    <div class="ms-3 d-block mt-0 mt-sm-1">
                                                        <h6 class="mb-0 fs-14 fw-semibold">#864135</h6>
                                                        <div class="clearfix"></div>
                                                        <small class="text-muted fs-11">05 Jan 2020</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="mb-0 fs-14 fw-semibold">Angular Department</h6>
                                            </td>
                                            <td class="text-start fs-13"><h6 class="mb-0 fs-14 fw-semibold">$15,426</h6></td>
                                            <td>
                                                <span class="badge bg-success-transparent">Paid</span>
                                            </td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="fe fe-file-text primary text-primary"></i></a>
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md bradius fs-20 bg-orange-transparent text-orange">
                                                        <span class="fe fe-chevron-up"></span>
                                                    </span>
                                                    <div class="ms-3 d-block mt-0 mt-sm-1">
                                                        <h6 class="mb-0 fs-14 fw-semibold">#456820</h6>
                                                        <div class="clearfix"></div>
                                                        <small class="text-muted fs-11">03 Jan 2020</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="mb-0 fs-14 fw-semibold">Admin Template</h6>
                                            </td>
                                            <td class="text-start fs-13"><h6 class="mb-0 fs-14 fw-semibold">$1421</h6></td>
                                            <td>
                                                <span class="badge bg-orange-transparent">Overdue</span>
                                            </td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="fe fe-file-text primary text-primary"></i></a>
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md bradius fs-20 bg-warning-transparent text-warning">
                                                        <span class="fe fe-chevron-left"></span>
                                                    </span>
                                                    <div class="ms-3 d-block mt-0 mt-sm-1">
                                                        <h6 class="mb-0 fs-14 fw-semibold">#956298</h6>
                                                        <div class="clearfix"></div>
                                                        <small class="text-muted fs-11">29 Dec 2019</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="mb-0 fs-14 fw-semibold">HTML Update</h6>
                                            </td>
                                            <td class="text-start fs-13"><h6 class="mb-0 fs-14 fw-semibold">$8427</h6></td>
                                            <td>
                                                <span class="badge bg-warning-transparent">Unpaid</span>
                                            </td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="fe fe-file-text primary text-primary"></i></a>
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md bradius fs-20 bg-success-transparent text-success">
                                                        <span class="fe fe-check"></span>
                                                    </span>
                                                    <div class="ms-3 d-block mt-0 mt-sm-1">
                                                        <h6 class="mb-0 fs-14 fw-semibold">#190675</h6>
                                                        <div class="clearfix"></div>
                                                        <small class="text-muted fs-11">29 Dec 2019</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="mb-0 fs-14 fw-semibold">HTML Update</h6>
                                            </td>
                                            <td class="text-start fs-13"><h6 class="mb-0 fs-14 fw-semibold">$8427</h6></td>
                                            <td>
                                                <span class="badge bg-success-transparent">Paid</span>
                                            </td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="fe fe-file-text primary text-primary"></i></a>
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>
                                                <div class="d-flex">
                                                    <span class="avatar avatar-md bradius fs-20 bg-secondary-transparent text-secondary">
                                                        <span class="fe fe-chevron-down"></span>
                                                    </span>
                                                    <div class="ms-3 d-block mt-0 mt-sm-1">
                                                        <h6 class="mb-0 fs-14 fw-semibold">#067298</h6>
                                                        <div class="clearfix"></div>
                                                        <small class="text-muted fs-11">28 Dec 2019</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="mb-0 fs-14 fw-semibold">Hosting Template</h6>
                                            </td>
                                            <td class="text-start fs-13"><h6 class="mb-0 fs-14 fw-semibold">$12,452</h6></td>
                                            <td>
                                                <span class="badge bg-secondary-transparent">Draft</span>
                                            </td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="fe fe-file-text primary text-primary"></i></a>
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical text-primary"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-eye me-2"></i>View</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-plus-circle me-2"></i>Add</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-trash-2 me-2"></i>Remove</a></li>
                                                        <li><a  href="javascript:void(0);"  class="dropdown-item"><i class="fe fe-settings me-2"></i>More</a></li>
                                                    </ul>
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
            <!-- End Row-->

            <!--Row-->
            <div class="row">
                <div class="col-xxl-8 col-xl-6  col-md-12 col-lg-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header border-0">
                            <h4 class="card-title">Project</h4>
                        </div>
                        <div class="card-body pt-3 p-0">
                            <div class="table-responsive card-table-one">
                                <table class="table table-vcenter text-nowrap  mb-0 projecttable">
                                    <thead>
                                        <tr>
                                            <th>Project Title </th>
                                            <th>Project Status</th>
                                            <th></th>
                                            <th>Priority</th>
                                            <th>Work Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="table_img rounded-circle bg-light me-3">
                                                        <img src="../assets/images/media/png/17.png" alt="img" class="">
                                                    </div>
                                                    <div class="me-3 mt-0 mt-sm-3 d-block">
                                                        <h5 class="mb-0 fs-16 mt-1 fw-semibold">Ui Design <span class="badge bg-primary-light">Medium</span></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger w-25"></div>
                                                </div> 
                                            </td>
                                            <td><span class="text-orange fs-15">27%</span></td>
                                            <td><span class="text-muted">Low</span></td>
                                            <td><span class="text-warning fs-15">On Hold <i class="fe fe-alert-circle ms-1"></i></span></td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="fe fe-mail  text-primary"></i></a>
                                                <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fe fe-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="table_img rounded-circle bg-light me-3">
                                                        <img src="../assets/images/media/png/11.png" alt="img" class="">
                                                    </div>
                                                    <div class="me-3 mt-0 mt-sm-3 d-block">
                                                        <h5 class="mb-0 fs-16 mt-1 fw-semibold">Jquery Issues Fixed</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success w-100"></div>
                                                </div>
                                            </td>
                                            <td><span class="text-success fs-15">97%</span></td>
                                            <td><span class="text-muted">High</span></td>
                                            <td><span class="text-success fs-15">Completed </span></td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="fe fe-mail  text-primary"></i></a>
                                                <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fe fe-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="table_img rounded-circle bg-light me-3">
                                                        <span class="fe fe-globe text-primary ms-1"></span>
                                                    </div>
                                                    <div class="me-3 mt-0 mt-sm-3 d-block">
                                                        <h5 class="mb-0 fs-16 mt-1 fw-semibold">Website Redesign</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning w-75"></div>
                                                </div>
                                            </td>
                                            <td><span class="text-warning fs-15">75%</span></td>
                                            <td><span class="text-muted">Low</span></td>
                                            <td><span class="text-primary fs-15">On Progress </span></td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="fe fe-mail  text-primary"></i></a>
                                                <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fe fe-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="table_img rounded-circle bg-light me-3">
                                                        <img src="../assets/images/media/png/19.png" alt="img" class="">
                                                    </div>
                                                    <div class="me-3 mt-0 mt-sm-3 d-block">
                                                        <h5 class="mb-0 fs-16 mt-1 fw-semibold">Angular Development <span class="badge bg-orange-light ms-1">Urgent</span></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success w-95"></div>
                                                </div>
                                            </td>
                                            <td><span class="text-success fs-15">95%</span></td>
                                            <td><span class="text-muted">Medium</span></td>
                                            <td><span class="text-success fs-15">Completed</span></td>
                                            <td class="text-start">
                                                <div class="d-flex">
                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="fe fe-mail  text-primary"></i></a>
                                                <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fe fe-trash-2 text-danger"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-md-12 col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">Calendar</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group calendar">
                                <input type="text" class="form-control" id="calendar" placeholder="Choose date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row-->

            </div>
        </div>
        <!-- End::app-content -->


    <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Chartjs Chart JS -->
    <script src="../assets/libs/chart.js/chart.min.js"></script>

    <!-- Date & Time Picker JS -->
    <script src="../assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Default date picker js-->
    <script src="../assets/js/default-flat-datepicker.js"></script> 

    <!-- Index2 js-->
    <script src="../assets/js/index5.js"></script>

    <!-- Notifications JS -->
    <script src="../assets/libs/awesome-notifications/index.var.js"></script>

    <!-- Successful-notify JS -->
    <script src="../assets/js/successful-notify.js"></script>

    
    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
@endsection
