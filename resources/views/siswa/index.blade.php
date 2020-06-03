@extends('template')

@section('main')
@include('_partial.flash_message')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Siswa</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-start">
                <a href="siswa/create" class="btn btn-primary mb-4">Tambah Siswa</a>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa_list as $siswa)
                    <tr>
						<td> {{ $siswa->id }} </td>
                        <td> {{ $siswa->nisn }} </td>
						<td> {{ $siswa->nama_siswa }} </td>
						<td> {{ $siswa->kelas->nama_kelas }} </td>
						<td> {{ $siswa->tanggal_lahir -> format('d-m-Y') }} </td>
						<td> {{ $siswa->jenis_kelamin }} </td>
						<td> {{ !empty($siswa->telepon->nomor_telepon) ? $siswa->telepon->nomor_telepon : '-' }} </td>
						<td>
							<div class="row">
								<div class="col-sm-4">
									{{ link_to('siswa/' . $siswa->id , 'Detail' , ['class' => 'btn btn-info btn-sm']) }}
								</div>
								<div class="col-sm-4">
									{{ link_to('siswa/' . $siswa->id . '/edit' ,'Edit' , ['class' => 'btn btn-warning btn-sm']) }}
								</div>
								<div class="col-sm-4">
									{!! Form::open(['method' => 'DELETE' , 'action' => ['SiswaController@destroy' , $siswa -> id]]) !!}
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