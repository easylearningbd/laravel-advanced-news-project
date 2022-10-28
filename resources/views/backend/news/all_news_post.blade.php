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
                <ol class="breadcrumb m-0">
                    <a href="{{ route('add.news.post') }}" class="btn btn-blue waves-effect waves-light">Add News Post</a>
                </ol>
            </div>
     <h4 class="page-title">All News Post <span class="btn btn-danger"> {{ count($allnews) }} </span> </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
 

        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Image </th>
                    <th>Title </th>
                    <th>Category </th>
                    <th>User </th>
                    <th>Date </th>
                    <th>Status </th> 
                    <th>Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	@foreach($allnews as $key=> $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td><img src="{{ asset($item->image) }} " style="width: :50px; height:50px;" ></td>
                    <td>{{ Str::limit($item->news_title,20)  }}</td>
                    <td>{{ $item['category']['category_name']   }}</td>
                     <td>{{ $item['user']['name'] }}</td>
                    <td>{{ Carbon\Carbon::parse($item->post_date)->diffForHumans()  }}</td>
                    <td>
      @if($item->status == 1)
      <span class="badge badge-pill bg-success">Active</span>

                        @else
     <span class="badge badge-pill bg-danger">InActive</span>
                        @endif
                        

                    </td> 
                    <td>
      <a href="{{ route('edit.news.post',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

      <a href="{{ route('delete.admin',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>


      @if($item->status == 1)
 <a href="{{ route('inactive.admin.user',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light" title="Inactive"><i class="fa-solid fa-thumbs-down"></i> </a>
      @else
 <a href="{{ route('active.admin.user',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light" title="Active"><i class="fa-solid fa-thumbs-up"></i></a>
      @endif

                    </td> 
                </tr>
                @endforeach
                 
            </tbody>
        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

@endsection



