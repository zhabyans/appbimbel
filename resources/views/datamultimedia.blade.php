@extends('layouts.mentor')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-content">
		<div class="row">
			<div class="col-xl-12">
				<div class="m-portlet m-portlet--accent m-portlet--head-solid-bg m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_1">
					<div class="m-portlet m-portlet--mobile">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<h3 class="m-portlet__head-text">
												Data Multimedia
											</h3>
										</div>
									</div>
									<div class="m-portlet__head-tools">
										<ul class="m-portlet__nav">
											<li class="m-portlet__nav-item">										
											</li>
										</ul>
									</div>
								</div>
								<div class="m-portlet__body">
									<!--begin: Search Form -->
									<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="form-group m-form__group row align-items-center">
													<div class="col-md-4">
														<div class="m-input-icon m-input-icon--left">
															<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
															<span class="m-input-icon__icon m-input-icon__icon--left">
																<span>
																	<i class="la la-search"></i>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 order-1 order-xl-2 m--align-right">
												<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
													<span>
														<i class="la la-cart-plus"></i>
														<span>
															New Order
														</span>
													</span>
												</a>
												<div class="m-separator m-separator--dashed d-xl-none"></div>
											</div>
										</div>
									</div>
									<!--end: Search Form -->
								<!--begin: Datatable -->
									<table class="m-datatable" id="html_table" width="100%">
										<thead>
											<tr>
												<th title="Field #1">
													Tanggal Upload
												</th>
												<th title="Field #1">
													Judul
												</th>												
												<th title="Field #4">
													File
												</th>
												<th title="Field #2">
													Deskripsi
												</th>
												<th title="Field #4">
													Action
												</th>
											</tr>
										</thead>
										<tbody>
										@foreach($multimedia as $m)
										<tr>
											<td>{{$m->created_at}}</td>
											<td>{{$m->judul}}</td>
											<td>{{$m->file}}</td>
											<td>{{$m->diskripsi}}</td>
											<td>										
												<a href="http://localhost/appbimbel/public/datamultimedia/editmultimedia/{{$m->idcontent}}">Edit</a>
												<a href="http://localhost/appbimbel/public/datamultimedia/hapusmultimedia/{{$m->idcontent}}">Hapus</a>
											</td>																					
										</tr>
										@endforeach
										</tbody>
										
									</table>
									<!--end: Datatable -->
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
@endsection