<div class="form-group">
    {!! Form::label('nama_hobi', 'Nama Hobi:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_hobi', null, ['class' => 'form-control', 'autocomplete' => 'off', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>