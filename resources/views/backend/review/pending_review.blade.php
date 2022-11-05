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
                    <a href="{{ route('add.admin') }}" class="btn btn-blue waves-effect waves-light">Pending Review </a>
                </ol>
            </div>
                                    <h4 class="page-title">Pending Review <span class="btn btn-danger"> {{ count($review) }} </span> </h4>
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
                    <th>News </th>
                    <th>User </th>
                    <th>Comment </th>
                    <th>Status </th> 
                    <th>Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	@foreach($review as $key=> $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td><img src="{{ asset($item['news']['image']) }} " style="width: :50px; height:50px;" ></td>
                    <td>{{ $item['news']['news_title'] }}</td>
                    <td>{{ $item['user']['name'] }}</td>
                    <td>{{ Str::limit($item->comment ,25)  }}</td>
                    <td>
      @if($item->status == 0)
      <span class="badge badge-pill bg-danger">Pending</span>

                        @else
     <span class="badge badge-pill bg-success">Publish</span>
                        @endif
                        

                    </td> 
                    <td>
      <a href="{{ route('review.approve',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Approve</a>
  
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



