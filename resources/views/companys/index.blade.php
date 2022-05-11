@extends('companys.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Viri verified companies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companys.create') }}"> Create New Company</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


        <div class="card-group">
        @foreach ($data as $key => $value)
            <div class="card" style="width: 18rem;">
                <img width="100%" src="{{$value->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$value->name}}</h5>
                    <p class="card-text">{{ \Str::limit($value->description, 100) }}</p>
                    <a href="{{ route('companys.show',$value->id) }}" class="btn btn-primary">More</a>
                </div>
            </div>
        @endforeach
        </div>
    {!! $data->links() !!}
@endsection
