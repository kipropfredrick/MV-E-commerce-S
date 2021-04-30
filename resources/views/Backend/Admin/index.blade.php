@include('Backend.Admin.navbar')
@include('Backend.Admin.datatables')
        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
        <div class="row">
          <div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
			Generate Report
        </a> --}}
          </div>
		  </div>
<div class="col-md-12">
       <div class="row">
									<div class="col-sm-3">
										<div class="card" style="background-color: #e9383888; ">
											<div class="card-body">
												<h6 class="card-title mb-4"><i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i> <b>Shops</b> </h6>
												<h1 class="display-5 mt-1 mb-3">{{$shops}}</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>

									</div>
                                    <div class="col-sm-3">
										<div class="card" style="background-color: #e9383888; ">
											<div class="card-body">
												<h6 class="card-title mb-4"><i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i> <b>Daily Products</b> </h6>
												<h1 class="display-5 mt-1 mb-3">{{$dproducts}}</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>

									</div>
                                    <div class="col-sm-3">
										<div class="card" style="background-color: #e9383888; ">
											<div class="card-body">
												<h6 class="card-title mb-4"><i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i> <b>Daily Orders</b> </h6>
												<h1 class="display-5 mt-1 mb-3">{{$ordersPerDay}}</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i></span>
													<span class="text-muted"></span>
												</div>
											</div>
										</div>

									</div>



								</div>
</div>

                    <!-- column -->

                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">My Store</h4>
                                    </div>
                                </div>


                            </div>
                            <div class="table-responsive">
                                <table id="tablei" class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
                                            <th class="border-top-0">O-Price</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Status</th>
                                            {{-- <th class="border-top-0">Edit</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allproducts as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">{{$item->name}}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="/images/{{$item->image_path}}"width="30px" height="30px" alt=""></td>
                                            <td>500</td>
                                            <td>
                                                <label class="label label-danger">{{$item->price}}</label>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm active" tabindex="-1" role="button" aria-disabled="true">Active</a>
                                            </td>
                                            {{-- <td>
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
        $(document).ready(function() {
        $('#tablei').DataTable();
        } );
    </script>
