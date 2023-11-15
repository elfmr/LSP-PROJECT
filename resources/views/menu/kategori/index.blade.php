@extends('layouts.main', ['title' => 'Kategori', 'page_heading' => 'Kategori Surat'])

@section('contents')
<section class="row">	
	
	@include('utilities.alert-flash-message')
    <label class="form-label">Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.</label>
    <label class="form-label">klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.</label><br>
    <label class="form-label">       </label>

	<div class="col card px-3 py-3">

		<div class="table-responsive">
			<table class="table table-sm w-100" id="datatable">
				<thead>
					<tr>
						<th scope="col">ID Kategori</th>
						<th scope="col">Nama Kategori</th>
						<th scope="col">Keterangan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div><br>

		<div class="d-flex justify-content-start pb-3">
			<div class="btn-group d-gap gap-2">
				<a href="{{ route('kategori.create') }}" class="btn btn-primary">
					<i class="bi bi-plus-circle"></i> Tambah Kategori Baru..
				</a>
			</div>
		</div>
	</div>
</section>
@endsection


@push('js')
@include('menu.kategori.script')
@endpush