@extends('layouts.backend.main')
@section('Title','MyBlog |Index')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


            <h1>
                Blogs
                <small>Display all blog</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>

                <li class="active">All Blog</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->

                        <div class="box-header">
                            <div class="pull-left">
                                <a href="{{route('backend.blog.create')}}" class="btn btn-success">Add new Post</a>
                            </div>
                        </div>

                        <div class="box-body ">

                        @include('backend.blog.message')


                            @if(! $posts->count())
                            <div class="alert alert-danger">
                                <strong>No record</strong>>
                            </div>

                           @else
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td width="150">Action</td>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Category</td>
                                    <td width="200">Date</td>
                                </tr>
                                </thead>
                               <tbody>
                               @foreach($posts as $post)
                               <tr>
                                   <td>
                                       {!! Form::open(['method'=>'DELETE','route' =>['backend.blog.destroy',$post->id]]) !!}
                                       <a href="{{route('backend.blog.edit',$post->id)}}" class="btn btn-xs btn-primary btn-lg">
                                       <i class="fa fa-edit">Edit</i>
                                       </a>
                                    <button type="submit" class="btn btn-xs btn-danger">
                                       <i class="fa fa-times">Delete</i>
                                    </button>
                                   {!! Form::class !!}


                                   </td>
                                   <td>
                                    {{$post->title}}
                                   </td>
                                   <td>{{$post->author->name}}</td>
                                   <td>{{$post->category->title}} </td>
                                   <td><abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr> |
                                       {!! $post->publicationLabel() !!}</td>
                               </tr>
                            @endforeach
                               </tbody>
                            </table>
                         @endif

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                            {{$posts->render()}}
                        </div>
                            <div class="pull-right">

                                <small>{{ $postCount }} {{ str_plural('Item', $postCount) }}</small>
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
