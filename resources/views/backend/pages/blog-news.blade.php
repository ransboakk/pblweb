@extends('backend.main')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
 {{-- <link href="{{asset('assets3/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" /> --}}
     <!-- Page-Title -->
     <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">News</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blog News</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="tables-datatable.html#">Action</a>
                                <a class="dropdown-item" href="tables-datatable.html#">Another action</a>
                                <a class="dropdown-item" href="tables-datatable.html#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="tables-datatable.html#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <button type="button" style="margin-bottom: 1rem" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Add News</button>
                            
                            <div style="display: flex; flex-direction:column; align-items:center">
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{session('success')}}
                                </div>
                                {{-- <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div> --}}
                                @endif
                                @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{session('error')}}
                                </div>
                                {{-- <div class="alert alert-warning" role="alert">
                                    {{session('error')}}
                                </div> --}}
                                @endif
                                @if ($errors->any())
                                <ul style="list-style: none">
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{$error}}
                                        </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            </div>
                            {{-- <div class="d-flex align-items-center justify-content-between">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                    @if (session('error'))
                                    <div class="alert alert-warning" role="alert">
                                        {{session('error')}}
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                    <ul style="list-style: none">
                                        @foreach ($errors->all() as $error)
                                            <li><div class="alert alert-danger" role="alert">
                                                {{$error}}
                                            </div></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div> --}}


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Action</th>
                                    {{-- <th>Start date</th>
                                    <th>Salary</th> --}}
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach($blogs as $blog)
                                <tr>
                                    <td>{{\Carbon\Carbon::parse($blog->created_at)->format('Y-M-j (H:i)')}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{substr(strip_tags($blog->body), 0, 30)}}...</td>
                                    <td style="display: flex; gap: 2rem; cursor: pointer;">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                            <a href="{{route('blog.edit', $blog->slug)}}" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i style="color: red;" class="mdi mdi-trash-can"></i>
                                            </button>
                                        </div>
                                        {{-- <i class="mdi mdi-pencil-outline" style="font-size:1.3rem"></i> <i style="color: red; font-size:1.3rem" class="mdi mdi-trash-can-outline"></i> --}}
                                    </td>
                                    {{-- <td>2011/04/25</td>
                                    <td>$320,800</td> --}}
                                    
                                </tr>
                                @endforeach
                                
                                
                               
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            

        </div>
        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Add News</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  action="{{route('addBlog')}}" class="modal-body" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                             <input type="text" class="form-control" name="title" id="title" value="" required>
                        </div>

                        
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" class="dropify" id="thumbnail" name="thumbnail"/>
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea id="editor" name="body" ></textarea>
                            {{-- <textarea id="summernote" name="body" required></textarea> --}}
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light" >Create News</button>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- end container-fluid -->
    </div> 
    <!-- end page-content-wrapper -->
{{-- <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script> --}}
    <script src="{{asset('assets1/js/vendor.min.js')}}"></script>

@endsection