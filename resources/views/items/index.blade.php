@extends('layouts.app')

@section('content')

<body style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('{{ asset('img/bg6.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <!-- Search Form -->
        <form action="{{ route('items.index') }}" method="GET" class="w-50 mx-auto mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control border-0 small" placeholder="cari barang" value="{{ request('search') }}" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i> Search
                    </button>
                </div>
            </div>
        </form>

    @if($items->isEmpty())
       <div class="row justify-content-center">
           <div class="col-auto">

               <svg xmlns="http://www.w3.org/2000/svg" width="500" height="640.51678" viewBox="0 0 843.57946 640.51678" xmlns:xlink="http://www.w3.org/1999/xlink" role="img" artist="Katerina Limpitsouni" source="https://undraw.co/">
                   <path d="M602.65363,129.74161H226.33527a48.17928,48.17928,0,0,0-48.125,48.12512V619.74252a48.17923,48.17923,0,0,0,48.125,48.12506H602.65363a48.17923,48.17923,0,0,0,48.125-48.12506V177.86673A48.17928,48.17928,0,0,0,602.65363,129.74161Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M602.65412,143.59579H226.33527a34.30948,34.30948,0,0,0-34.271,34.27094V619.74252a34.30946,34.30946,0,0,0,34.271,34.27088H602.65412a34.30937,34.30937,0,0,0,34.27051-34.27088V177.86673A34.30938,34.30938,0,0,0,602.65412,143.59579Z" transform="translate(-178.21027 -129.74161)" fill="#fff" />
                   <path d="M546.01784,272.08142H355.71616a8.01411,8.01411,0,0,1,0-16.02822H546.01784a8.01411,8.01411,0,1,1,0,16.02822Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M579.07606,299.12906H355.71616a8.01412,8.01412,0,0,1,0-16.02823h223.3599a8.01412,8.01412,0,0,1,0,16.02823Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M546.01784,393.29489H355.71616a8.01411,8.01411,0,0,1,0-16.02822H546.01784a8.01411,8.01411,0,1,1,0,16.02822Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M579.07606,420.34253H355.71616a8.01412,8.01412,0,0,1,0-16.02823h223.3599a8.01412,8.01412,0,0,1,0,16.02823Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M546.01784,514.50836H355.71616a8.01411,8.01411,0,0,1,0-16.02823H546.01784a8.01412,8.01412,0,1,1,0,16.02823Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M579.07606,541.556H355.71616a8.01412,8.01412,0,0,1,0-16.02823h223.3599a8.01412,8.01412,0,0,1,0,16.02823Z" transform="translate(-178.21027 -129.74161)" fill="#f2f2f2" />
                   <path d="M313.08745,311.40753H245.7415a3.847,3.847,0,0,1-3.84277-3.84277V247.61749a3.847,3.847,0,0,1,3.84277-3.84277h67.34595a3.847,3.847,0,0,1,3.84277,3.84277v59.94727A3.847,3.847,0,0,1,313.08745,311.40753Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M313.08745,432.621H245.7415a3.847,3.847,0,0,1-3.84277-3.84277V368.831a3.847,3.847,0,0,1,3.84277-3.84277h67.34595a3.847,3.847,0,0,1,3.84277,3.84277v59.94727A3.847,3.847,0,0,1,313.08745,432.621Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M313.08745,553.83447H245.7415a3.847,3.847,0,0,1-3.84277-3.84277V490.04443a3.847,3.847,0,0,1,3.84277-3.84277h67.34595a3.847,3.847,0,0,1,3.84277,3.84277V549.9917A3.847,3.847,0,0,1,313.08745,553.83447Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M934.16522,547.652l2.98548-26.10867,14.969-130.90768,2.98548-26.10867a48.17929,48.17929,0,0,0-42.34617-53.28082L573.09668,272.40642a48.17924,48.17924,0,0,0-53.28086,42.346l-.00771.06744L498.88352,497.81005l-.00771.06744a48.17923,48.17923,0,0,0,42.34611,53.2808L880.8843,589.99806A48.17929,48.17929,0,0,0,934.16522,547.652Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M920.40067,546.07857l3.5361-30.924,13.86792-121.278,3.536-30.92349a34.30948,34.30948,0,0,0-30.1556-37.94256L571.52276,286.17073a34.30948,34.30948,0,0,0-37.94245,30.15568l-.00771.06743L512.648,499.384l-.00776.06792A34.30934,34.30934,0,0,0,542.79584,537.394l339.66238,38.83977A34.30936,34.30936,0,0,0,920.40067,546.07857Z" transform="translate(-178.21027 -129.74161)" fill="#fff" />
                   <path d="M864.80353,380.15794l-189.0696-21.61976a8.01412,8.01412,0,1,1,1.82093-15.92446l189.0696,21.61976a8.01412,8.01412,0,0,1-1.82093,15.92446Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M894.5749,410.78613,672.6611,385.4107a8.01412,8.01412,0,1,1,1.82094-15.92446l221.91379,25.37544a8.01411,8.01411,0,0,1-1.82093,15.92445Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M888.38764,464.38258,561.218,426.97133a8.01412,8.01412,0,0,1,1.82093-15.92446l327.16968,37.41125a8.01412,8.01412,0,1,1-1.82094,15.92446Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M886.36619,491.37532l-328.221-37.53147a8.01412,8.01412,0,0,1,1.82093-15.92446l328.221,37.53147a8.01412,8.01412,0,0,1-1.82093,15.92446Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M882.36643,517.03944,555.19676,479.62819a8.01412,8.01412,0,1,1,1.82093-15.92446L884.18736,501.115a8.01412,8.01412,0,0,1-1.82093,15.92446Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M880.345,544.03218l-328.221-37.53147a8.01412,8.01412,0,0,1,1.82093-15.92446l328.221,37.53147a8.01412,8.01412,0,1,1-1.82093,15.92446Z" transform="translate(-178.21027 -129.74161)" fill="#e6e6e6" />
                   <path d="M628.91345,392.76672l-66.90992-7.651a3.847,3.847,0,0,1-3.38133-4.25447l6.81048-59.55914a3.847,3.847,0,0,1,4.25446-3.38133l66.90993,7.651a3.847,3.847,0,0,1,3.38132,4.25446l-6.81047,59.55915A3.847,3.847,0,0,1,628.91345,392.76672Z" transform="translate(-178.21027 -129.74161)" fill="#0d84e2" />
                   <path d="M1020.78973,770.09988h-219a1,1,0,0,1,0-2h219a1,1,0,0,1,0,2Z" transform="translate(-178.21027 -129.74161)" fill="#3f3d56" />
                   <path d="M938.55609,388.06207a9.37695,9.37695,0,0,0,8.41945,11.6556l6.77492,20.32879,13.35789-1.10405-9.9707-28.5738a9.42779,9.42779,0,0,0-18.58156-2.30654Z" transform="translate(-178.21027 -129.74161)" fill="#ffb8b8" />
                   <path d="M948.78649,521.187l0,0a12.08366,12.08366,0,0,0,19.9793-6.32315l10.57975-48.473a47.876,47.876,0,0,0-1.23439-24.98L965.7291,403.23538a4,4,0,0,0-5.59557-2.34269l-8.08121,4.04582a4,4,0,0,0-2.05021,4.69365l.81477,2.802a134.70325,134.70325,0,0,1,1.02888,71.4844l-6.58107,25.33A12.08364,12.08364,0,0,0,948.78649,521.187Z" transform="translate(-178.21027 -129.74161)" fill="#0d84e2" />
                   <polygon points="728.243 629.901 716.811 629.9 711.374 585.804 728.247 585.805 728.243 629.901" fill="#ffb8b8" />
                   <path d="M708.64439,626.63322H730.6922a0,0,0,0,1,0,0v13.88195a0,0,0,0,1,0,0H694.76246a0,0,0,0,1,0,0v0A13.88193,13.88193,0,0,1,708.64439,626.63322Z" fill="#2f2e41" />
                   <polygon points="789.864 629.901 778.432 629.9 772.995 585.804 789.868 585.805 789.864 629.901" fill="#ffb8b8" />
                   <path d="M770.26564,626.63322h22.04781a0,0,0,0,1,0,0v13.88195a0,0,0,0,1,0,0H756.38371a0,0,0,0,1,0,0v0A13.88193,13.88193,0,0,1,770.26564,626.63322Z" fill="#2f2e41" />
                   <circle cx="756.38308" cy="291.8647" r="24.56103" fill="#ffb8b8" />
                   <path d="M850.61084,581.78436a9.377,9.377,0,0,1,12.09228-7.77927l13.72625-16.45445,12.03377,5.90259-19.71048,22.96462a9.42779,9.42779,0,0,1-18.14182-4.63349Z" transform="translate(-178.21027 -129.74161)" fill="#ffb8b8" />
                   <path d="M940.57354,446.16634a26.205,26.205,0,1,0-4.91018-51.82531c-5.40118-3.27952-11.6809-5.48627-17.97478-4.925s-12.51835,4.29788-14.87192,10.16207.17487,13.59411,6.02708,15.97731c3.75184,1.52786,7.98866.78692,11.99255.1708s8.37171-1.01817,11.85634,1.04774,5.05107,7.60548,1.93026,10.18835a10.73847,10.73847,0,0,0-3.0842,11.82027C933.10715,442.83887,937.38805,446.09752,940.57354,446.16634Z" transform="translate(-178.21027 -129.74161)" fill="#2f2e41" />
                   <path d="M971.04643,580.81327l4.35678,165.33964a4,4,0,0,1-4.20243,4.10017l-14.35213-.73225a4,4,0,0,1-3.74658-3.36683L936.031,638.76494a2,2,0,0,0-3.92705-.12222l-23.10758,103.3966a4,4,0,0,1-5.24374,2.89644l-14.24374-.87a4,4,0,0,1-2.64986-4.05306l12.434-160.76415Z" transform="translate(-178.21027 -129.74161)" fill="#2f2e41" />
                   <path d="M978.03835,502.28255c2.403-25.05537-16.01923-47.71792-41.12634-49.5007-10.81772-.76813-27.61219-1.04273-33.14841,13.13648-16.6774,42.71375,12.51774,41.67582,2.45884,78.68292s-18.94294,39.128-5.14121,41.80029,75.86671,18.447,73.31817-7.60005C972.83287,562.79095,975.64139,527.27536,978.03835,502.28255Z" transform="translate(-178.21027 -129.74161)" fill="#0d84e2" />
                   <path d="M908.71686,461.57372l0,0a12.08366,12.08366,0,0,1,16.29393,13.1781l-7.8391,48.991a47.876,47.876,0,0,1-10.26518,22.80677L881.44705,577.5737a4,4,0,0,1-6.06458.13914L869.335,570.997a4,4,0,0,1-.196-5.11813l1.78109-2.31142a134.7031,134.7031,0,0,0,27.04467-66.179l3.11643-25.98473A12.08366,12.08366,0,0,1,908.71686,461.57372Z" transform="translate(-178.21027 -129.74161)" fill="#0d84e2" />
               </svg>
           </div>
       </div>
       <p style="text-align: center;font-size:25px;font-family:'Popins',sans-serif;color:white;font-weight:bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Saat ini tidak ada barang tersedia!</p></br>
    @else<!-- Item Table -->

        <!-- Title -->
        <h3 class="my-4 text-center text-white" style="font-weight: 700; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">
            DAFTAR BARANG
        </h3>

        <!-- Add Button for Admin -->
        @hasrole('admin')
        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createItemModal">+ Tambahkan Daftar</button>
        @endhasrole

        <!-- Items List -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($items as $item)
            <div class="col">
                <div class="card h-100 shadow-lg">
                    <div class="position-relative">
                        <img src="{{ asset('storage/'. $item->photo) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover; filter: brightness(50%);">
                        <div class="card-img-overlay text-white d-flex align-items-center justify-content-center text-center font-weight-bold">
                            {{ $item->name }}
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Deskripsi:</strong> {{ $item->description }}</p>
                        <p class="card-text"><strong>Tipe:</strong> {{ $item->type }}</p>
                        <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($item->price, 2) }}</p>
                        <p class="card-text"><strong>Stok:</strong> <span class="badge bg-success">{{ $item->stock }} Unit</span></p>
                        @hasrole('admin')
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editItemModal{{ $item->id }}">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </div>
                        @endhasrole
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



        @foreach($items as $item)
        <!-- Edit Item Modal for each item -->
        <div class="modal fade" id="editItemModal{{ $item->id }}" tabindex="-1" aria-labelledby="editItemModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editItemModalLabel{{ $item->id }}">Edit Daftar Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi Barang</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $item->description }}</textarea>
                            </div>
                           
                            <div class="mb-3">
                                <label for="description" class="form-label">Tipe Barang</label>
                                <input type = "text" class="form-control" id="type" name="type" required>{{ $item->type }}</input>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}" step="0.01" required>
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Gambar Barang</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Apakah Anda yakin ingin menghapus item ini?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <!-- Form penghapusan -->
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


    @endforeach
    @endif

    <!-- Create Item Modal -->
    <div class="modal fade" id="createItemModal" tabindex="-1" aria-labelledby="createItemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createItemModalLabel">Tambah Daftar Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Barang</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>

                        <div class="mb-3">
                                <label for="type" class="form-label">Tipe Barang</label>
                                <input type = "text"class="form-control" id="type" name="type" ></input>
                            </div> 

                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Gambar Barang</label>
                            <input type="file" class="form-control" id="photo" name="photo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
   
