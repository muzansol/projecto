
@extends('layouts.layout')

@section('title', 'Listagem das Contas')

@section('content')


<div class="app-content main-content">
    <div class="side-app main-container">

        <!--Page header-->
        <div class="page-header d-lg-flex d-block">
            <div class="page-leftheader">
                <div class="page-title">Perfil</div>
            </div>
            <div class="page-rightheader ms-md-auto">
                <div class=" btn-list">
                    <button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
        <!--End Page header-->

        <!-- Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card overflow-hidden user-pro-list2">
                    <div class="card-body">
                        <div class="profile-cover__action">
                            <div class="user-pic">
                                <span class="avatar brround" style="background-image: url(../assets/images/users/16.jpg)">
                                    <span class="avatar-status bg-green"></span>
                                </span>
                            </div>
                            <div class="btn-list user-pic-right">
                                <a href="{{route('profile.edit')}}" class="btn btn-primary mt-3">Edit Profile</a>
                                <a  href="javascript:void(0);" class="btn btn-success mt-3">Follow</a>
                            </div>
                        </div>
                        <div class="pro-user pt-4 pb-4 ps-3 pr-3 d-md-flex">
                            <div class="mt-5">
                                <h5 class="pro-user-username text-dark mb-1 fs-16">{{$user->name}}</h5>
                                <h6 class="pro-user-desc text-muted fs-12">{{$user->email}}</h6>
                                <div>
                                    <span class="badge badge-primary-light badge-md badge-pill">Superadmin</span>
                                    <span class="badge badge-primary-light badge-md badge-pill">Desenvolvedor Fullstack</span>
                                </div>
                                <div class="mt-2 clearfix">
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star-half-o text-warning"></span>
                                    <span class="fa fa-star-o text-warning"></span>
                                </div>
                            </div>
                            <div class="ms-auto">
                                <div class="social social-profile-buttons mt-4">
                                    <ul class="mb-0">
                                        <li>
                                            <a class="social-icon text-primary" href=""><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-primary" href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-primary" href=""><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-primary" href=""><i class="fa fa-rss"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-primary" href=""><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a class="social-icon text-primary" href=""><i class="fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card border p-0 shadow-none">
                                    <div class="card-header">
                                        <div class="card-title">Education</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="main-profile-contact-list">
                                            <div class="media me-5 mt-0">
                                                <div class="media-icon bg-success text-white me-4">
                                                    <i class="fa fa-whatsapp"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="font-weight-semibold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
                                                    <span>2018 - present</span>
                                                    <p>Past Work: Spruko, Inc.</p>
                                                </div>
                                            </div>
                                            <div class="media me-5">
                                                <div class="media-icon bg-danger text-white me-4">
                                                    <i class="fa fa-briefcase"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="font-weight-semibold mb-1">Studied at <a href=""  class="btn-link">University</a></h6>
                                                    <span>2004-2008</span>
                                                    <p>Graduation: Bachelor of Science in Computer Science</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border p-0 shadow-none">
                                    <div class="card-header">
                                        <div class="card-title">Contact</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="main-profile-contact-list">
                                            <div class="media me-4 mt-0">
                                                <div class="media-icon bg-primary text-white me-3 mt-1">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">Mobile</small>
                                                    <div class="font-weight-semibold">
                                                        +245 354 654
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media me-4">
                                                <div class="media-icon bg-warning text-white me-3 mt-1">
                                                    <i class="fa fa-slack"></i>
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">Stack</small>
                                                    <div class="font-weight-semibold">
                                                        @spruko.com
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-icon bg-info text-white me-3 mt-1">
                                                    <i class="fa fa-map"></i>
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">Current Address</small>
                                                    <div class="font-weight-semibold">
                                                        San Francisco, USA
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <form class="profile-edit mb-5">
                                    <textarea class="form-control" placeholder="What are you doing right now?" rows="5"></textarea>
                                    <div class="profile-share border-top-0">
                                        <div class="mt-2">
                                            <a  href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Audio"><span class="feather feather-mic fs-16 text-muted"></span></a>
                                            <a  href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Video"><span class="feather feather-video fs-16 text-muted"></span></a>
                                            <a  href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-bs-placement="top" data-original-title="Picture"><span class="feather feather-image fs-16 text-muted"></span></a>
                                        </div>
                                        <button  class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i> Share</button>
                                    </div>
                                </form>
                                <div class="card border p-0 shadow-none">
                                    <div class="card-header">
                                        <div class="card-title">Time Line</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="media mt-0">
                                                <div class="media-user me-2">
                                                    <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="../assets/images/users/16.jpg"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown show">
                                                    <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                        <span class="feather feather-more-vertical"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"  href="javascript:void(0);">Edit Post</a>
                                                        <a class="dropdown-item"  href="javascript:void(0);">Delete Post</a>
                                                        <a class="dropdown-item"  href="javascript:void(0);">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top-0">
                                        <div class="media mt-0">
                                            <div class="media-user me-2">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                    <span class="avatar brround">+28</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex mt-1">
                                                    <a class="new me-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-heart"></span></a>
                                                    <a class="new me-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-message-square"></span></a>
                                                    <a class="new text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-share-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="d-flex">
                                            <div class="media mt-0">
                                                <div class="media-user me-2">
                                                    <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="../assets/images/users/16.jpg"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                    <small class="text-muted">Sep 26 2019, 10:14am</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown show">
                                                    <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                        <span class="feather feather-more-vertical"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"  href="javascript:void(0);">Edit Post</a>
                                                        <a class="dropdown-item"  href="javascript:void(0);">Delete Post</a>
                                                        <a class="dropdown-item"  href="javascript:void(0);">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <div class="d-flex">
                                                <img src="../assets/images/photos/2.jpg" alt="img" class="w-40 m-1">
                                                <img src="../assets/images/photos/3.jpg" alt="img" class="w-40 m-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top-0">
                                        <div class="media mt-0">
                                            <div class="media-user me-2">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                    <span class="avatar brround">+28</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex mt-1">
                                                    <a class="new me-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-heart"></span></a>
                                                    <a class="new me-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-message-square"></span></a>
                                                    <a class="new text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-share-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="d-flex">
                                            <div class="media mt-0">
                                                <div class="media-user me-2">
                                                    <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="../assets/images/users/16.jpg"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                    <small class="text-muted">Sep 24 2019, 09:14am</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="dropdown show">
                                                    <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                        <span class="feather feather-more-vertical"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"  href="javascript:void(0);">Edit Post</a>
                                                        <a class="dropdown-item"  href="javascript:void(0);">Delete Post</a>
                                                        <a class="dropdown-item"  href="javascript:void(0);">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <div class="d-flex">
                                                <img src="../assets/images/photos/4.jpg" alt="img" class="w-30 m-1">
                                                <img src="../assets/images/photos/5.jpg" alt="img" class="w-30 m-1">
                                                <img src="../assets/images/photos/6.jpg" alt="img" class="w-30 m-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="media mt-0">
                                            <div class="media-user me-2">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                    <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                    <span class="avatar brround">+28</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="d-flex mt-1">
                                                    <a class="new me-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-heart"></span></a>
                                                    <a class="new me-2 text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-message-square"></span></a>
                                                    <a class="new text-muted fs-18" href="JavaScript:void(0);"><span class="feather feather-share-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-->

    </div>
</div><!-- end app-content-->





@endsection


