
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

      @yield('meta')
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>POS Dash | Responsive Bootstrap 4 Admin Dashboard Template</title>

    
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ !!asset('images/favicon.ico')}}" >

      
     
      <link rel="stylesheet" href="{!!asset('css/backend-plugin.min.css')!!}" >
      <link rel="stylesheet" href="{!!asset('css/backend-plugin.min.css')!!}">
      <link rel="stylesheet" href="{!! asset('css/backend.css?v=1.0.0')!!}">
      <link rel="stylesheet" href="{!!asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')!!}">
      <link rel="stylesheet" href="{!!asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')!!}">
      <link rel="stylesheet" href="{!!asset('vendor/remixicon/fonts/remixicon.css')!!}">  </head>

       
  <body class=" color-light ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      @yield('sidebar')
      @yield('pos')
      <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <h4 class="mb-3">New Order</h4>
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Email</label>
                                  <input type="text" class="form-control" placeholder="Enter Name or Email">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>     
       <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            
            
               @yield('content')
            
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    @yield('link')
    <!-- Backend Bundle JavaScript -->
    <script src="{!!asset('js/backend-bundle.min.js')!!}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{!!asset('js/table-treeview.js')!!}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{!!asset('js/customizer.js')!!}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{!!asset('js/chart-custom.js')!!}"></script>
    
    <!-- app JavaScript -->
    <script src="{!!asset('js/app.js')!!}"></script>

    @yield("scripts")
  </body>
</html>