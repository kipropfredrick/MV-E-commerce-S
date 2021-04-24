@include('Backend.Shops.navbar')
        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
        <div class="row">
          <div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>
			Generate Report</a>
          </div>
		  </div>
<div class="col-md-12">
       <div class="row">
						<div class="col-sm-3">
							<div class="card one" style="background-color: #ffb300">
											<div class="card-body" >
												<h6 class="card-title mb-4">
                                                    <i class="fa fa-users fa-3x" aria-hidden="true"></i> Total Visitors</h6>
												<h1 class="display-5 mt-1 mb-3">2.382</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card" style="background-color: #bfeb4788">
											<div class="card-body" >
												<h6 class="card-title mb-4"><i class="fa fa-user-plus fa-3x" aria-hidden="true"></i> New Signups</h6>
												<h1 class="display-5 mt-1 mb-3">2.382</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card" style="background-color: #2a4fe288">
											<div class="card-body">
												<h6 class="card-title mb-4"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i> Email Enquiries</h6>
												<h1 class="display-5 mt-1 mb-3">2.382</h1>
												<div class="mb-1">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>

									</div>
									<div class="col-sm-3">
										<div class="card" style="background-color: #e9383888; ">
											<div class="card-body">
												<h6 class="card-title mb-4"><i class="fa fa-cart-arrow-down fa-3x" aria-hidden="true"></i> <b>Orders</b> </h6>
												<h1 class="display-5 mt-1 mb-3">4500</h1>
												<div class="mb-1">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Since last week</span>
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
                                        <h5 class="card-subtitle">ALL PRODUCTS</h5>
                                    </div>
                                    {{-- <div class="ml-auto">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected="">Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    {{-- <h1 class="h3 mb-0 text-gray-800"></h1> --}}
                                    <a href="{{route('create.product')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>
                                    Add Product</a>
                                  </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Image</th>
                                            <th class="border-top-0">O-Price</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"># Nike shoes</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="https://slimages.macys.com/is/image/MCY/products/8/optimized/9235488_fpx.tif?op_sharpen=1&wid=500&hei=613&fit=fit,1&$filtersm$" width="30px" height="30px"alt=""></td>
                                            <td>500</td>
                                            <td>
                                                <label class="label label-danger">450</label>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">pending...</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"># sumsung s10</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="https://www.phonesarena.co.ke/wp-content/uploads/2019/07/Samsung-Galaxy-A10.png"width="30px" height="30px" alt=""></td>
                                            <td>500</td>
                                            <td>
                                                <label class="label label-danger">450</label>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm active" tabindex="-1" role="button" aria-disabled="true">Active</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"># Dress for women</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="https://image.dhgate.com/0x0s/f2-albu-g10-M00-B7-B3-rBVaVlxRFY-AX3RUAAWhyhni9cY170.jpg/women-dresses-lace-evening-dress-classic.jpg" width="30px" height="30px" alt=""></td>
                                            <td>500</td>
                                            <td>
                                                <label class="label label-danger">450</label>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm active" tabindex="-1" role="button" aria-disabled="true">pending...</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"># Xiaomi 10t</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="https://smartworldkenya.com/public/uploads/products/photos/Rd4lHyvUJz3IhvCcb2XU5ORjdB31squnKlpYJUy4.jpeg" width="30px" height="30px" alt=""></td>
                                            <td>500</td>
                                            <td>
                                                <label class="label label-danger">450</label>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-sm disabled" tabindex="-1" role="button" aria-disabled="true">inActive</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>


                                        </tr>
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
