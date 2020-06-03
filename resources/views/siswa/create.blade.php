@extends('template')

@section('main')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Siswa</h1>
    {{-- @include('errors.form_error_list') --}}
    {{-- {!! Form::open(['url' => 'siswa']) !!} --}}
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container-fluid">
                {!! Form::open(['url' => 'siswa', 'files' => true]) !!}
                    @include ('siswa.form' , ['submitButtonText' => 'Simpan'] )
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
@endsection
