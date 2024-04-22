@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('education.index') }}" class="btn btn-secondary">
        << kembali</a>
    </div>
    
    <form action="{{ route('education.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Institution</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Institution" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Degree</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Degree" value="{{ $data->info1 }}">
        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Faculty</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info2"
                id="info2"
                aria-describedby="helpId"
                placeholder="Faculty" value="{{ $data->info2 }}">
        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">GPA</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info3"
                id="info3"
                aria-describedby="helpId"
                placeholder="GPA" value="{{ $data->info3 }}">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyyy" value="{{ $data->tgl_mulai }}"></div>
                <div class="col-auto">Tanggal akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_selesai" placeholder="dd/mm/yyyy" value="{{ $data->tgl_akhir }}"></div>
            </div>
        </div>  
        <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
    </form>
@endsection