@extends('layouts.app')

@section('content')

<body style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('{{ asset('img/bg6.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-gradient text-white text-center py-4" style="background: gray">
                    <h1 class="fw-bold">Selamat Datang di Akro Guitar!</h1>
                </div>
                <div class="card-body text-center bg-light">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <h2 style="color:black"><b>Hai, {{ Auth::user()->name }}!</b></h2>
                    <h3 class="text-muted">Terima kasih telah bergabung bersama kami di <strong>Akro Guitar</strong>.</h3>

                   
                </div>
                <div class="card-footer text-center bg-white py-3">
                    <small class="text-muted">AkroGuitar © {{ date('Y') }} - Semua Hak Dilindungi</small>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection