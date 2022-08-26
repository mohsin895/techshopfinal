<div class="modal fade" id="kt_modal_insert_qty{{$row->id}}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" method="post" action="{{route('admin.product.insert.qty',$row->id)}}"
                id="kt_modal_new_address_form">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2>Qunatity Add </h2>
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
                       
                       @php 
                       $qty = App\Models\Qty::where('product_id',$row->id)->get();
                       $Totalqty = App\Models\Qty::where('product_id',$row->id)->count('id');
                      
                       @endphp
                        <!--end::Input group-->
                       
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">

                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Add Qunatity</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                             
                                <input type="number" class="form-control form-control-solid" placeholder="Enter Product Quantity"
                                    name="quantity" />
                                    &nbsp;&nbsp;
                                    <input type="hidden" class="form-control form-control-solid" placeholder="Enter Product Quantity"
                                    name="product_id" value="{{$row->id}}"/>
                                    
                                <!--end::Input-->
                            </div>
                            <div class="col-md-12 fv-row">

                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mb-2">Buying Price(<input type="checkbox" id="price" name="buying_price_check" value="1"> same as before)</label>
                        <!--end::Label-->
                        <!--begin::Input-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Product Buying Price"
                            name="buying_price" />
                            &nbsp;&nbsp;
                            
                        <!--end::Input-->
                        </div>


                        <div class="col-md-12 fv-row">

                        <!--begin::Label-->
                        <label class="fs-5 fw-bold mb-2">Selling Price  (<input type="checkbox" id="price" name="selling_price_check" value="1"> same as before)</label>
                        <!--end::Label-->
                        <!--begin::Input-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Product Selling Price"
                            name="price" />
                            &nbsp;&nbsp;
                            
                        <!--end::Input-->
                        </div>

                            <!--end::Col-->
                            <!--begin::Col-->
                           
                            <!--end::Col-->
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
                        <span class="indicator-label">Add Quantity</span>
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