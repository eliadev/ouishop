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
										<li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categories</a></li>
										<li class="breadcrumb-item active">Edit Category</li>
									</ol>
								</div>
								<h4 class="page-title">Add / Edit Category</h4>
							</div>
						</div>
					</div>     
					<div class="row">
						<div class="col-12">
							@if(session()->has('message'))
								<div class="alert alert-success">
									{{session()->get('message')}}
								</div>
							@endif
							@if($errors->all())
								<div class="alert alert-danger">
									<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>			
									@endforeach
									</ul>
								</div>
							@endif
							<form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
								@method('put')
								@csrf
								<div class="row">
									<div class="col-xl-8">
										<h4 class="header-title bg-header">Edit Content</h4>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group mb-3">
															<label for="name">Category Name</label>
															<input type="text" id="name" name="name" value="{{ $category->name }}" class="form-control" placeholder="Category Name">
														</div>
														
														<div class="form-group mb-3">
															<label for="description">Description</label>
															<textarea class="form-control" name="description" id="summernote-editor">{!! $category->description !!}</textarea>
														</div>
														
														<div class="form-group mb-3">
															<label for="order">Order</label>
															<input type="text" id="order" name="order" value="{{ $category->order }}" class="form-control" placeholder="Order">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
									<h4 class="header-title bg-header">Action</h4>
										<div class="card">
											<div class="card-body">
												<div class="form-actions">
													<button type="submit" class="btn btn-success btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">UPDATE</button>
													<a href="{{route('categories.create')}}" class="btn btn-secondary btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">ADD NEW</a>
													<a href="{{route('categories.index')}}" class="btn btn-blue btn-rounded w-md waves-effect waves-light mb-5" style="width:100%;">BACK</a>
												</div>
											</div>	  
										</div>
									</div>	    
								</div>
							</form>	
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
		<script src="{{asset('cms/libs/summernote/summernote-bs4.min.js')}}"></script>
		<script src="{{asset('cms/js/pages/form-summernote.init.js')}}"></script>
   </body>
</html>						
@endsection