<style>
    .card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    .card-img-overlay {
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 1.2rem;
        font-weight: bold;
    }
    .card-body {
        font-family: 'Poppins', sans-serif;
        color: black;
    }
    .btn-custom {
        border-radius: 20px;
        transition: all 0.3s;
    }
    .btn-custom:hover {
        transform: translateY(-2px);
    }
</style>

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("form").forEach(form => {
        // Nonaktifkan validasi bawaan HTML5
        form.setAttribute("novalidate", "true");

        form.addEventListener("submit", function (event) {
            let isValid = true;
            let missingFields = [];

            // Ambil semua input yang wajib diisi
            let requiredFields = form.querySelectorAll("input[required], select[required], textarea[required]");

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add("is-invalid"); // Tambah border merah
                    let label = field.previousElementSibling ? field.previousElementSibling.innerText : "Field tidak diketahui";
                    missingFields.push(label);
                } else {
                    field.classList.remove("is-invalid"); // Hapus border merah jika diisi
                }
            });

            // Cek input file (Gambar Barang)
            let fileInput = form.querySelector("input[type='file'][required]");
            if (fileInput && fileInput.files.length === 0) {
                isValid = false;
                fileInput.classList.add("is-invalid");
                missingFields.push("Gambar Barang harus diunggah");
            } else {
                fileInput.classList.remove("is-invalid");
            }

            if (!isValid) {
                event.preventDefault(); // Mencegah submit jika ada yang kosong
                
                // Tampilkan SweetAlert2 dengan daftar field yang belum diisi
                Swal.fire({
                    icon: "warning",
                    title: "⚠️ Oops... Ada yang belum diisi!",
                    html: `
                        <b>Harap isi semua field yang wajib:</b>
                        <ul style='text-align:left; margin-top:10px;'>
                            ${missingFields.map(field => `<li>${field}</li>`).join("")}
                        </ul>
                    `,
                    confirmButtonText: "OK, Saya Mengerti",
                    confirmButtonColor: "#d33"
                });
            }
        });
    });

    // Hapus tanda error jika user mulai mengisi
    document.querySelectorAll("input, select, textarea").forEach(field => {
        field.addEventListener("input", function () {
            if (this.value.trim()) {
                this.classList.remove("is-invalid");
            }
        });
    });

    // Hapus tanda error untuk file input ketika ada file yang dipilih
    document.querySelectorAll("input[type='file']").forEach(fileInput => {
        fileInput.addEventListener("change", function () {
            if (this.files.length > 0) {
                this.classList.remove("is-invalid");
            }
        });
    });
});
document.querySelectorAll("form").forEach(form => {
    form.setAttribute("novalidate", "true");
});

</script>


    @endsection