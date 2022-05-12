@extends('forms.layout')

@section('content')
    <div style="margin-top: 10%" class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Viri form</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('forms.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Company name</label>
                <input name="name" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputSector1">your sector</label>
                <input name="sector" class="form-control" id="exampleInputSector1" placeholder="Sector">
            </div>
            <div class="form-group">
                <label for="exampleInputworkers">amount of workers</label>
                <input name="workers" class="form-control" id="exampleInputworkers" placeholder="workers">
            </div>
            <div class="form-group">
                <label for="exampleInputpower">Amount of Power in KWH</label>
                <input name="power" class="form-control" id="exampleInputpower" placeholder="power">
            </div>
            <div class="form-group">
                <label for="exampleInputsunpanels">Amount of sunpanels</label>
                <input name="sunpanels" class="form-control" id="exampleInputsunpanels" placeholder="sunpanels">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
