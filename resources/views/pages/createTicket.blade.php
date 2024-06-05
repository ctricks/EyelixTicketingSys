@extends('index')   
@section('content') 

<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	

				
						<!-- <div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
							<div class="alert-icon"><i class="flaticon-warning"></i></div>
							<div class="alert-text" id="#message"></div>
							<div class="alert-close">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="ki ki-close"></i></span>
								</button>
							</div>
						</div>  -->

						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Create Ticket</h5>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								
							</div>
						</div>

                        

                        <div class="modal fade" id="addTicket" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addTicket" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Ticket</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <!--begin::Form-->
											<form action="{{ route('ticket.store') }}" class="form" method = "POST" >
											@csrf	

												<div class="card-body">
													<div class="form-group">
														
														<label>Subject</label>
														<input type="hidden" name="statusId" id="statusId" class="form-control form-control-solid @error('statusId') is-invalid @enderror" placeholder="1" value = "1"/>
														<input type="text" name="subject" id="subject" class="form-control form-control-solid @error('Subject') is-invalid @enderror" placeholder="Subject" />
														
														@error('subject')
														<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
															<div class="alert-icon"><i class="flaticon-warning"></i></div>
															<div class="alert-text" id="#message">{{ $message }}</div>
															<div class="alert-close">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true"><i class="ki ki-close"></i></span>
																</button>
															</div>
														</div>
														@enderror
													</div>

                                                    <div class="form-group">

														<label for="Description">Description</label>
														<textarea name="description" id="description" class="form-control form-control-solid @error('Description') is-invalid @enderror" rows="3"></textarea>
														
														@error('description')
														<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
															<div class="alert-icon"><i class="flaticon-warning"></i></div>
															<div class="alert-text" id="#message">{{ $message }}</div>
															<div class="alert-close">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true"><i class="ki ki-close"></i></span>
																</button>
															</div>
														</div>
														@enderror
													</div>

													<div class="form-group">

														<label>Category</label>
														<select class="form-control form-control-solid @error('categoryId') is-invalid @enderror" name = "categoryId" id="categoryId">
															<option value='1'>Printing</option>
															<option value='2'>System Error</option>
														</select>

														@error('categoryId')
														<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
															<div class="alert-icon"><i class="flaticon-warning"></i></div>
															<div class="alert-text" id="#message">{{ $message }}</div>
															<div class="alert-close">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true"><i class="ki ki-close"></i></span>
																</button>
															</div>
														</div>
														@enderror
													</div>
                                                    
                                                    <div class="form-group">
														
														<label>Group</label>
														<select class="form-control form-control-solid @error('groupId') is-invalid @enderror" name = "groupId" id="groupId">
															<option value='1'>Billing</option>
															<option value='2'>Support</option>
															<option value='3'>Sales</option>
														</select>
														
														@error('groupId')
														<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
															<div class="alert-icon"><i class="flaticon-warning"></i></div>
															<div class="alert-text" id="#message">{{ $message }}</div>
															<div class="alert-close">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true"><i class="ki ki-close"></i></span>
																</button>
															</div>
														</div>
														@enderror
													</div>
                                                     
                                                    <div class="form-group">
														<label>Request Type</label>
														<select class="form-control form-control-solid @error('requestId') is-invalid @enderror" name = "requestId" id="requestId">
															<option value='1'>Problem</option>
															<option value='2'>Incident</option>
															<option value='3'>Question</option>
															<option value='4'>Request</option>
														</select>

														@error('requestId')
														<div class="alert alert-custom alert-notice alert-light-primary fade show" role="alert">
															<div class="alert-icon"><i class="flaticon-warning"></i></div>
															<div class="alert-text" id="#message">{{ $message }}</div>
															<div class="alert-close">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true"><i class="ki ki-close"></i></span>
																</button>
															</div>
														</div>
														@enderror
													</div>
													
													
												</div>
												<div class="card-footer">
													<button type="submit" class="btn btn-primary mr-2" ng-click>Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</form>    
                                </div>
                                   
                                </div>
                            </div>
                        </div>

						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container-fluid">
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Ticket List</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTicket">Add Ticket</button>

											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mb-7">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">     
													<div class="row align-items-center">
														<div class="col-md-4 my-2 my-md-0">
															<div class="input-icon">
																<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																<span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
															</div>
														</div>
														<div class="col-md-4 my-2 my-md-0">
															<div class="d-flex align-items-center">
																<label class="mr-3 mb-0 d-none d-md-block">Status:</label>
																<select class="form-control" id="kt_datatable_search_status">
																	<option value="">All</option>
																	<option value="1">Pending</option>
																	<option value="2">Delivered</option>
																	<option value="3">Canceled</option>
																	<option value="4">Success</option>
																	<option value="5">Info</option>
																	<option value="6">Danger</option>
																</select>
															</div>
														</div>
														<div class="col-md-4 my-2 my-md-0">
															<div class="d-flex align-items-center">
																<label class="mr-3 mb-0 d-none d-md-block">Type:</label>
																<select class="form-control" id="kt_datatable_search_type">
																	<option value="">All</option>
																	<option value="1">Online</option>
																	<option value="2">Retail</option>
																	<option value="3">Direct</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
													<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
												</div>
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
											<thead>
												<tr>
													<th title="Field #1">Ticket ID</th>
													<th title="Field #2">Subject</th>
													<th title="Field #3">Description</th>
													<th title="Field #4">Category</th>
													<th title="Field #5">Group</th>
													<th title="Field #6">Request Type</th>
													<th title="Field #7">Status</th>
													<th title="Field #7">Actions</th>
													<!-- <th title="Field #8">user 1</th>
													<th title="Field #8">support 1 : 2024/05/13</th>
													<th title="Field #8">support 2 : 2024/05/14</th> -->
												</tr>
											</thead>
											<tbody>
												
												@forelse ($ticket as $ticketList)
											<!-- @foreach($productionMonitoring as $fList) -->
												<tr>
												
													<td>{{ $ticketList->id }}</td>
													<td>{{ $ticketList->subject }}</td>
													<td>{{ $ticketList->description }}</td>
													<td>{{ $ticketList->categoryId }}</td>
													<td>{{ $ticketList->requestId }}</td>
													<td>{{ $ticketList->statusId }}</td>
													<td>
														<form action="" method="POST">
										
															<a class="btn btn-info btn-sm" href=""><i class="nav-icon la la-edit"></i> Show</a>
											
															<a class="btn btn-primary btn-sm" href=""><i class="nav-icon la la-leaf"></i> Edit</a>
										
															@csrf
															
														</form>
													</td>
												</tr>
												@empty
													<tr>
														<td colspan="4">There are no data.</td>
													</tr>
												@endforelse
											</tbody>
										</table>
										

										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
@endsection
