@extends('layouts.custom')


@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
    @keyframes ldio-lg6mvkuusfs {
      0% {
        top: 96px;
        left: 96px;
        width: 0;
        height: 0;
        opacity: 1;
      }
      100% {
        top: 18px;
        left: 18px;
        width: 156px;
        height: 156px;
        opacity: 0;
      }
    }.ldio-lg6mvkuusfs div {
      position: absolute;
      display: flex;
      border-width: 4px;
      border-style: solid;
      opacity: 1;
      border-radius: 50%;
      animation: ldio-lg6mvkuusfs 1s cubic-bezier(0,0.2,0.8,1) infinite;
    }.ldio-lg6mvkuusfs div:nth-child(1) {
      border-color: #ff915e;
      animation-delay: 0s;
    }
    .ldio-lg6mvkuusfs div:nth-child(2) {
      border-color: #46dff0;
      animation-delay: -0.5s;
    }
    .loadingio-spinner-ripple-epk6u42ktr {
      width: 200px;
      height: 200px;
      display: inline-block;
      overflow: hidden;
      background: #ffffff;
    }
    .ldio-lg6mvkuusfs {
      width: 100%;
      height: 100%;
      position: relative;
      transform: translateZ(0) scale(1);
      backface-visibility: hidden;
      transform-origin: 0 0; /* see note above */
    }
    .ldio-lg6mvkuusfs div { box-sizing: content-box; }
    .display-class{
        display: none;
    }
    </style>
@endsection

@section('link')
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('sidebar')
<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="../backend/index.html" class="header-logo">
            <img src="{!!asset('images/logo.png')!!}" class="img-fluid rounded-normal light-logo" alt="logo"><h5 class="logo-title light-logo ml-3">POSDash</h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="../backend/index.html" class="svg-icon">                        
                        <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class="">
                    <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="ml-4">Products</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('product.index') }}">
                                <i class="las la-minus"></i><span>List Product</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('product.create') }}">
                                <i class="las la-minus"></i><span>Add Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span class="ml-4">Categories</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{route("category.index")}}">
                                <i class="las la-minus"></i><span>List Category</span>
                            </a>
                    </li>
                    <li class="">
                            <a href="{{route("category.create")}}">
                                <i class="las la-minus"></i><span>Add Category</span>
                            </a>
                    </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span class="ml-4">Sale</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="{{route("quotation.view")}}">
                                        <i class="las la-minus"></i><span>List Quotation</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="{{route("quotation.create")}}">
                                        <i class="las la-minus"></i><span>Add Quotaion</span>
                                    </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span class="ml-4">Purchases</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="purchase" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                    <a href="../backend/page-list-purchase.html">
                                        <i class="las la-minus"></i><span>List Purchases</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="../backend/page-add-purchase.html">
                                        <i class="las la-minus"></i><span>Add purchase</span>
                                    </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="4 14 10 14 10 20"></polyline><polyline points="20 10 14 10 14 4"></polyline><line x1="14" y1="10" x2="21" y2="3"></line><line x1="3" y1="21" x2="10" y2="14"></line>
                        </svg>
                        <span class="ml-4">Returns</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="return" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                    <a href="../backend/page-list-returns.html">
                                        <i class="las la-minus"></i><span>List Returns</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="../backend/page-add-return.html">
                                        <i class="las la-minus"></i><span>Add Return</span>
                                    </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="ml-4">People</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="people" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{route('customer.show')}}">
                                <i class="las la-minus"></i><span>Customers</span>
                            </a>
                    </li>
                    <li class="">
                            <a href="{{route('customer.create')}}">
                                <i class="las la-minus"></i><span>Add Customers</span>
                            </a>
                    </li>
                            <li class="">
                                    <a href="../backend/page-list-users.html">
                                        <i class="las la-minus"></i><span>Users</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="../backend/page-add-users.html">
                                        <i class="las la-minus"></i><span>Add Users</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="../backend/page-list-suppliers.html">
                                        <i class="las la-minus"></i><span>Suppliers</span>
                                    </a>
                            </li>
                            <li class="">
                                    <a href="../backend/page-add-supplier.html">
                                        <i class="las la-minus"></i><span>Add Suppliers</span>
                                    </a>
                            </li>
                    </ul>
                </li>
                <li class="">
                    <a href="../backend/page-report.html" class="">
                        <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span class="ml-4">Reports</span>
                    </a>
                    <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
               
            </ul>
        </nav>
        
        <div class="p-3"></div>
    </div>
    </div>      <div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="../backend/index.html" class="header-logo">
                    <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                    <h5 class="logo-title ml-3">POSDash</h5>

                </a>
            </div>
            <div class="iq-search-bar device-search">
                <form action="#" class="searchbox">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    <input type="text" class="text search-input" placeholder="Search here...">
                </form>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        
                        <li>
                            <a href="#" class="btn border add-btn shadow-none mx-2 d-none d-md-block"
                                data-toggle="modal" data-target="#new-order"><i class="las la-plus mr-2"></i>New
                                Order</a>
                        </li>
                    
                       
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{!!asset('images/user/1.png')!!}" class="img-fluid rounded" alt="user">
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 text-center">
                                        <div class="media-body profile-detail text-center">
                                            <img src="{!!asset('images/page-img/profile-bg.jpg')!!}" alt="profile-bg"
                                                class="rounded-top img-fluid mb-4">
                                            
                                        </div>
                                        <div class="p-3">
                                            <h5 class="mb-1">{{ Auth::user()->name }}</h5>
              
                                            <div class="d-flex align-items-center justify-content-center mt-3">
                                              
                  
                                                <x-dropdown-link :href="route('profile.edit')" class="btn border mr-2">
                                                  {{ __('Profile') }}
                                              </x-dropdown-link>
                      
                                              <!-- Authentication -->
                                              <form method="POST" action="{{ route('logout') }}">
                                                  @csrf
                      
                                                  <x-dropdown-link :href="route('logout')"
                                                          onclick="event.preventDefault();
                                                                      this.closest('form').submit();" class="btn border">
                                                      {{ __('Log Out') }}
                                                  </x-dropdown-link>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection

