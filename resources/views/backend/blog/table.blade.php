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
    <?php $request = request(); ?>
    @foreach($posts as $post)
        <tr>
            <td>
                {!! Form::open(['method'=>'DELETE','route' =>['backend.blog.destroy',$post->id]]) !!}
                @if (check_user_permissions($request, "Blog@edit", $post->id))
                <a href="{{route('backend.blog.edit',$post->id)}}" class="btn btn-xs btn-primary btn-lg">
                    <i class="fa fa-edit">Edit</i>
                </a>
                @else
                    <a href="#" class="btn btn-xs btn-default disabled">
                        <i class="fa fa-edit">Edit</i>
                    </a>
                @endif

                @if (check_user_permissions($request, "Blog@destroy", $post->id))
                <button type="submit" class="btn btn-xs btn-danger">
                    <i class="fa fa-trash">Delete</i>
                </button>
                @else
                    <button type="button" onclick="return false;" class="btn btn-xs btn-danger disabled">
                        <i class="fa fa-trash">Delete</i>
                    </button>
                @endif
                {!! Form::close() !!}
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