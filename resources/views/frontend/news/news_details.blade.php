@extends('frontend.home_dashboard')
@section('home') 

<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">

<div class="single-add">
</div>

<div class="single-cat-info">
<div class="single-home">
<i class="la la-home"> </i><a href=" "> HOME </a>
</div>
<div class="single-cats">
<i class="la la-bars"></i> <a href=" " rel="category tag">{{ $news['category']['category_name'] }}</a>, 

@if($news->subcategory_id == NULL)
<a href=" " rel="category tag"> </a>
@else
<a href=" " rel="category tag">{{ $news['subcategory']['subcategory_name'] }}</a>
@endif
 </div>
</div>
 
<h1 class="single-page-title">
{{ $news->news_title }} </h1>
<div class="row g-2">
<div class="col-lg-1 col-md-2 ">
<div class="reportar-image">
<img src="{{ (!empty($news->user->photo)) ? url('upload/admin_images/'.$news->user->photo): url('upload/no_image.jpg') }}">
</div>
</div>
<div class="col-lg-11 col-md-10">
<div class="reportar-title">
Posted By {{ $news['user']['name'] }}
</div>
<div class="viwe-count">
<ul>
<li><i class="la la-clock-o"></i> Updated
{{ $news->created_at->format('l M d Y') }}
</li>
<li> / <i class="la la-eye"></i>
75
Read
</li>
</ul>
</div>
</div>
</div>

<div class="single-image">
<a href=" "><img class="lazyload" src="{{ asset($news->image) }}"  ></a>
<h2 class="single-caption2">
{{ $news->news_title }}
</h2>
</div>
 
<div class="single-page-add2">
<div class="themesBazar_widget"> <div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-74" src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
</div>
</div> </div>
<div class="single-details">
<p> {!! $news->news_details !!} </p>
</div>
<div class="singlePage2-tag">
<span> Tags : </span>
<a href=" " rel="tag">Queen</a> <a href=" " rel="tag">London</a> </div>

<div class="single-add">
<div class="themesBazar_widget"> <div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-74" src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
</div>
</div> </div>

<h3 class="single-social-title">
Share News </h3>
<div class="single-page-social">
<a href=" " target="_blank" title="Facebook"><i class="lab la-facebook-f"></i></a><a href=" " target="_blank"><i class="lab la-twitter"></i></a><a href=" " target="_blank"><i class="lab la-linkedin-in"></i></a><a href=" " target="_blank"><i class="lab la-digg"></i></a><a href=" " target="_blank"><i class="lab la-pinterest-p"></i></a><a onclick="printFunction()" target="_blank"><i class="las la-print"></i> <script>
					function printFunction() {
						window.print();
					}
					</script> </a>
</div>
 
 <div class="author2">
<div class="author-content2">
<h6 class="author-caption2">
<span> COMMENTS </span>
</h6>
<div class="author-image2">
<img alt="" src="assets/images/lazy.jpg
"   class="avatar avatar-96 photo" height="96" width="96" loading="lazy"> </div>
<div class="authorContent">
<h1 class="author-name2">
<a href=" "> Jack MA </a>
</h1>
<div class="author-details">It will take the Queen's coffin on a final journey through London and on to Windsor Castle for a second service</div>
</div>
 
</div>
</div>


 <hr>

<form action=" " method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
<div style="display: none;">
 
</div>
<div class="main_section">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="contact-title ">
Subject *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="text" name="sub_title" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="News Sub Title"></span>
</div>
</div>
</div>
 
<div class="row">
<div class="col-lg-12">
<div class="contact-title">
Comments *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap news_details"><textarea name="news_details" cols="20" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="News Details...."></textarea></span>
</div>
</div>
</div>
 
 
 
</div>

<div class="row">
<div class="col-md-12">
<div class="contact-btn">
<input type="submit" value="Submit Comments" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
</div>
</div>
</div>

<div class="wpcf7-response-output" aria-hidden="true"></div></form>
 

 

<div class="single_relatedCat">
<a href=" ">Related News </a>
</div>
<div class="row">
<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a>
</div>
<h4 class="related-title">
<a href=" ">Why people are industry hopping </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
Saturday, 10th September 2022
</a>
</div>
</div>
</div>

<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a>
</div>
<h4 class="related-title">
<a href=" ">Why people are industry hopping </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
Saturday, 10th September 2022
</a>
</div>
</div>
</div>

<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a>
</div>
<h4 class="related-title">
<a href=" ">Why people are industry hopping </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
Saturday, 10th September 2022
</a>
</div>
</div>
</div>

<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a>
</div>
<h4 class="related-title">
<a href=" ">Why people are industry hopping </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
Saturday, 10th September 2022
</a>
</div>
</div>
</div>

<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a>
</div>
<h4 class="related-title">
<a href=" ">Why people are industry hopping </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
Saturday, 10th September 2022
</a>
</div>
</div>
</div>

<div class="themesBazar-3 themesBazar-m2">
<div class="related-wrpp">
<div class="related-image">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a>
</div>
<h4 class="related-title">
<a href=" ">Why people are industry hopping </a>
</h4>
<div class="related-meta">
<a href=" "><i class="la la-tags"> </i>
Saturday, 10th September 2022
</a>
</div>
</div>
</div>





</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="sitebar-fixd" style="position: sticky; top: 0;">
<div class="siteber-add">
<div class="themesBazar_widget"> <div class="textwidget"><p><img loading="lazy" class="aligncenter size-full wp-image-74" src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
</div>
</div> </div>
<div class="singlePopular">
<ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
<li class="nav-item" role="presentation">
<div class="nav-link active" data-bs-toggle="pill" data-bs-target="#archiveTab_recent" role="tab" aria-controls="archiveRecent" aria-selected="true"> LATEST </div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular" role="tab" aria-controls="archivePopulars" aria-selected="false"> POPULAR </div>
</li>
</ul>
</div>
<div class="tab-content" id="pills-tabContentarchive">
<div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel" aria-labelledby="archiveRecent">

<div class="archiveTab-sibearNews">


<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
1
</div>

</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
2
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping</a>
</h4>
<div class="archive-conut">
3
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg" ></a> </div>
 <h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
4
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping   </a>
</h4>
<div class="archive-conut">
5
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg" ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
6
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping</a>
</h4>
<div class="archive-conut">
7
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg" ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
8
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>

</h4>
<div class="archive-conut">
9
</div>
</div>
<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg" ></a> </div>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
10
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="archiveTab_popular" role="tabpanel" aria-labelledby="archivePopulars">
<div class="archiveTab-sibearNews">


<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
1
</div>

</div>


<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
1
</div>

</div>

<div class="archive-tabWrpp archiveTab-border">
<div class="archiveTab-image ">
<a href=" "><img class="lazyload" src="assets/images/lazy.jpg"  ></a> </div>
<a href=" " class="archiveTab-icon2"><i class="la la-play"></i></a>
<h4 class="archiveTab_hadding"><a href=" ">Why people are industry hopping </a>
</h4>
<div class="archive-conut">
1
</div>

</div>
</div>
</div>
</div>
<div class="siteber-add2">
</div>
</div> 
</div>
</div>
</div>






@endsection