@section('content')


<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Add Quotation</h4>
        </div>
    </div>
    <div class="card-body">
        
            <div class="row">
                <div class="col-md-3">                      
                    <div class="form-group">
                        <label>Customer Name *</label>
                        <select id="cu" name="customerName" class="selectpicker form-control" data-style="py-0">
                            @foreach ($customers as $customer)
                            <option value={{$customer->id}}>{{$customer->name}}</option>
                            @endforeach
                        </select>
                        
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Quotation date *</label>
                        <input type="date" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label>Reference No *</label>
                        <input type="text" class="form-control" placeholder="Enter Name" data-errors="Please Enter Name." required>
                    </div>
                </div> 
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label id>Product Code*</label>
                        <input type="text" id="test" class="form-control" placeholder="Enter product code" data-errors="Please Enter Price." >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="product-table" class="table  .table-responsive-md">
                        <thead>
                           <tr class="table-head">
                              <th scope="col">Product</th>
                              <th scope="col">Unit Price</th>
                              <th scope="col">Stock</th>
                              <th scope="col">Qty</th>
                              <th scope="col">sub total</th>
                              <th scope="col">action</th>
                           </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                     </table>
                </div>
                
                <div class="col-md-12">                                    
                    <div class="row justify-content-end mb-3">
                        <div class="col-md-3">
                            <table class="table  table-hover .table-responsive-md">
                                <tbody>
                                    <tr>
                                        <td class="table-head">Before Tax</td>
                                        <td id="beforetax">0</td>
                                     </tr>
                                   <tr>
                                      <td class="table-head">Order Tax</td>
                                      <td id="tax">0</td>
                                   </tr>
                                   <tr>
                                    <td class="table-head">Discount</td>
                                    <td id="discount">0</td>
                                 </tr>
                                 <tr>
                                    <td class="table-head">Grand Total</td>
                                    <td id="total">0</td>
                                 </tr>
                                </tbody>
                             </table>
                        </div>
                        
                     </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Order Tax</label>
                        <input type="text" value="0" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code."  disabled>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
                <div class="col-md-3"> 
                    <div class="form-group">
                        <label>Discount</label>
                        <input id="discountInput" type="text" class="form-control" placeholder="0" data-errors="" >
                    </div>
                </div> 
                <div class="col-md-6">                      
                    <div class="form-group">
                        <label>Status</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0">
                            <option>CREM01</option>
                            <option>UM01</option>
                            <option>SEM01</option>
                        </select>
                        
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
            


               
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description / Product Details</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>        
            <div id="loadingId" class="display-class loadingio-spinner-ripple-epk6u42ktr"><div class="ldio-lg6mvkuusfs">
                <div></div><div></div>
                </div></div>                    
            <button type="submit" id="addOrder" class="btn btn-primary mr-2">create Quotation</button>
            <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</div>


@endsection

