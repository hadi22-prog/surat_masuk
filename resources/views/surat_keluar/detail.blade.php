 @extends('layouts.skeleton')
 @section('content')            <aside class="right-side">

                     <div class="row">
<div class="content">
  <div class="col-md-12">
                            <!-- Info box -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title"> Mail From: {{$tampilkan->mail_from}}</h3>
                                    <div class="box-tools pull-right">
                                        <div class="label bg-aqua">{{$tampilkan->type_mail->type_mail}}</div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Subject: <code>{{$tampilkan->mail_subject}}</code>
                                <hr>
                                    Mail To: <code>{{$tampilkan->mail_to}}</code>       
                                    <p>
                                        {{$tampilkan->description}}
                                    </p>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                </div><!-- /.box-footer-->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    </div>
                    </aside>
                    @endsection