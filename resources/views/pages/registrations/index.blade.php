@extends('layouts.app')

@section('title', 'registrations')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Registrations</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Registrations</a></div>
                    <div class="breadcrumb-item">All Registrations</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Registrations</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('registration.create') }}" class="btn btn-primary">New Registrations</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ ('registration.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>NO PENDAFTARAN</th>
                                            <th>NISN</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>TEMPAT LAHIR</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>ASAL SEKOLAH</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>ASAL JURUSAN</th>
                                            <th>NAMA AYAH</th>
                                            <th>PEKERJAAN AYAH</th>
                                            <th>NAMA IBU</th>
                                            <th>PEKERJAAN IBU</th>
                                            <th>PENGHASILAN ORANG TUA</th>
                                            <th>FOTO</th>
                                        </tr>
                                        @foreach ($registrations as $registration)
                                            <tr>
                                                <td>
                                                    {{ $registration->no_pendaftaran}}
                                                </td>
                                                <td>
                                                    {{ $registration->nisn }}
                                                </td>
                                                <td>
                                                    {{ $registration->nama }}
                                                </td>
                                                <td>
                                                    {{ $registration->alamat }}
                                                </td>
                                                <td>
                                                    {{ $registration->tempat_lahir }}
                                                </td>
                                                <td>
                                                    {{ $registration->tanggal_lahir }}
                                                </td>
                                                <td>
                                                    {{ $registration->asal_sekolah}}
                                                </td>
                                                <td>
                                                    {{ $registration->jenis_kelamin }}
                                                </td>
                                                <td>
                                                    {{ $registration->jurusan }}
                                                </td>
                                                <td>
                                                    {{ $registration->nama_ayah }}
                                                </td>
                                                <td>
                                                    {{ $registration->pekerjaan_ayah }}
                                                </td>
                                                <td>
                                                    {{ $registration->nama_ibu }}
                                                </td>
                                                <td>
                                                    {{ $registration->pekerjaan_ibu }}
                                                </td>
                                                <td>
                                                    {{ $registration->penghasilan_orang_tua }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('registration.edit', $registration->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('registration.destroy', $registration->id) }}" method="POST"
                                                            class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $registrations->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
