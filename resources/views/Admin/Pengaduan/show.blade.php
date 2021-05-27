@extends('layouts.admin')
@section('title', 'Detail Pengaduan')
@section('css')
<style>
    .text-primary:hover {
        text-decoration: underline;
    }

    .text-grey {
        color: #6c757d;
    }

    .text-primary:hover {
        color: #6c607d;
    }
</style>
@endsection
@section('header')
<a href="{{ route('pengaduan.index') }}" class="text-primary">Data Pengaduan</a>
<a href="#" class="text-grey">/</a>
<a href="#" class="text-grey">Detail Pengaduan</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">Pengaduan Masyarakat</div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td>{{ $pengaduan->nik }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pengaduan</th>
                            <td>:</td>
                            <td>{{ $pengaduan->tgl }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>:</td>
                            <td><img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto pengaduan" class="embed-responsive"></td>
                        </tr>
                        <tr>
                            <th>Isi Laporan</th>
                            <td>:</td>
                            <td>{{ $pengaduan->isi }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>
                                @if ($pengaduan->status = '0')
                                <a href="#" class="badge bg-danger text-white">Pending</a>
                                @elseif ($pengaduan->status = 'proses')
                                <a href="#" class="badge bg-warning text-white">Proses</a>
                                @else
                                <a href="#" class="badge bg-success text-white">Selesai</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <div class="text-center">Tanggapan Petugas</div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <div class="input-group mb-3">
                            <select name="status" id="status" class="custom-select">
                                <option value="0">Pending</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
