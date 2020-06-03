<div class="form-group">
    {!! Form::label('nama_kelas', 'Nama Kelas:', ['class' => 'control-label']) !!}
    {!! Form::text('nama_kelas', null, ['class' => 'form-control', 'autocomplete' => 'off', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>