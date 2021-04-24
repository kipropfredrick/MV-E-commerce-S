
@include('Backend.Shops.navbar')

<style>
    /*---------------------------------
main-table
----------------------*/


 .m-r-10 {
    margin-right: 10px;
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962FF;
    border-color: #2962FF;
}

.btn-orange {
    color: #212529;
    background-color: #fb8c00;
    border-color: #fb8c00;
}

.btn-success {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
}
.btn-purple {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}


.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
	  margin-top: -0.375rem;
}


.table td, .table th {
    padding: 1rem;
	font-size:14px;
	color:#333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5{
      font-size: 16px;
	  font-weight:600;
	  color:#585858;
}



/*---------------------------------
main-table
----------------------*/




/*---------------------------------
 footer
----------------------*/

footer.footer {
    padding: 1rem .875rem;
    direction: ltr;
    background: #fff;
}

footer.footer ul {
    margin:0px;
	list-style:none;
}

.footer ul  li{
 display:inline-block;
 margin:0px 7px;
}

.text-muted {
    color: #6c757d!important;
	font-size:14px;
}

</style>

                  <!-- column -->

                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h6>Oders</h6>
                                    </div>

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
                                                <a href="#" class="btn btn-success btn-sm" tabindex="-1" role="button" aria-disabled="true">Active</a>
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
                                                <a href="#" class="btn btn-danger btn-sm" tabindex="-1" role="button" aria-disabled="true">inActive</a>
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
