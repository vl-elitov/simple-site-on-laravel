@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    {{ Form::open(array('url' => '/contact/submit',  'method' => 'post')) }}
    <div class="form-group">
        <?php echo Form::text('name', '', ['placeholder' => 'Your name']) ?>
    </div>
    <div class="form-group">
        <?php echo Form::text('email', '', ['placeholder' => 'Email']);?>
    </div>
    <div class="form-group">
        <?php echo Form::textarea('message', '', ['placeholder' => 'Text message']) ?>
    </div>

    <div class="form-group">
        <?php echo Form::submit('Send'); ?>
    </div>

    {!! Form::close() !!}

@endsection