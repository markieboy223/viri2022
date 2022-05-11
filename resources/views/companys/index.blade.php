@extends('companys.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Viri verified companies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companys.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Checked</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->image }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ \Str::limit($value->description, 100) }}</td>
                <td>{{ $value->checked }}</td>
                <td>
                    <form action="{{ route('companys.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('companys.show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('companys.edit',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
