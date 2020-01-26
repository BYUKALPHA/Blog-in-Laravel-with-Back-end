@extends('layouts.backend.main')
@section('Title','AlphaDotcom|User')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Display all User</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('backend.users.index')}}"><i class="fas fa-image"></i> User</a>
                </li>

                <li class="active">All User</li>
            </ol>
        </section>        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header clearfix">
                            <div class="pull-left">
                                <a href="{{route('backend.users.create')}}" class="btn btn-success">Add new User</a>
                            </div>
                            <div class="pull-right" >
                            </div>
                        </div>
                        <div class="box-body ">
                        @include('backend.partials.message')

                            @if(! $users->count())
                            <div class="alert alert-danger">
                                <strong>No record</strong>>
                            </div>
                           @else
                                 @include('backend.users.table')
                         @endif

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                            {{$users->appends( Request::query())->render()}}
                        </div>
                            <div class="pull-right">

                                <small>{{ $usersCount }} {{ str_plural('User', $usersCount) }}</small>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>


@endsection
@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
