@extends('layouts.app')

@section('title')
    View Order | {{$settings['website_name']}}
@endsection

@section('bodyClass','kl-store kl-store-page single-product')

@section('content')

    <!-- Page sub-header + Bottom mask style 3 -->
    <div id="page_header" class="page-subheader zn_def_header_style maskcontainer--mask3">
        <div class="bgback">
        </div>

        <!-- Background -->
        <div class="kl-bg-source">
            <!-- Gradient overlay -->
            <div class="kl-bg-source__overlay"
                 style="background:rgba(0,94,176,1); background: -moz-linear-gradient(left, rgba(0,94,176,1) 0%, rgba(0,202,255,1) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,94,176,1)), color-stop(100%,rgba(0,202,255,1))); background: -webkit-linear-gradient(left, rgba(0,94,176,1) 0%,rgba(0,202,255,1) 100%); background: -o-linear-gradient(left, rgba(0,94,176,1) 0%,rgba(0,202,255,1) 100%); background: -ms-linear-gradient(left, rgba(0,94,176,1) 0%,rgba(0,202,255,1) 100%); background: linear-gradient(to right, rgba(0,94,176,1) 0%,rgba(0,202,255,1) 100%);">
            </div>
            <!--/ Gradient overlay -->
        </div>
        <!--/ Background -->

        <!-- Animated Sparkles -->
        <div class="th-sparkles"></div>
        <!--/ Animated Sparkles -->

        <!-- Sub-Header content wrapper -->
        <div class="ph-content-wrap">
            <div class="ph-content-v-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top: 100px">
                            <!-- Breadcrumbs -->
                            <ul class="breadcrumbs fixclear">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{route('user.account')}}">MY ACCOUNT</a></li>
                                <li><a href="{{route('user.orders')}}">All ORDERS</a></li>
                                <li>VIEW ORDER</li>
                            </ul>
                            <!--/ Breadcrumbs -->
                            <div class="clearfix"></div>
                        </div>
                        <!--/ col-sm-6 -->

                        <div class="col-sm-6" style="padding-top: 100px">
                            <!-- Sub-header titles -->
                            <div class="subheader-titles">
                                <h2 class="subheader-maintitle">USER ACCOUNT</h2>
                                <h4 class="subheader-subtitle">VIEW ORDER</h4>
                            </div>
                            <!--/ Sub-header titles -->
                        </div>
                        <!--/ col-sm-6 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ container -->
            </div>
            <!--/ .ph-content-v-center -->
        </div>
        <!--/ Sub-Header content wrapper -->

        <!-- Sub-header Bottom mask style 3 -->
        <div class="kl-bottommask kl-bottommask--mask3">
            <svg width="5000px" height="57px" class="svgmask " viewBox="0 0 5000 57" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox"
                            id="filter-mask3">
                        <feOffset dx="0" dy="3" in="SourceAlpha" result="shadowOffsetInner1"></feOffset>
                        <feGaussianBlur stdDeviation="2" in="shadowOffsetInner1"
                                        result="shadowBlurInner1"></feGaussianBlur>
                        <feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1"
                                     result="shadowInnerInner1"></feComposite>
                        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.4 0" in="shadowInnerInner1"
                                       type="matrix" result="shadowMatrixInner1"></feColorMatrix>
                        <feMerge>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                            <feMergeNode in="shadowMatrixInner1"></feMergeNode>
                        </feMerge>
                    </filter>
                </defs>
                <path d="M9.09383679e-13,57.0005249 L9.09383679e-13,34.0075249 L2418,34.0075249 L2434,34.0075249 C2434,34.0075249 2441.89,33.2585249 2448,31.0245249 C2454.11,28.7905249 2479,11.0005249 2479,11.0005249 L2492,2.00052487 C2492,2.00052487 2495.121,-0.0374751261 2500,0.000524873861 C2505.267,-0.0294751261 2508,2.00052487 2508,2.00052487 L2521,11.0005249 C2521,11.0005249 2545.89,28.7905249 2552,31.0245249 C2558.11,33.2585249 2566,34.0075249 2566,34.0075249 L2582,34.0075249 L5000,34.0075249 L5000,57.0005249 L2500,57.0005249 L1148,57.0005249 L9.09383679e-13,57.0005249 Z"
                      class="bmask-bgfill" filter="url(#filter-mask3)" fill="#f5f5f5"></path>
            </svg>
            <i class="glyphicon glyphicon-chevron-down"></i>
        </div>
        <!--/ Sub-header Bottom mask style 3 -->
    </div>
    <!--/ Page sub-header + Bottom mask style 3 -->

    <!-- Content section with custom top padding -->
    <section id="content" class="hg_section ptop-60">
        <div class="container">
            <div class="row">
                <!-- Title element with bottom line left aligned -->
                <div class="kl-title-block clearfix text-left tbk-symbol--line tbk-icon-pos--after-title">
                    <!-- Title with montserrat font and custom size, black and semibold style -->
                    <h3 style="font-size: 2em" class="tbk__title montserrat fs-34 fw-semibold black">View Order</h3>
                    <!--/ Title with montserrat font and custom size, black and semibold style -->
                    <!-- Title bottom symbol -->
                    <div class="tbk__symbol ">
                        <span></span>
                    </div>
                    <!--/ Title bottom symbol -->
                </div>
                <!--/ Title element with bottom line left aligned -->

                <div class="account_container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    {{-- Delivery Info --}}

                                    <div class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--border tbk-icon-pos--after-title"
                                         style="padding: 35px 0 15px;">
                                        <!-- Title -->
                                        <h3 class="tbk__title " style="color: #0060B2">Delivery Info</h3>
                                        <!--/ Title -->

                                        <!-- Title bottom symbol -->
                                        <div class="tbk__symbol " style="width: 160px">
                                            <span style="background-color: #0060B2"></span>
                                        </div>
                                        <!--/ Title bottom symbol -->
                                    </div>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th>First Name:</th>
                                            <td>{{$order->first_name}}</td>
                                            <th>Last Name:</th>
                                            <td>{{$order->last_name}}</td>
                                            <th>Email:</th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Address:</th>
                                            <td>{{$order->address}}</td>
                                            <th>Country:</th>
                                            <td>{{$order->country}}</td>
                                            <th>City:</th>
                                            <td>{{$order->city}}</td>
                                        </tr>
                                        <tr>
                                            <th>Postal:</th>
                                            <td>{{$order->postal}}</td>
                                            <th>Status:</th>
                                            <td>
                                                @if($order->status == 'Waiting')
                                                    <span class="label label-warning">{{$order->status}}</span>
                                                @elseif($order->status == 'Shipped')
                                                    <span class="label label-primary">{{$order->status}}</span>
                                                @else
                                                    <span class="label label-success">{{$order->status}}</span>
                                                @endif
                                            </td>
                                            <th>Notes:</th>
                                            <td>{{$order->notes}}</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                    {{--/ Delivery Info --}}

                                    {{-- Order Products Info --}}
                                    <div class="kl-title-block clearfix tbk--text-default tbk--left text-left tbk-symbol--border tbk-icon-pos--after-title"
                                         style="padding: 35px 0 15px;">
                                        <!-- Title -->
                                        <h3 class="tbk__title" style="color: #0060B2">Order Products Info</h3>
                                        <!--/ Title -->

                                        <!-- Title bottom symbol -->
                                        <div class="tbk__symbol " style="width: 240px">
                                            <span style="background-color: #0060B2"></span>
                                        </div>
                                        <!--/ Title bottom symbol -->
                                    </div>
                                    <table class="table table-responsive table-hover table-striped" id="order_products">
                                        <thead>
                                        <tr>
                                            <th>#Product</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price/piece</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order->products as $product)
                                            <tr class="text-center">
                                                <td>
                                                    {{$key++}}
                                                </td>
                                                <td><img src="{{asset('/storage/products/').'/'.$product['featured_image']}}" alt="product image" height="50px" width="50px"></td>
                                                <td>
                                                    {{$product->name}}
                                                </td>
                                                <td>{{$product->pivot->quantity}}</td>
                                                <td>@asDollars($product->new_price)</td>
                                                <td>@asDollars($product->new_price * $product->pivot->quantity)</td>
                                                <td>
                                                    <a type="button" href="/shop/product/{{$product->slug}}"
                                                       class="btn btn-sm btn-default">Product Shop</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th style="text-align:right;" colspan="6">Total :</th>
                                            <td>@asDollars($order->total_price)</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    {{--/ Order Products Info --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>
    <!--/ Content section with custom top padding -->
@endsection