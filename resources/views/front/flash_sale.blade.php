@extends('layout.front.master')

@section('content')
@include('layout.front.detail_header')
<section id="browse" class="main-content-section">

<div class="content-section slider">
        <div class="d-flex category-slider">
            <div class="row" style="width:350% !important">
      

            <div class=" d-none  d-sm-none  d-lg-block col-lg-3 col-md-3 ">



                <div class="sidebar-category ml-0">

                    <div class="card categoryfixed">
                        <div class="card-header w-100">
                    
                                <p class="sidebar-title" style="margin-left:15px font-family: 'Lexend';font-style: normal;font-weight: 400;font-size: 24px;line-height: 30px;color: #FFFFFF;"> <a href="category-list" class="text-white" style="margin-left:15px"> Categories&nbsp;(Flash)</a></p>
                                
                        </div>
                        <div class="menu-bar manures">
                            <ul>
                                @foreach($categories as $cat)
                                <li class="active"><a href="{{url('/flash_sale',$cat->slug)}}">{{$cat->cat_name}}</a>

                                    <div class="sub-menu-1">

                                        <ul>
                                            @foreach($cat['subcategory'] as $subcat)
                                            <li><a href="{{url('/flash_sale',$subcat->slug)}}">{{$subcat->cat_name}}</a></li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12  col-sm-12 col-md-8 col-lg-8 ">
                <div class="main-content">
                    <div class="browse-header">
                        @include('error.message')
                        <?php echo $breadcrumb; ?>
                        <div class="d-flex align-items-center sort-wrapper">
                           
                            <p class="show-count">(Showing {{count($categoryProduct)}} products)</p>
                            <form class="form-horizontal" style="text-align:right" action="" id="sortProducts"
                                name="sortProducts">
                                <div class="sort-product">
                                    <label for="sort-product" class="mr-2" style="color:#fff">Sort By: </label>
                                    <select name="sort" id="sort" class="custom-control custom-select">
                                        <option value="">Any</option>
                                        <option value="product_lowest" @if (isset($_GET['sort']) &&
                                            $_GET['sort']=='product_lowest' ) selected @endif>Price-Low to High
                                        </option>
                                        <option value="price_highest" @if (isset($_GET['sort']) &&
                                            $_GET['sort']=='price_highest' ) selected @endif>Price-High to Low
                                        </option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="product-wrapper">

                        <div class="product-list" id="js--row-list">
                            @foreach($categoryProduct as $row)

                            <div class="card mb-3" style="max-width: 100%;">

                                <div class="row no-gutters">

                                    <div class="col-md-4">
                                        <a href="{{url('/product/details',$row->slug)}}">
                                            <img src="{{asset('public/assets/images/product/'.$row->image)}}"
                                                class="card-img" alt="flash Product">
                                        </a>
                                    </div>

                                    <div class="col-md-4">
                                        <a href="{{url('/product/details',$row->slug)}}">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-weight:700">{{$row->product_name}}</h5>
                                                <p class="card-text">Model No: <span>{{$row->model_no}}</span></p>
                                                <p class="card-text">Supplier: <span>{{$row->supplier}}</span></p>
                                                @if($gs->cart_page_vat==1)
                                                <p class="card-text" style="color:#D20A7D;font-weight:700;font-size:1.25rem"> @php
                                                    $flashSalePrice = $row->price - $row->flash_sale_price;
                                                    $flashSaleparcentise = ($flashSalePrice * 100)/$row->price;

                                                    @endphp



                                                    <del>Tk. {{$row->price}}</del>
                                                    &nbsp;&nbsp; Tk.
                                                    {{$row->flash_sale_price}} &nbsp;&nbsp;<button
                                                        class="btn btn-success"> -{{round($flashSaleparcentise ,2)}}
                                                        %</button>
                                                </p>
                                                @else
                                                @php   $vatPrice= ($row->price*$gs->vat)/ 100 ; @endphp
                                                @php   $vatPriceFlashsall= ($row->flash_sale_price*$gs->vat)/ 100 ; @endphp
                                                <p class="card-text" style="color:#D20A7D;font-weight:700;font-size:1.25rem"> @php
                                                    $flashSalePrice = ($row->price + $vatPrice )- ($row->flash_sale_price + $vatPriceFlashsall);
                                                    $flashSaleparcentise = ($flashSalePrice * 100)/($row->price + $vatPrice);

                                                    @endphp



                                                    <del>Tk. {{$row->price + $vatPrice}}</del>
                                                    &nbsp;&nbsp; Tk.
                                                    {{$row->flash_sale_price + $vatPriceFlashsall}} &nbsp;&nbsp;<button
                                                        class="btn btn-success"> -{{round($flashSaleparcentise ,2)}}
                                                        %</button>
                                                </p>
                                                @endif
                                            </div>



                                        </a>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="btn-list d-grid gap-2 col-12 mx-auto "
                                            style="text-align: center;margin-top: 40%;">
                                            <form name="addtocart" id="addtocart" action="{{route('wishlist.insert')}}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$row->id}}">
                                                <button type="submit" class="btn"><i class="fa fa-heart mr-1"></i>
                                                    Save to List</button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- <div class="card">
                                    <div class="d-flex align-items-center ml-0 mr-0">
                                        <a href="{{url('/product/details',$row->slug)}}" class="ml-0 mr-0">
                                            <img height="100px" width="145px"
                                                src="{{asset('assets/images/product/'.$row->image)}}" alt="product"
                                                class="img-fluid">
                                        </a>
                                        <a href="{{url('/product/details',$row->slug)}}" class="ml-5">
                                            <div class="product-info">
                                                <p class="product-name">{{$row->product_name}} </p>
                                                <p class="model">Model No: <span>{{$row->model_no}}</span></p>
                                                <p class="supply">Supplier: <span>{{$row->supplier}}</span></p>
                                                @php
                                                $flashSalePrice = $row->price - $row->flash_sale_price;
                                                $flashSaleparcentise = ($flashSalePrice * 100)/$row->price;

                                                @endphp


                                                <div class="price d-flex justify-content-between align-items-center">
                                                    <p class="sell-price"><del>Tk. {{$row->price}}</del></p>
                                                    &nbsp;&nbsp;&nbsp;&nbsp; <p class="sell-price">Tk.
                                                        {{$row->flash_sale_price}}</p> &nbsp;&nbsp;&nbsp;&nbsp;<button
                                                        class="btn btn-success"> -{{round($flashSaleparcentise ,0)}}
                                                        %</button>

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
                                                    <input type="text" id="5" class="form-control input-number bg-white"
                                                        value="1" min="1" readonly>
                                                    <span class="input-group-btn" id="js--btn-plus">
                                                        <button type="button" class="btn btn-number">
                                                            <img src="../dist/common/images/plus-icon.png" alt="icon">
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                           
                                            <div class="btn-list">
                                                <form name="addtocart" id="addtocart"
                                                    action="{{route('wishlist.insert')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$row->id}}">
                                                    <button type="submit" class="btn"><i class="fa fa-heart mr-1"></i>
                                                        Save to List</button>
                                            </div>
                                            <div class="btn-list center">
                                                <span class="message5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div id="pagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">

                    {!! $categoryProduct->withQueryString()->links('pagination::bootstrap-5') !!}
                </li>
            </ul>
        </nav>

    </div>

    </div>











    <!-- <div id="pagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">

                    {!! $categoryProduct->withQueryString()->links('pagination::bootstrap-5') !!}
                </li>
            </ul>
        </nav>

    </div> -->
</div>
</div>
</section>

@include('layout.front.footer')

@endsection