@extends('layouts.app')

@section('title', 'New Schedule')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Registration</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Registrations</a></div>
                    <div class="breadcrumb-item">New Registrations</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('registration.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Registrations</h4>
                        </div>

                        <div class="card-body">
                            @foreach(['no_pendaftaran', 'nisn', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'asal_sekolah', 'jenis_kelamin', 'jurusan', 'nama_ayah', 'pekerjaan_ayah', 'nama_ibu', 'pekerjaan_ibu', 'penghasilan_orang_tua'] as $field)
                                <div class="form-group">
                                    <label>{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                                    <input type="{{ $field == 'tanggal_lahir' ? 'date' : 'text' }}"
                                        class="form-control @error($field) is-invalid @enderror"
                                        name="{{ $field }}">
                                    @error($field)
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach

                            <div class="form-group">
                                <label for="foto">Foto:</label>
                                <input type="file" id="foto" name="foto" class="form-control-file">
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
