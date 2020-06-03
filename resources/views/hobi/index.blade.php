@extends('template')

@section('main')
@include('_partial.flash_message')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Hobi</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-start">
                <a href="hobi/create" class="btn btn-primary mb-4">Tambah Hobi</a>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Hobi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hobi_list as $hobi)
                    <tr>
						<td> {{ $hobi->id }} </td>
                        <td> {{ $hobi->nama_hobi }} </td>
						<td>
							<div class="row">
								<div class="col-auto">
									{{ link_to('hobi/' . $hobi->id . '/edit' ,'Edit' , ['class' => 'btn btn-warning btn-sm']) }}
								</div>
								<div class="col-auto">
									{!! Form::open(['method' => 'DELETE' , 'action' => ['HobiController@destroy' , $hobi -> id]]) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', "onclick" => "return confirm('Yakin ingin menghapus?')" ]) !!}
									{!! Form::close() !!}
								</div>
							</div>
						</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

</div>

@endsection