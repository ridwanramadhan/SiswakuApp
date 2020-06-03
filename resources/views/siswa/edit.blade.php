@extends('template')

@section('main')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Siswa</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container-fluid">
                <div id="siswa">
                    {!! Form::model($siswa , ['method' => 'PATCH' , 'files' => true, 'action' => ['SiswaController@update' , $siswa -> id ]]) !!}
                        @include ('siswa.form' , ['submitButtonText' => 'Update'] )
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection