@extends('layouts.app')

@section('content')


@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
@endpush

<body style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('{{ asset('img/bg6.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container">
        <form action="{{ route('customers.index') }}" method="GET" class="mb-4">
            <div class="input-group w-50 mx-auto">
                <input type="text" name="search" class="form-control border-0" placeholder="Search for a customer..." value="{{ request('search') }}" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i> Search
                    </button>
                </div>
            </div>
        </form>

        <h3 class="my-4 text-center text-white" style="font-family: 'Roboto', sans-serif; font-weight: 700; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            PELANGGAN
        </h3>

        <table class="table table-bordered table-striped text-center" style="font-family: 'Roboto', sans-serif; font-size: 1rem;">
            <thead class="bg-light">
                <tr>
                    <th><i class="bi bi-person-fill"></i> Nama</th>
                    <th><i class="bi bi-envelope-fill"></i> Email</th>
                    <th><i class="bi bi-telephone-fill"></i> No. Telp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<style>

.table {
    border-collapse: collapse;
    width: 100%;
    background-color: #fff;
    font-family: 'Arial', sans-serif;
    font-size: 14px;
    border-radius:50px;
}

.table th,
.table td {
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



@endsection
