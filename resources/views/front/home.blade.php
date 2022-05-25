@extends('layout.front.master')

@section('content')
@include('layout.front.header')
<section id="browse" class="main-content-section">
            <div class="content-section">
               <div class="d-flex">
                  
                     <div class="sidebar-category ml-0">
                        <div class="card">
                           <div class="card-header w-100">
                              <p class="sidebar-title text-uppercase"><img src="{{ asset('public/image/frontLogos/category-icon.png') }}" alt="icon"> <a href="category-list" class="text-white">Categories</a></p>
                           </div>
                           <div class="card-body p-0">
                              <ul class="category-list">
                              @foreach($categories as $cat)
                            <li class="category-item js--category-item">
                                <a href="{{url('/',$cat->slug)}}" class="text-capitalize category-name">{{$cat->cat_name}}<i class="fa fa-angle-right text-right"></i></a>

                                <div class="dropdown-menu">
                                    @foreach($cat['subcategory'] as $subcat)
                                    <a href="{{url('/',$subcat->slug)}}" class="d-block">{{$subcat->cat_name}}</a>
                                       
                                        @endforeach
                                </div>

                            </li>
                            @endforeach
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--<div th:replace="fragments/browse-sidebar :: recently-sold"/>
                        <div th:replace="fragments/browse-sidebar :: best-seller"/> -->
                  

            

     <input id="user_track" type="hidden" value="anonymousUser" />
                  <input id="category_track" type="hidden" value="2" />
                  <div class="main-content">
                     <div class="browse-header">
                        <p class="title text-capitalize text-center">Soldering</p>
                        <div class="d-flex align-items-center sort-wrapper">
                           <div class="list-type">
                              <a href="#" id="js--btn-list"><i class="fa fa-th-list"></i></a>
                              <!--                                    <a href="" id="js&#45;&#45;btn-column"><i class="fa fa-th ml-2"></i></a>-->
                           </div>
                           <p class="show-count">(Showing 1 to 26 of 26 products)</p>
                           <div class="sort">
                              <label for="sort" class="mr-2">Sort By: </label>
                              <select id="browse-filter" class="custom-control custom-select">
                                 <option value="" >Any</option>
                                 <option value="PRICE_ASC">Price - Low to High</option>
                                 <option value="PRICE_DESC">Price - High to Low</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="product-wrapper">
                        <div class="product-list" id="js--row-list">
                            @foreach($categoryProduct as $row)
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="{{url('/product/details',$row->slug)}}" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{asset('public/assets/images/product/'.$row->image)}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="{{url('/product/details',$row->slug)}}" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">{{$row->product_name}} </p>
                                       <p class="model">Model No: <span>{{$row->model_no}}</span></p>
                                       <p class="supply">Supplier: <span>{{$row->supplier}}</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. {{$row->price}}</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="5" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="5"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message5"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                         
                        </div>
                     </div>
                  </div>



                  
               </div>
            </div>
            <div id="pagination">
            </div>
         </section>



@endsection