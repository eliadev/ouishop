@extends('layouts.cmslayout')
	@section('content')
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="page-title-box">
									<div class="page-title-right">
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
											<li class="breadcrumb-item">Products</li>
										</ol>
									</div>
									<h4 class="page-title">Products</h4>
								</div>
							</div>
						</div>
										
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<form class="form-inline">
													<div class="form-group">
														<label for="inputPassword2" class="sr-only">Search</label>
														<input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
													</div>
												</form>                            
											</div>
											<div class="col-md-6">
												<div class="text-sm-right">
													<a href="{{route('products.create')}}" class="btn btn-blue waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-1.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Adirondack Chair</a> </h5>
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 98 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $39
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-2.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>
                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Biblio Plastic Armchair</a> </h5>
                                               
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 23 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $98
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-3.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Amazing Modern Chair</a> </h5>
                                                
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 235 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $49
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-4.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Designer Awesome Chair</a> </h5>
                                               
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 385 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $29
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">

                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-5.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">The butterfly chair</a> </h5>
                                                
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 25 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $49
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-6.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Dining Chairs</a> </h5>
                                                
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 39 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-7.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Plastic Armchair</a> </h5>
                                                
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 36 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $99
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box product-box">
                                    
                                    <div class="product-action">
                                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                    </div>

                                    <div>
                                        <img src="{{asset('cms/images/products/product-8.jpg')}}" alt="product-pic" class="img-fluid" />
                                    </div>

                                    <div class="product-info">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Wing Chairs</a> </h5>
                                                
                                                <h5 class="m-0"> <span class="text-muted"> Stocks : 128 pcs</span></h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="product-price-tag">
                                                    $29
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				<footer class="footer">
				   <div class="container-fluid">
					  <div class="row">
						 <div class="col-md-12">
						   © Copyright 2020. All Rights Reserved
						 </div>
					  </div>
				   </div>
				</footer>
			</div>
		</div>
		<script src="{{asset('cms/js/vendor.min.js')}}"></script>
		<script src="{{asset('cms/js/app.min.js')}}"></script>
   </body>
</html>						
@endsection