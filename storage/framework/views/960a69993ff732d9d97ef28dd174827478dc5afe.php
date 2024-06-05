   
<?php $__env->startSection('content'); ?> 

<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container-fluid">
								<!--begin::Card-->
                                <div class="modal fade" id="addPayment" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="addPayment" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<div class="form-group">
														<label>Payment Amount</label>
														<input type="subject" class="form-control form-control-solid" placeholder="0.00" />
													</div>

													<div class="form-group">
														<label>Mode of Payment</label>
														<select class="form-control form-control-solid">
															<option>Cash</option>
															<option>Cheque</option>
															<option>Bank</option>
														</select>
													</div>
													
												</div>
												<div class="card-footer">
													<button type="reset" class="btn btn-primary mr-2">Submit</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</form>    
                                </div>
                                   
                                </div>
                            </div>
                        </div>
								<div class="card card-custom gutter-b">
									<div class="card-body">
										<!--begin::Details-->
										<div class="d-flex mb-9">
											<!--begin: Pic-->
											<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
												<div class="symbol symbol-50 symbol-lg-120">
													<img src="assets/media/users/300_1.jpg" alt="image" />
												</div>
												<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
													<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between flex-wrap mt-1">
													<div class="d-flex mr-3">
														<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">Jason Muller</a>
														<a href="#">
															<i class="flaticon2-correct text-success font-size-h5"></i>
														</a>
													</div>
													<div class="my-lg-0 my-3">
														<a href="" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3" data-toggle="modal" data-target="#addPayment">Pay here</a>

													</div>
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div class="d-flex flex-wrap justify-content-between mt-1">
													<div class="d-flex flex-column flex-grow-1 pr-8">
														<div class="d-flex flex-wrap mb-4">
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<i class="flaticon2-new-email mr-2 font-size-lg"></i>jason@gmail.com</a>
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>1245 Billing Address</a>
															<a href="#" class="text-dark-50 text-hover-primary font-weight-bold">
															<i class="flaticon2-placeholder mr-2 font-size-lg"></i>12234567 Account No.</a>
														</div>
													</div>
												</div>
												<!--end::Content-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<div class="separator separator-solid"></div>
										<!--begin::Items-->
										<div class="d-flex align-items-center flex-wrap mt-8">
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-piggy-bank display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Total Amount Due</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">$</span>249,500</span>
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-confetti display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">SOA as of</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold"></span>13 Apr 2024</span>
												</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 mb-2">
												<span class="mr-4">
													<i class="flaticon-pie-chart display-4 text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Due Date</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold"></span>Apr 30, 2024</span>
												</div>
											</div>
											<!--end::Item-->
										</div>
										<!--begin::Items-->
									</div>
								</div>
								<!--end::Card-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-12">
										<!--begin::Advance Table Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Payment History</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
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
														
														
													</div>
												</div>
												
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
											<thead>
												<tr>
													<th title="Field #1">Payment Id</th>
													<th title="Field #2">Payment Date</th>
													<th title="Field #2">Amount Paid</th>
													<th title="Field #3">Mode of Payment</th>
													<th title="Field #4">Reference No</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>0001</td>
													<td>Dec 03, 2023</td>
													<td>$121545</td>
													<td>Cash</td>
													<td>1234445</td>
													
												</tr>
                                                <tr>
													<td>0002</td>
													<td>Jan 03, 2024</td>
													<td>$21455</td>
													<td>Cheque</td>
													<td>12154</td>
												</tr>
                                                <tr>
													<td>0003</td>
													<td>Feb 03, 2024</td>
													<td>$84544</td>
													<td>Bank</td>
													<td>444574</td>
												</tr>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 2-->
									</div>
									
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EyelixTicketingSys\resources\views/pages/accountA.blade.php ENDPATH**/ ?>