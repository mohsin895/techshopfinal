<div class="modal fade" id="kt_modal_database" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="{{route('admin.setting.emptyDatabase')}}" method="get" id="kt_modal_new_address_form">
@csrf						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Empty Databse</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Notice-->
								<!--begin::Notice-->
							
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->
                              
                                
                            

                                <div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span class="required">Enter Password</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country"></i>
									</label>
                                    @php 
                                      $userAdmin = App\Models\User::where('id',2)->first();
                                    @endphp
									<!--end::Label-->
									<!--begin::Select-->
									<input type="password" name="password"  class="form-control answer-text" />
                                    <input type="hidden" name="email" value="{{$userAdmin->email}}"  class="form-control answer-text" />
									<!--end::Select-->
								</div>
                                
							
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-5 fw-bold mb-2">
										<span class="required">Message</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country"></i>
									</label>
									<!--end::Label-->
									<!--begin::Select-->
									<h3 style="border:2px solid red">  All the data will be remove from this project(except user and general setting data), if you click the submit button after putting the admin password.</h3>
									<!--end::Select-->
								</div>
							
								
								<!--end::Input group-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>
		</div>