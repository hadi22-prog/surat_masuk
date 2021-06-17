@extends('layouts.skeleton')
@section('content')
<Doctypehtml>
<head>
     <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Mails
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Mails</li>
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
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                        <thead>

                                    <table class="table table-hover">
                                        <tr>
                                    <th>No</th>
                                            <th>Incoming At</th>
                                            <th>Mail Code</th>
                                            <th>Mail Date</th>
                                            <th>Mail From</th>
                                            <th>Mail To</th>
                                            <th>Subject</th>
                                            <th>Mail Type</th>
                                            <th>User</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @php($no = 1 )
                                @foreach($user->mail as $data)
                                @if($data->type_mail->id == 1)

                                        <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$data->incoming_at}}</td>
                                             <td>{{$data->mail_code}}</td>
                                             <td>{{$data->mail_date}}</td>
                                             <td>{{$data->mail_from}}</td>
                                             <td>{{$data->mail_to}}</td>
                                             <td>{{$data->mail_subject}}</td>
                                             <td><span class="label label-success">{{$data->type_mail->type_mail}}</span></td>
                                             
                                             <td>{{$data->user->name }}</td>
                                </tr>
                                @else

                                  <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$data->incoming_at}}</td>
                                             <td>{{$data->mail_code}}</td>
                                             <td>{{$data->mail_date}}</td>
                                             <td>{{$data->mail_from}}</td>
                                             <td>{{$data->mail_to}}</td>
                                             <td>{{$data->mail_subject}}</td>
                                             <td><span class="label label-danger">{{$data->type_mail->type_mail}}</span></td>
                                             
                                             <td>{{$data->user->name }}</td>
                                </tr>
                                    @endif
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