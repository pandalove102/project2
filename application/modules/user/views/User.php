<div kb-inject="UserController">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
            <?php if (isset($title)): ?>
                <span class="text-uppercase page-subtitle"><?php echo $title ?></span>
            <?php endif; ?>
            <?php if (isset($heading)): ?>
                <h3 class="page-title"><?php echo $heading ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- <div class="demoUserView" data-bind="with: userView">
        <p>Name: <span data-bind="text: username"></span></p>
        <p>Type: <span data-bind="text: type"></span></p>
        <p>Fullname: <span data-bind="text: fullname"></span></p>
    </div> -->

    <!-- List user -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class ="card" id="users">
                <div class="container">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Search User</h6>
                        <div class="row">
                            <div class="col-md-8 p-3" style="display: flex;" data-bind="with: userView">
                                <input class="search form-control" placeholder="Search" data-bind="value: q"/>
                                <button type="button" class="btn btn-success ml-1" data-bind="event: {click : doSearchUsers}"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-small list-group-flush" >
                            <!-- ko foreach : users() -->
                            <li class="list-group-item d-flex ">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="https://static-img.hahalolo.com/5b6c12a8ca2a28090ee19519/015384699345bb3302ed9e15_600x600_thumbnail.png" width="100" alt="Scott Stevens" class="rounded-circle">
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Tên : <span class="text-muted" data-bind="text: full_name()">Trần Thanh phương</span><br></span>
                                    <span class="visible-xs"> Giới tính : <span class="text-muted" data-bind="text: gender()">Nam</span><br></span>
                                    <span class="visible-xs"> Mail : <span class="text-muted" data-bind="text: email()">Thanhphuong@gmail.com</span><br></span>
                                    <span class="visible-xs"> Tuổi : <span class="text-muted" data-bind="text: age()"></span><br></span>
                                    <div class="btn-group btn-group-sm mt-1">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success"><i class="material-icons">block</i></span> Block </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-light"><i class="material-icons">remove_circle_outline</i></span> Unblock </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <!-- /ko -->
                            <!-- <li class="list-group-item d-flex ">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="https://static-img.hahalolo.com/5b6c12a8ca2a28090ee19519/015384699345bb3302ed9e15_600x600_thumbnail.png" width="100" alt="Scott Stevens" class="rounded-circle">
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Tên : <span class="text-muted">Trần Thanh phương</span><br></span>
                                    <span class="visible-xs"> Giới tính : <span class="text-muted">Nam</span><br></span>
                                    <span class="visible-xs"> Mail : <span class="text-muted">Thanhphuong@gmail.com</span><br></span>
                                    <div class="btn-group btn-group-sm mt-1">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success"><i class="material-icons">block</i></span> Block </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-light"><i class="material-icons">remove_circle_outline</i></span> Unblock </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item d-flex ">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="https://static-img.hahalolo.com/5b6c12a8ca2a28090ee19519/015384699345bb3302ed9e15_600x600_thumbnail.png" width="100" alt="Scott Stevens" class="rounded-circle">
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Tên : <span class="text-muted">Trần Thanh phương</span><br></span>
                                    <span class="visible-xs"> Giới tính : <span class="text-muted">Nam</span><br></span>
                                    <span class="visible-xs"> Mail : <span class="text-muted">Thanhphuong@gmail.com</span><br></span>
                                    <div class="btn-group btn-group-sm mt-1">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success"><i class="material-icons">block</i></span> Block </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-light"><i class="material-icons">remove_circle_outline</i></span> Unblock </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item d-flex ">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="https://static-img.hahalolo.com/5b6c12a8ca2a28090ee19519/015384699345bb3302ed9e15_600x600_thumbnail.png" width="100" alt="Scott Stevens" class="rounded-circle">
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Tên : <span class="text-muted">Trần Thanh phương</span><br></span>
                                    <span class="visible-xs"> Giới tính : <span class="text-muted">Nam</span><br></span>
                                    <span class="visible-xs"> Mail : <span class="text-muted">Thanhphuong@gmail.com</span><br></span>
                                    <div class="btn-group btn-group-sm mt-1">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success"><i class="material-icons">block</i></span> Block </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-light"><i class="material-icons">remove_circle_outline</i></span> Unblock </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item d-flex px-3"></li> -->
                        </ul>
                    </div>
                    <!-- Pagging -->
                    <div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                    </div>
                    <!-- //Pagging -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- //List user -->
</div>