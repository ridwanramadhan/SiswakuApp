@extends('template')

@section('main')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Siswa</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container-fluid">
                <div id="siswa">
                    <table class="table table-striped">
						<tr>
							<th>NISN</th>
							<th>{{ $siswa->nisn }}</th>
						</tr>
						<tr>
							<th>Nama</th>
							<th>{{ $siswa->nama_siswa }}</th>
						</tr>
						<tr>
							<th>Kelas</th>
							<th>{{ $siswa->kelas->nama_kelas }}</th>
						</tr>
						<tr>
							<th>Tanggal lahir</th>
							<th>{{ $siswa->tanggal_lahir -> format('d-m-Y')}}</th>
						</tr>
						<tr>
							<th>Jenis kelamin</th>
							<th>{{ $siswa->jenis_kelamin }}</th>
						</tr>
						<tr>
							<th>Telepon</th>
							<th>{{ !empty($siswa->telepon->nomor_telepon) ? $siswa->telepon->nomor_telepon : '-' }}</th>
						</tr>
						<tr>
							<th>Hobi</th>
							<th>
								@foreach($siswa -> hobi as $item)
									<span>{{ $item->nama_hobi }}</span>, 
								@endforeach
							</th>
						</tr>
						<tr>
							<th>Foto</th>
							<th>
								@if (isset($siswa->foto))
								<img class="img-rounded" width="150" src="{{ asset('fotoupload/' . $siswa->foto) }}">
								@else
									@if ($siswa->jenis_kelamin == 'L')
								<img width="150" src="{{ asset('fotoupload/dummymale.jpg') }}">
									@else
								<img width="150" src="{{ asset('fotoupload/dummyfemale.jpg') }}">
									@endif
								@endif
							</th>
						</tr>
					</table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
