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
                    <a href="{{ route('add.category') }}" class="btn btn-blue waves-effect waves-light">Add Category</a>
                </ol>
            </div>
                                    <h4 class="page-title">Category All </h4>
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
                    <th>Category Name </th>
                    <th>Action </th> 
                </tr>
            </thead>
        
        
            <tbody>
            	@foreach($categories as $key=> $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>
        @if(Auth::user()->can('category.edit'))                   
      <a href="{{ route('edit.category',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>
      @endif
 @if(Auth::user()->can('category.delete'))  
      <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>
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



