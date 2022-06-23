<div class="modal fade" id="kt_modal_order_status{{$row->id}}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" method="post" action="{{route('admin.order.update.status',$row->id)}}"
                id="kt_modal_new_address_form">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2>Update Order Status</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_new_address_header"
                        data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <input type="hidden" class="form-control form-control-solid" name="order_id"
                            value="{{$row->id}}" />
                        <input type="text" class="form-control form-control-solid" value="{{$row->order_id}}"
                            readonly />
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                <span class="required">Update Status</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Your payment statements may very based on selected country"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-kt-ecommerce-order-filter="status" name="status" required>
                                <option></option>
                                


                                <option value="New"  @if($row->status== 'New') selected="" @endif>1.New</option>
                                <option value="Processing"  @if($row->status== 'Processing') selected="" @endif>2.Processing</option>
                                <option value="Packaging"  @if($row->status== 'Packaging') selected="" @endif>3.Packaging</option>
                                <option value="Waiting For Delivery"  @if($row->status== 'Waiting For Delivery') selected="" @endif>4.Waiting For Delivery</option>

                                <option value="Shipping"  @if($row->status== 'Shipping') selected="" @endif>5.Shipping</option>

                                <option value="Delivered"  @if($row->status== 'Delivered') selected="" @endif>6.Delivered</option>
                                <option value="Completed"  @if($row->status== 'Completed') selected="" @endif>7.Completed</option>

                                 <option value="Cancelled"  @if($row->status== 'Cancelled') selected="" @endif>8.Cancelled</option>

                                
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">

                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Order Date</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="order_date" value="{{$row->created_at}}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-bold mb-2">Last Updated Date</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" 
                                    name="" value="{{ $row->delivery_date->format('d/m/Y')}}" />
                                <!--end::Input-->
                            </div>

                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-bold mb-2">Update Delivery Date</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="date" class="form-control form-control-solid"
                                    name="delivery_date" value="{{ $row->delivery_date->format('d/m/Y')}}" required/>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-bold mb-2">Comment</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ $row->comment }}" name="comment" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->


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