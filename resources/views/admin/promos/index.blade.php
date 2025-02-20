@extends('layouts.app')

@section('content')
<body style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('{{ asset('img/bg6.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">


<div class="container">
    <br>
    <h3 class="my-4 text-center" style="font-family: 'Bold', sans-serif; font-weight: 700; color: white; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">
        KODE PROMO
    </h3>
    <br>
    @hasrole('admin')
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPromoModal">+ Tambah Promo</button> <br> <br>
    @endhasrole
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">
                    <i class="fas fa-tag"></i> Kode Promo
                </th>
                <th class="text-center">
                    <i class="fas fa-percent"></i> Diskon (%)
                </th>
                @hasrole('admin')
                <th class="text-center">
                    <i class="fas fa-cogs"></i> Aksi
                </th>
                @endhasrole
            </tr>
        </thead>
        <tbody>
            @foreach($promos as $promo)
                <tr>
                    <td>{{ $promo->code }}</td>
                    <td>{{ $promo->discount_percentage }}%</td>
                    @hasrole('admin')
                    <td>                        
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPromoModal{{ $promo->id }}">Edit</button>
                        <form action="{{ route('promos.destroy', $promo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus promo ini?')">Delete</button>
                        </form>
                    </td>
                    @endhasrole
                </tr>

                <!-- Modal Edit Promo -->
                <div class="modal fade" id="editPromoModal{{ $promo->id }}" tabindex="-1" aria-labelledby="editPromoModalLabel{{ $promo->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editPromoModalLabel{{ $promo->id }}">Edit Promo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('promos.update', $promo->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="code" class="form-label">Kode Promo</label>
                                        <input type="text" class="form-control" name="code" value="{{ $promo->code }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="discount_percentage" class="form-label">Diskon (%)</label>
                                        <input type="number" class="form-control" name="discount_percentage" value="{{ $promo->discount_percentage }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

    <!-- Modal Tambah Promo -->
    <div class="modal fade" id="addPromoModal" tabindex="-1" aria-labelledby="addPromoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPromoModalLabel">Tambah Promo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('promos.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="promoCode" class="form-label">Kode Promo</label>
                            <input type="text" class="form-control" name="code" required>
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="form-label">Diskon (%)</label>
                            <input type="number" class="form-control" name="discount_percentage" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<style>
    /* Pastikan overlay ada di belakang konten */
    .table {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
        font-family: 'Arial', sans-serif;
        font-size: 14px;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: center;
    }

    .table th {
        background-color: #007bff;
        color: white;
        border: 1px solid #ddd;
    }

    .table td {
        border: 1px solid #ddd;
        color: #555;
    }

    /* Gaya untuk baris yang aktif atau dipilih */
    .table tr:hover {
        background-color: #f1f1f1;
    }

    /* Styling untuk badge status */
    .badge {
        padding: 6px 12px;
        font-size: 0.875rem;
        border-radius: 12px;
    }

    .bg-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .bg-success {
        background-color: #28a745;
        color: white;
    }

    /* Gaya tombol */
    .btn {
        padding: 6px 12px;
        font-size: 0.875rem;
        border-radius: 6px;
    }

    .btn-info {
        background-color: #17a2b8;
        color: white;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-warning {
        background-color: #ffc107;
        color: black;
        border: none;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    /* Modal styling */
    .modal-content {
        border-radius: 8px;
        background-color: #f8f9fa;
    }

    /* Styling untuk ikon dalam kolom tabel */
    .table i {
        font-size: 1.25rem;
        vertical-align: middle;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/2.1.0/showdown.min.js"></script>


@endsection
