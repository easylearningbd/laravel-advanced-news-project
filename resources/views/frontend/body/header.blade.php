@php
$cdate = new DateTime();
@endphp
<header class="themesbazar_header">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="date">
<i class="lar la-calendar"></i>
 {{ $cdate->format('l d-m-Y')  }}
</div>
</div>
<div class="col-lg-4 col-md-4">
<form class="header-search" action=" " method="post">
<input type="text" alue="" name="s" placeholder=" Search Here " required="">
<button type="submit" value="Search"> <i class="las la-search"></i> </button>
</form>
</div>
<div class="col-lg-4 col-md-4">
<div class="header-social">
<ul>
<li> <a href="https://www.facebook.com/" target="_blank" title="facebook"><i class="lab la-facebook-f"></i> </a> </li>
<li><a href="https://twitter.com/" target="_blank" title="twitter"><i class="lab la-twitter"> </i> </a></li>  

@auth
<li><a href="{{ route('user.logout') }}"><b> Logout </b></a> </li>
@else
<li><a href="{{ route('login') }}"><b> Login </b></a> </li>
<li> <a href="{{ route('register') }}"> <b>Register</b> </a> </li>
@endauth


</ul>
</div>
</div>
</div>
</div>

<section class="logo-banner">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="logo">
<a href=" " title="NewsFlash">
<img src="{{ asset('frontend/assets/images/logo.png') }}" alt="NewsFlash" title="NewsFlash">
</a>
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="banner">
<a href=" " target="_blank">
 
</a>
</div>
</div>
</div>
</div>
</section>

</header>


<div class="menu_section sticky" id="myHeader">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="mobileLogo">
 <a href=" " title="NewsFlash">
<img src="assets/images/footer_logo.gif" alt="Logo" title="Logo">
</a>
</div>
<div class="stellarnav dark desktop"><a href="https://newssitedesign.com/newsflash/#" class="menu-toggle full"><span class="bars"><span></span><span></span><span></span></span> </a><ul id="menu-main-menu" class="menu"><li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89"><a href="https://newssitedesign.com/newsflash" aria-current="page"> <i class="fa-solid fa-house-user"></i>  HOME</a></li>
 
 @php
 $categories = App\Models\Category::orderBy('category_name','ASC')->limit(7)->get();

 @endphp

@foreach($categories as $category)
<li id="menu-item-291" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-291 has-sub"><a href=" ">{{ $category->category_name }}</a>
<ul class="sub-menu">
<li id="menu-item-294" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294"><a href=" ">Sub Sports</a></li>
<li id="menu-item-292" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-292"><a href=" ">Sub Sports</a></li> 
 
</ul>
<a class="dd-toggle" href=" "><span class="icon-plus"></span></a></li>
@endforeach



<li id="menu-item-277" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-277"><a href=" ">ARCRIVE</a></li>
 
</ul>
<a class="dd-toggle" href=" "><span class="icon-plus"></span></a></li>
</ul></div> </div>
</div>
</div>
</div>