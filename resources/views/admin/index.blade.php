@extends('admin.admin_dashboard')
@section('admin') 

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex align-items-center mb-3">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control border-0" id="dash-daterange">
                                                <span class="input-group-text bg-blue border-blue text-white">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                                    <i class="fe-heart font-22 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                                    <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                                    <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                                    <p class="text-muted mb-1 text-truncate">Conversion</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                                    <i class="fe-eye font-22 avatar-title text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                                                    <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title mb-0">Total Revenue</h4>
    
                                        <div class="widget-chart text-center" dir="ltr">
                                            
                                            <div id="total-revenue" class="mt-0"  data-colors="#f1556c"></div>
    
                                            <h5 class="text-muted mt-0">Total sales made today</h5>
                                            <h2>$178</h2>
    
                                            <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best in the meat of your page content.</p>
    
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-light">Today</button>
                                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                                <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title mb-3">Sales Analytics</h4>
    
                                        <div dir="ltr">
                                            <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title mb-3">Top 5 Users Balances</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">
    
                                                <thead class="table-light">
                                                    <tr>
                                                        <th colspan="2">Profile</th>
                                                        <th>Currency</th>
                                                        <th>Balance</th>
                                                        <th>Reserved in orders</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>
        
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Tomaslau</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>
        
                                                        <td>
                                                            <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                                        </td>
        
                                                        <td>
                                                            0.00816117 BTC
                                                        </td>
        
                                                        <td>
                                                            0.00097036 BTC
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
        
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>
        
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Erwin E. Brown</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>
        
                                                        <td>
                                                            <i class="mdi mdi-currency-eth text-primary"></i> ETH
                                                        </td>
        
                                                        <td>
                                                            3.16117008 ETH
                                                        </td>
        
                                                        <td>
                                                            1.70360009 ETH
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>
        
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Margeret V. Ligon</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>
        
                                                        <td>
                                                            <i class="mdi mdi-currency-eur text-primary"></i> EUR
                                                        </td>
        
                                                        <td>
                                                            25.08 EUR
                                                        </td>
        
                                                        <td>
                                                            12.58 EUR
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>
        
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Jose D. Delacruz</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>
        
                                                        <td>
                                                            <i class="mdi mdi-currency-cny text-primary"></i> CNY
                                                        </td>
        
                                                        <td>
                                                            82.00 CNY
                                                        </td>
        
                                                        <td>
                                                            30.83 CNY
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>
        
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Luke J. Sain</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>
        
                                                        <td>
                                                            <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                                        </td>
        
                                                        <td>
                                                            2.00816117 BTC
                                                        </td>
        
                                                        <td>
                                                            1.00097036 BTC
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title mb-3">Revenue History</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-nowrap table-hover table-centered m-0">
    
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Marketplaces</th>
                                                        <th>Date</th>
                                                        <th>Payouts</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Themes Market</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 15, 2018
                                                        </td>
        
                                                        <td>
                                                            $5848.68
                                                        </td>
        
                                                        <td>
                                                            <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Freelance</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 12, 2018
                                                        </td>
        
                                                        <td>
                                                            $1247.25
                                                        </td>
        
                                                        <td>
                                                            <span class="badge bg-soft-success text-success">Paid</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Share Holding</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 10, 2018
                                                        </td>
        
                                                        <td>
                                                            $815.89
                                                        </td>
        
                                                        <td>
                                                            <span class="badge bg-soft-success text-success">Paid</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Envato's Affiliates</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 03, 2018
                                                        </td>
        
                                                        <td>
                                                            $248.75
                                                        </td>
        
                                                        <td>
                                                            <span class="badge bg-soft-danger text-danger">Overdue</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Marketing Revenue</h5>
                                                        </td>
        
                                                        <td>
                                                            Sep 21, 2018
                                                        </td>
        
                                                        <td>
                                                            $978.21
                                                        </td>
        
                                                        <td>
                                                            <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Advertise Revenue</h5>
                                                        </td>
        
                                                        <td>
                                                            Sep 15, 2018
                                                        </td>
        
                                                        <td>
                                                            $358.10
                                                        </td>
        
                                                        <td>
                                                            <span class="badge bg-soft-success text-success">Paid</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

 @endsection