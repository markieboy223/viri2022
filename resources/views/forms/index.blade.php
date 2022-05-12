@extends('forms.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Viri form</h2>
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
                <div class="card-body">
                    <h3 class="card-title">Company name: {{$value->name}}</h3>
                    <br>
                    <h5 class="card-title">Company email: {{$value->email}}</h5>
                    <br>
                    <p class="card-text">Sector: {{ \Str::limit($value->sector, 100) }}</p>
                    <p class="card-text">Amount of workers: {{ ($value->workers) }}</p>
                    <p class="card-text">Power usage: {{ ($value->power) }} KWH</p>
                    <p class="card-text">Amount of sunpanels: {{ ($value->sunpanels) }}</p>
                </div>
            </div>
        @endforeach
        </div>
    {!! $data->links() !!}
@endsection
