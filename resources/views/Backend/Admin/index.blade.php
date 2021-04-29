@include('Backend.Admin.navbar')
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
                                    <a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Product</a>
                                  </div>
                                  {{-- adding product modal --}}
                                  <div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form id="add-product-form" enctype="multipart/form-data">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Product Name</label>
                                                          <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Brand Name</label>
                                                          <select class="form-control brand_list" name="brand_id">
                                                              <option value="">Select Brand</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Category Name</label>
                                                          <select class="form-control category_list" name="category_id">
                                                              <option value="">Select Category</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Product Description</label>
                                                          <textarea class="form-control" name="product_desc" placeholder="Enter product desc"></textarea>
                                                      </div>
                                                  </div>
                                              <div class="col-12">
                                                <div class="form-group">
                                                  <label>Product Qty</label>
                                                  <input type="number" name="product_qty" class="form-control" placeholder="Enter Product Quantity">
                                                </div>
                                              </div>
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Product Price</label>
                                                          <input type="number" name="product_price" class="form-control" placeholder="Enter Product Price">
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
                                                          <input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="form-group">
                                                          <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                                          <input type="file" name="product_image" class="form-control">
                                                      </div>
                                                  </div>
                                                  <input type="hidden" name="add_product" value="1">
                                                  <div class="col-12">
                                                      <button type="button" class="btn btn-primary add-product">Add Product</button>
                                                  </div>
                                              </div>

                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Add Product Modal end -->
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
                                                <span class="badge badge-secondary"> UnAvailable </span>
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm rounded-0 "data-toggle="modal" data-target="#add_product_modal" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Edit Product Modal start -->
                            <div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <form id="edit-product-form" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="e_product_name" class="form-control" placeholder="Enter Product Name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Brand Name</label>
                                            <select class="form-control brand_list" name="e_brand_id">
                                                <option value="">Select Brand</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Category Name</label>
                                            <select class="form-control category_list" name="e_category_id">
                                                <option value="">Select Category</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea class="form-control" name="e_product_desc" placeholder="Enter product desc"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Product Qty</label>
                                            <input type="number" name="e_product_qty" class="form-control" placeholder="Enter Product Quantity">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Product Price</label>
                                            <input type="number" name="e_product_price" class="form-control" placeholder="Enter Product Price">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
                                            <input type="text" name="e_product_keywords" class="form-control" placeholder="Enter Product Keywords">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                            <input type="file" name="e_product_image" class="form-control">
                                            <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
                                            </div>
                                        </div>
                                        <input type="hidden" name="pid">
                                        <input type="hidden" name="edit_product" value="1">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary submit-edit-product">Add Product</button>
                                        </div>
                                        </div>

                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- Edit Product Modal end -->
                        </div>
                    </div>

        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
