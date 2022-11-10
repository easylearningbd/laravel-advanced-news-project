 
@php
    $id = Auth::user()->id;
    $userid = App\Models\User::find($id);
    $status = $userid->status;

@endphp

 <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                   

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                 

     <li>
        <a href="{{ route('admin.dashboard') }}">
             <i class="mdi mdi-view-dashboard-outline"></i>
            <span> Dashboard </span>
        </a>
    </li>


      @if($status == 'active') 


                            <li class="menu-title mt-2">Menu</li>

          
          @if(Auth::user()->can('category.menu'))                   
        <li>
            <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                <i class="mdi mdi-cart-outline"></i>
                <span> Category </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">
                     @if(Auth::user()->can('category.list'))   
                    <li>
                        <a href="{{ route('all.category') }}">All Category</a>
                    </li>
                     @endif
                     @if(Auth::user()->can('category.add'))   
                    <li>
                        <a href="{{ route('add.category') }}">Add Category</a>
                    </li>
                     @endif
                    
                </ul>
            </div>
        </li>
            @endif


 @if(Auth::user()->can('subcategory.menu'))
         <li>
            <a href="#sidebarEcommerce1" data-bs-toggle="collapse">
                <i class="mdi mdi-cart-outline"></i>
                <span> SubCategory </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce1">
                <ul class="nav-second-level">
                     @if(Auth::user()->can('subcategory.list'))
                    <li>
                  <a href="{{ route('all.subcategory') }}">All SubCategory</a>
                    </li>
                     @endif
                     @if(Auth::user()->can('subcategory.add'))
                    <li>
                 <a href="{{ route('add.subcategory') }}">Add SubCategory</a>
                    </li>
                     @endif
                    
                </ul>
            </div>
        </li>
 @endif

 @if(Auth::user()->can('news.menu'))
         <li>
            <a href="#newspost" data-bs-toggle="collapse">
                <i class="mdi mdi-cart-outline"></i>
                <span> News Post Setting </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="newspost">
                <ul class="nav-second-level">
                    @if(Auth::user()->can('news.list'))
                    <li>
                  <a href="{{ route('all.news.post') }}">All News Post</a>
                    </li>
                    @endif
                     @if(Auth::user()->can('news.add'))
                    <li>
                 <a href="{{ route('add.news.post') }}">Add News Post</a>
                    </li>
                    @endif
                </ul>
            </div>
        </li>
@endif
           

 @if(Auth::user()->can('banner.menu'))
            <li>
            <a href="#banner" data-bs-toggle="collapse">
                <i class="mdi mdi-cart-outline"></i>
                <span> Banner Setting </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="banner">
                <ul class="nav-second-level">

                    <li>
                  <a href="{{ route('all.banners') }}">All Banner</a>
                    </li>
                  
                    
                </ul>
            </div>
        </li>
@endif



 @if(Auth::user()->can('photo.menu'))
            <li>
                <a href="#sidebarEmail" data-bs-toggle="collapse">
                    <i class="mdi mdi-email-multiple-outline"></i>
                    <span> Photo Setting </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('all.photo.gallery') }}">Photo Gallery</a>
                        </li>
                        
                    </ul>
                </div>
            </li>
@endif


 @if(Auth::user()->can('video.menu'))
             <li>
                <a href="#video" data-bs-toggle="collapse">
                    <i class="mdi mdi-email-multiple-outline"></i>
                    <span> Video Setting </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="video">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('all.video.gallery') }}">Video Gallery</a>
                        </li>
                        
                    </ul>
                </div>
            </li>
@endif


 @if(Auth::user()->can('live.menu'))
             <li>
                <a href="#live" data-bs-toggle="collapse">
                    <i class="mdi mdi-email-multiple-outline"></i>
                    <span> Live Tv Setting </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="live">
                    <ul class="nav-second-level">
                        <li>
                            <a href="{{ route('update.live.tv') }}">Update Live TV</a>
                        </li>
                        
                    </ul>
                </div>
            </li>
@endif


 @if(Auth::user()->can('review.menu'))
     <li>
        <a href="#review" data-bs-toggle="collapse">
            <i class="mdi mdi-email-multiple-outline"></i>
            <span> Review Setting </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="review">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('pending.review') }}">Pending Review</a>
                </li>

                <li>
                    <a href="{{ route('approve.review') }}">Approve Review</a>
                </li>
                
            </ul>
        </div>
    </li>
@endif


@if(Auth::user()->can('seo.menu'))
      <li>
        <a href="#review" data-bs-toggle="collapse">
            <i class="mdi mdi-email-multiple-outline"></i>
            <span> Seo Setting </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="review">
            <ul class="nav-second-level">
                <li>
                    <a href="{{ route('seo.setting') }}">Update Seo </a>
                </li>

                
                
            </ul>
        </div>
    </li>
        @endif                      
                            
 
 

                            <li class="menu-title mt-2">Setting</li>


@if(Auth::user()->can('setting.menu'))

        <li>
            <a href="#sidebarAuth" data-bs-toggle="collapse">
                <i class="mdi mdi-account-circle-outline"></i>
                <span> Setting Admin User  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAuth">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.admin') }}">All Admin</a>
                    </li>

                     <li>
                        <a href="{{ route('add.admin') }}">Add Admin </a>
                    </li>
                    
                    
                </ul>
            </div>
        </li>
 @endif 


 @if(Auth::user()->can('role.menu'))
        <li>
            <a href="#sidebarExpages" data-bs-toggle="collapse">
                <i class="mdi mdi-text-box-multiple-outline"></i>
                <span> Roles And Permission </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarExpages">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.permission') }}">All Permission</a>
                    </li>
                    <li>
                        <a href="{{ route('all.roles') }}">All Roles</a>
                    </li>

                     <li>
                        <a href="{{ route('add.roles.permission') }}">Roles in Permission</a>
                    </li>

                     <li>
                        <a href="{{ route('all.roles.permission') }}">All Roles in Permission</a>
                    </li>
                    
                </ul>
            </div>
        </li>
 
@endif

       
 

                           
   @else

   @endif
                            
 
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>