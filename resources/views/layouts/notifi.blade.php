@if(Session::has('success'))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-check"></span> 
        {!! Session::get('success') !!}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
        <span class="glyphicon glyphicon-alert"></span>
        {!! Session::get('error') !!}
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info">
        <span class="fa fa-lightbulb-o"></span>
        {!! Session::get('info') !!}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li><span class="glyphicon glyphicon-alert"></span> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
