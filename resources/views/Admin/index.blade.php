@extends('layouts.skeleton')
@section('content')
<Doctypehtml>
<head>
     <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
Data User                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Data User</li>
                    </ol>
                </section>
</head>
<body>
 <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"> Table Data</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                                                                <a href="{{route('downloadpdf_alluser')}}"><i class="fa  fa-cloud-upload"></i>Download PDF</a>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                        <thead>

                                    <table class="table table-hover">
                                        <tr>
                                    <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                           

                                            <th>Pilihan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @php($no = 1 )
                                @foreach($user as $data)
                               
                                        <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$data->name}}</td>
                                             <td>{{$data->email}}</td>
                                             <td>{{$data->created_at}}</td>
                                         
                                               <td>

 @if($data->role_id==2)
@else
                                    <a href="{{url('Admin/edit/'.$data->id) }}" class="btn btn-xs btn-warning" class="btn btn-xs btn-warning">  <i class="fa fa-edit"></i>Edit</a>
                                    <a href="{{ route('delete_admin',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o">Delete</i></a>
                                                                    
    @endif

                                 </td>
                                </tr>
                               
                                

                               
                                    @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        

    </body>
</html>
@endsection