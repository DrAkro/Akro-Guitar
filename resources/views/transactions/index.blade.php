@extends('layouts.app')

@section('content')

<body style="background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('{{ asset('img/bg6.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">


    <div class="container">

        <form action="{{ route('transactions.index') }}" method="GET">
            <div class="input-group w-50 mx-auto mb-4">
                <input type="text" name="search" class="form-control border-0 small" placeholder="cari transaksi" value="{{ request('search') }}" style="background-color: rgba(255, 255, 255, 0.8);">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i> Search
                    </button>
                </div>
            </div>
        </form>
        <h3 class="my-4 text-center" style="font-family: 'Bold', sans-serif; font-weight: 700; color: white; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">
            TRANSAKSI
        </h3>
        </br>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTransactionModal" style="text-align:center; color:whitesmoke; font-family: 'Poopy', sans-serif;">+ Tambah Transaksi</a>
        </br>
        </br>
    @if($transactions->isEmpty())
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="500" height="708.99962" viewBox="0 0 928.79134 708.99962" xmlns:xlink="http://www.w3.org/1999/xlink" role="img" artist="Katerina Limpitsouni" source="https://undraw.co/">
                <path d="M500.19417,242.0498l3.39014.83c-1.52978.22-3.06006.43-4.58984.62h-56.54q-6.36036-.81-12.6499-2a197.13567,197.13567,0,0,1-70.96-28.11c-13.27-8.63-25.92042-19.24-32.79-33.49-9.33008-19.35-6.07032-43.85,7.25-60.7a60.77244,60.77244,0,0,1,17.58984-15c1.00977-.58,2.02978-1.13,3.06982-1.65a66.06036,66.06036,0,0,1,36.49024-6.68c21.3501,2.33,41.0498,15.37,52.41992,33.59,12.56982,20.12,14.98,44.74,17.08008,68.37,3.81006-12.26,18.10986-19.75,30.65967-17.04,12.54,2.7,22.22021,14.41,23.78027,27.15,1.52978,12.46-4.12988,25.25-13.56006,33.56C500.62435,241.6798,500.41439,241.8698,500.19417,242.0498Z" transform="translate(-135.60433 -95.50019)" fill="#f2f2f2" />
                <path d="M456.59457,243.49981h-2.83008a2.05917,2.05917,0,0,1-.62989-.85c-.16015-.38-.31-.77-.48046-1.15a342.77857,342.77857,0,0,0-30.91993-58.27,345.22186,345.22186,0,0,0-70.16992-77.55,1.61386,1.61386,0,0,1-.66992-1.48,2.17771,2.17771,0,0,1,3.52-1.37,345.7688,345.7688,0,0,1,48.25,47.92,351.18726,351.18726,0,0,1,38.06006,56.32,348.99774,348.99774,0,0,1,16.27,34.43c.00976.03.02.05.02978.08A1.55713,1.55713,0,0,1,456.59457,243.49981Z" transform="translate(-135.60433 -95.50019)" fill="#fff" />
                <path d="M693.60433,241.49981h-539a19.01722,19.01722,0,0,0-19,19v58a19.01722,19.01722,0,0,0,19,19h539a19.01722,19.01722,0,0,0,19-19v-58A19.01722,19.01722,0,0,0,693.60433,241.49981Zm17,77a17.02411,17.02411,0,0,1-17,17h-539a17.02411,17.02411,0,0,1-17-17v-58a17.0241,17.0241,0,0,1,17-17h539a17.0241,17.0241,0,0,1,17,17Z" transform="translate(-135.60433 -95.50019)" fill="#3f3d56" />
                <path d="M693.60433,474.49981h-539a19.02162,19.02162,0,0,1-19-19v-58a19.02162,19.02162,0,0,1,19-19h539a19.02162,19.02162,0,0,1,19,19v58A19.02162,19.02162,0,0,1,693.60433,474.49981Zm-539-94a17.01908,17.01908,0,0,0-17,17v58a17.01909,17.01909,0,0,0,17,17h539a17.01917,17.01917,0,0,0,17-17v-58a17.01916,17.01916,0,0,0-17-17Z" transform="translate(-135.60433 -95.50019)" fill="#3f3d56" />
                <path d="M693.60433,611.49981h-539a19.02162,19.02162,0,0,1-19-19v-58a19.02162,19.02162,0,0,1,19-19h539a19.02162,19.02162,0,0,1,19,19v58A19.02162,19.02162,0,0,1,693.60433,611.49981Zm-539-94a17.01908,17.01908,0,0,0-17,17v58a17.01909,17.01909,0,0,0,17,17h539a17.01917,17.01917,0,0,0,17-17v-58a17.01916,17.01916,0,0,0-17-17Z" transform="translate(-135.60433 -95.50019)" fill="#3f3d56" />
                <path d="M243.435,321.99981h-32a16.51867,16.51867,0,0,1-16.5-16.5v-32a16.51866,16.51866,0,0,1,16.5-16.5h32a16.51867,16.51867,0,0,1,16.5,16.5v32A16.51868,16.51868,0,0,1,243.435,321.99981Z" transform="translate(-135.60433 -95.50019)" fill="#0d84e2" />
                <path d="M644.77365,316.49981h-353a8,8,0,1,1,0-16h353a8,8,0,0,1,0,16Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <path d="M529.77365,282.49981h-238a8,8,0,1,1,0-16h238a8,8,0,0,1,0,16Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <path d="M243.435,458.99981h-32a16.51867,16.51867,0,0,1-16.5-16.5v-32a16.51866,16.51866,0,0,1,16.5-16.5h32a16.51867,16.51867,0,0,1,16.5,16.5v32A16.51868,16.51868,0,0,1,243.435,458.99981Z" transform="translate(-135.60433 -95.50019)" fill="#0d84e2" />
                <path d="M644.77365,453.49981h-353a8,8,0,1,1,0-16h353a8,8,0,0,1,0,16Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <path d="M529.77365,419.49981h-238a8,8,0,1,1,0-16h238a8,8,0,0,1,0,16Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <path d="M243.435,595.99981h-32a16.51867,16.51867,0,0,1-16.5-16.5v-32a16.51866,16.51866,0,0,1,16.5-16.5h32a16.51867,16.51867,0,0,1,16.5,16.5v32A16.51868,16.51868,0,0,1,243.435,595.99981Z" transform="translate(-135.60433 -95.50019)" fill="#0d84e2" />
                <path d="M644.77365,590.49981h-353a8,8,0,1,1,0-16h353a8,8,0,0,1,0,16Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <path d="M529.77365,556.49981h-238a8,8,0,1,1,0-16h238a8,8,0,0,1,0,16Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <circle cx="570" cy="151.99962" r="23" fill="#3f3d56" />
                <path d="M714.60433,256.99981a.99636.99636,0,0,1-.707-.293l-18-18a.99989.99989,0,0,1,1.41406-1.41406l18,18a1,1,0,0,1-.707,1.707Z" transform="translate(-135.60433 -95.50019)" fill="#fff" />
                <path d="M696.60433,256.99981a1,1,0,0,1-.707-1.707l18-18a.99989.99989,0,0,1,1.41406,1.41406l-18,18A.99636.99636,0,0,1,696.60433,256.99981Z" transform="translate(-135.60433 -95.50019)" fill="#fff" />
                <circle cx="801.50979" cy="370.96736" r="53.51916" fill="#0d84e2" />
                <path d="M941.047,797.31337V674.29872a6.50753,6.50753,0,0,1,6.5-6.5h14.75927a6.50753,6.50753,0,0,1,6.5,6.5V797.31337a6.50753,6.50753,0,0,1-6.5,6.5H947.547A6.50753,6.50753,0,0,1,941.047,797.31337Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <path d="M909.85457,797.31337V674.29872a6.50753,6.50753,0,0,1,6.5-6.5h14.75977a6.50753,6.50753,0,0,1,6.5,6.5V797.31337a6.50753,6.50753,0,0,1-6.5,6.5H916.35457A6.50753,6.50753,0,0,1,909.85457,797.31337Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <path d="M971.25391,688.76074h-67.0625a7.00848,7.00848,0,0,1-7-7V572.81641a40.53125,40.53125,0,0,1,81.0625,0V681.76074A7.00849,7.00849,0,0,1,971.25391,688.76074Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <path d="M891.91854,490.12587l.05566-2c-3.7207-.10352-7.001-.33692-9.46582-2.1377a6.14794,6.14794,0,0,1-2.38134-4.52832,3.51432,3.51432,0,0,1,1.15283-2.89453c1.63623-1.38183,4.269-.93457,6.188-.05469l1.65478.75879L885.9493,456.079l-1.98144.27149,2.69921,19.72656c-2.60742-.7666-5.02343-.43652-6.67822.96094a5.471,5.471,0,0,0-1.86035,4.49219,8.13264,8.13264,0,0,0,3.2002,6.07324C884.49569,489.91786,888.61141,490.0331,891.91854,490.12587Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <rect x="761.79272" y="362.55146" width="10.77148" height="2" fill="#2f2e41" />
                <path d="M958.28617,681.68519a6.454,6.454,0,0,1-2.09233-4.51374l-5.09556-122.90769a6.49951,6.49951,0,0,1,6.22489-6.7636l14.74722-.61181a6.50621,6.50621,0,0,1,6.763,6.22529l5.09587,122.90874a6.50779,6.50779,0,0,1-6.22537,6.76352l-14.74657.61093a6.56066,6.56066,0,0,1-1.40471-.09143A6.4526,6.4526,0,0,1,958.28617,681.68519Z" transform="translate(-135.60433 -95.50019)" fill="#0d84e2" />
                <path d="M977.10433,598.49981h-24a6.50737,6.50737,0,0,1-6.5-6.5v-34a18.5,18.5,0,0,1,37,0v34A6.50737,6.50737,0,0,1,977.10433,598.49981Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <path d="M822.98329,644.04818l-9.40872-11.37148a6.50781,6.50781,0,0,1,.86443-9.15168l94.78089-78.41626a6.50409,6.50409,0,0,1,9.15129.86413l9.40851,11.37255a6.49953,6.49953,0,0,1-.86482,9.15138L832.135,644.91261a6.50668,6.50668,0,0,1-8.1442.1187A6.561,6.561,0,0,1,822.98329,644.04818Z" transform="translate(-135.60433 -95.50019)" fill="#0d84e2" />
                <path d="M892.87969,592.9723l-15.20318-18.5705a6.50737,6.50737,0,0,1,.912-9.147l26.3082-21.53783a18.5,18.5,0,1,1,23.43824,28.62951l-26.30821,21.53784A6.50736,6.50736,0,0,1,892.87969,592.9723Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <path id="ae0384b4-8122-4d33-856d-77d2fa9820c7-1762" data-name="Path 22" d="M828.29043,597.48851l-.26957.23594-6.46377-7.38492a5.68037,5.68037,0,0,0-8.01556-.53316L797.895,603.50119a5.68039,5.68039,0,0,0-.53316,8.01557l35.46135,40.515a5.68037,5.68037,0,0,0,8.01556.53316l15.64648-13.69482a5.68039,5.68039,0,0,0,.5331-8.01551l-24.39654-27.87331.26957-.23594Z" transform="translate(-135.60433 -95.50019)" fill="#3f3d56" />
                <path id="afaa2d2f-7dd7-4c5b-bc7f-9a7e6e58aedc-1763" data-name="Path 23" d="M815.27036,592.16578l-1.94794,1.705a1.92232,1.92232,0,0,1,.4048,3.16517l-8.5499,7.48344a1.92233,1.92233,0,0,1-3.08355-.82057l-1.8195,1.59255a4.04623,4.04623,0,0,0-.37978,5.70962l33.77525,38.58859a4.04624,4.04624,0,0,0,5.70962.37978l14.9961-13.12556a4.04624,4.04624,0,0,0,.37977-5.70962h0L820.97992,592.5455a4.04623,4.04623,0,0,0-5.70956-.37972Z" transform="translate(-135.60433 -95.50019)" fill="#fff" />
                <path d="M950.53169,475.529c2.78683-4.65587,4.96791-9.7857,3.93265-15.30212-.92443-4.9259-4.46936-8.76216-9.56673-9.26567-3.06967-.30322-6.12471.51626-9.12294,1.05a34.24631,34.24631,0,0,1-7.4479.48246,36.994,36.994,0,0,1-14.45115-3.66415,35.46924,35.46924,0,0,1-19.05641-22.33138c-3.04174-11.07379-.78337-23.64866,6.44032-32.6626l-2.50708-.66191,3.26431,10.72432a1.51518,1.51518,0,0,0,2.2035.89644,51.66423,51.66423,0,0,1,40.20064-6.42726,48.94659,48.94659,0,0,1,11.031,4.24283c1.70393.9059,3.22136-1.68278,1.51416-2.59042a54.69734,54.69734,0,0,0-42.91465-3.28751A52.21464,52.21464,0,0,0,902.7061,402.204l2.2035.89645-3.26431-10.72431a1.512,1.512,0,0,0-2.50708-.66191A40.20718,40.20718,0,0,0,890.897,422.197a37.94018,37.94018,0,0,0,16.42865,26.31876,40.45779,40.45779,0,0,0,30.55368,6.14207c2.93591-.56438,6.26537-1.37229,9.14605-.14293a7.90019,7.90019,0,0,1,4.234,5.20761c1.63237,5.53132-1.14517,10.78409-3.98245,15.38331Z" transform="translate(-135.60433 -95.50019)" fill="#2f2e41" />
                <path d="M923.72079,580.75225l-.03711-.00049a2.46566,2.46566,0,0,1-2.39893-1.92724l.19556-41.66846a2.5351,2.5351,0,0,1,1.40039-2.853c7.25342-3.40723,14.74853-3.86523,22.91333-1.39746a2.5016,2.5016,0,0,1,1.70654,3.04248L926.13509,578.8919A2.46505,2.46505,0,0,1,923.72079,580.75225Z" transform="translate(-135.60433 -95.50019)" fill="#ccc" />
                <path d="M1063.39567,804.49981h-248a1,1,0,0,1,0-2h248a1,1,0,0,1,0,2Z" transform="translate(-135.60433 -95.50019)" fill="#3f3d56" />
                </svg>
                <p style="text-align: center;font-size:25px;font-family:'Popins',sans-serif;color:white;font-weight:bold;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Saat ini data sedang kosong!</p></br>
            </div>
        </div>
    @else
        <table class="table table-bordered table-striped" style="font-family: 'Poopy', sans-serif; font-size: 1.0rem; font-weight : bold">
            <thead>
                <tr style="background-color: #f8f9fa; text-align: center;">
                    <th>ID</th>
                    <th><i class="bi bi-person-fill"></i></br>Nama Pelanggan</th>
                    <th><i class="bi bi-clipboard-fill"></i></br>Keterangan</th>
                    <th><i class="bi bi-tag-fill"></i></br>Total Harga</th>
                    <th><i class="bi bi-calendar-x"></i></br>Tanggal Transaksi</th>
                    <th><i class="bi bi-clipboard-fill"></i></br>Detail Transaksi</th>
                    <th><i class="bi bi-hourglass-split"></i></br>Status</th>
                    <th><i class="fas fa-cogs"></i></br>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $index => $transaction)
                <tr style="text-align : center;">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ optional($transaction->customers)->name }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td class="text-center" style="font-size: 14px; padding: 5px; line-height: 1.4;">
                        @if($transaction->promo_code)
                            <div>
                                <strong>Kode Promo:</strong> <span class="text-success">{{ $transaction->promo_code }}</span><br>
                                <strong>Diskon:</strong> <span class="text-danger">-Rp{{ number_format($transaction->discount, 2) }}</span><br>
                            </div>
                            <del class="text-muted">Rp{{ number_format($transaction->total + $transaction->discount, 2) }}</del> 
                            <br>
                            <strong class="text-primary">Rp{{ number_format($transaction->total, 2) }}</strong>
                            @else
                            <strong>Total:</strong> Rp{{ number_format($transaction->total, 2) }}
                        @endif
                    </td>
                    <td>{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('j M Y') }}</td>
                    <td>
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#proofModal{{ $transaction->id }}"><i class="bi bi-eye-fill    "></i> Lihat Detail
                        </button>
                    </td>
                    <td>
                        <span class="badge {{ $transaction->status == 'pending' ? 'bg-warning' : 'bg-success' }}">
                            {{ ucfirst($transaction->status) }}
                        </span>
                    </td>
                    <td>
                        @if ($transaction->status == 'pending')
                        @hasrole('admin')
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#accTransactionModal-{{ $transaction->id }}">Acc</button>
                        @endhasrole
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTransactionModal-{{ $transaction->id }}">Edit</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteTransactionModal-{{ $transaction->id }}">Delete</button>  
                        <br>
                        <br>
                        <span class="badge bg-warning text-light">
                          menunggu konfirmasi!
                        </span>
                        @endif
                        @if ($transaction->status == 'success')
                        <span class="badge bg-success text-light">
                          transaksi selesai!
                        </span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <!-- Create Transaction Modal -->
    <div class="modal fade" id="createTransactionModal" tabindex="-1" aria-labelledby="createTransactionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createTransactionModalLabel">Create Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- User selection -->
                        <div class="form-group">
                            <label for="user_id">Nama Pelanggan</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Keterangan</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <!-- Proof -->
                        <div class="form-group">
                            <label for="proof">Bukti</label>
                            <input type="file" name="proof" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="transaction_date">Transaction Date</label>
                             <input type="date" name="transaction_date" id="transaction_date" class="form-control">
                        </div>

                       <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" value="pending" readonly>
                        </div>
                        <div class="form-group">
                            <label for="items">Pilih Item</label>
                            <div id="items-container">
                                <div class="d-flex mb-2">
                                    <select name="items[]" class="form-control mr-2">
                                        @foreach($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} - Rp{{ number_format($item->price, 0, ',', '.') }}</option>
                                        @endforeach
                                    </select>
                                    <input type="number" name="quantities[]" class="form-control w-25" placeholder="Qty" min="1" value="1">
                                    <button type="button" class="btn btn-success ml-2 add-item">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Transaction Modal (for each transaction) -->
    @foreach($transactions as $transaction)
    <div class="modal fade" id="editTransactionModal-{{ $transaction->id }}" tabindex="-1" aria-labelledby="editTransactionModalLabel-{{ $transaction->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('transactions.update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editTransactionModalLabel-{{ $transaction->id }}">Edit Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                        <!-- User selection -->
                        <div class="form-group">
                            <label for="user_id">Customer</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}" @if($transaction->user_id == $customer->id) selected @endif>{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ $transaction->description }}</textarea>
                        </div>

                        <!-- Proof -->
                        <div class="form-group">
                            <label for="transaction_date">Transaction Date</label>
                            <input type="date" name="transaction_date" class="form-control" value="{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('Y-m-d') }}">
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending" @if($transaction->status == 'pending') selected @endif>Pending</option>
                                <option value="success" @if($transaction->status == 'success') selected @endif>Success</option>
                                <option value="failed" @if($transaction->status == 'failed') selected @endif>Denied</option>
                            </select>
                        </div>

                        <!-- Items -->
                        <div class="form-group">
                            <label for="items">Items</label>
                            <div id="edit-items-container-{{ $transaction->id }}">
                                @foreach($transaction->items as $tItem)
                                <div class="d-flex mb-2">
                                    <select name="items[]" class="form-control mr-2">
                                        @foreach($items as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $tItem->id ? 'selected' : '' }}>
                                            {{ $item->name }} - Rp{{ number_format($item->price, 0, ',', '.') }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <input type="number" name="quantities[]" class="form-control w-25" placeholder="Qty" min="1" value="{{ $tItem->pivot->quantity }}">
                                    <button type="button" class="btn btn-danger ml-2 remove-item">-</button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    <div class="form-group">
                        <label for="promo_code">Kode Promo</label>
                        <input type="text" name="promo_code" id="promo_code" class="form-control" value="{{ old('promo_code') }}">
                    </div>

                    <div class="form-group">
                        <label for="proof">Proof</label>
                        <input type="file" name="proof" class="form-control">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="accTransactionModal-{{ $transaction->id }}" tabindex="-1" aria-labelledby="accTransactionModalLabel-{{ $transaction->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('transactions.acc', $transaction->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="accTransactionModalLabel-{{ $transaction->id }}">Penyelesaian Transaksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah transaksi sudah selesai?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteTransactionModal-{{ $transaction->id }}" tabindex="-1" aria-labelledby="deleteTransactionModalLabel-{{ $transaction->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteTransactionModalLabel-{{ $transaction->id }}">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah yakin untuk menghapus data transaksi ini?</p>
                </div>
                <div class="modal-footer">
                    <!-- Cancel button -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <!-- Form submission with confirmation -->
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="proofModal{{ $transaction->id }}" tabindex="-1" aria-labelledby="proofModalLabel{{ $transaction->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3" id="receipt{{ $transaction->id }}" style="font-family: 'Courier New', monospace; background: white; border-radius: 10px; border: 2px dashed black;">
            <div class="text-center">
                <h5 class="fw-bold">STRUK TRANSAKSI</h5>
                <p class="text-muted" style="font-size: 12px;">{{ now()->format('d/m/Y H:i:s') }}</p>
                <hr style="border-top: 2px dashed black;">
            </div>

            <div class="modal-body">
                <p><strong>Nama Pemesan:</strong> {{ $customer->name }}</p>
                <p><strong>Barang:</strong> {{ $item->name }}</p>
                <p><strong>Status:</strong> {{ ucfirst($transaction->status) }}</p>
                <p><strong>Jumlah:</strong> Rp{{ number_format($transaction->total, 2, ',', '.') }}</p>
                <p><strong>Tanggal:</strong> {{ $transaction->transaction_date }}</p>
                
                <div class="text-center my-3">
                    <strong>Bukti Transaksi:</strong>
                    <img src="{{ asset('storage/' . $transaction->proof) }}" class="img-fluid rounded-3 mt-2" alt="Bukti Transaksi" style="max-width: 100%; object-fit: contain;">
                </div>

                <hr style="border-top: 2px dashed black;">
                <p class="text-center text-muted" style="font-size: 12px;">Terima Kasih Telah Bertransaksi</p>
            </div>

            <div class="modal-footer d-flex justify-content-between">
                <button onclick="downloadReceipt({{ $transaction->id }})" class="btn btn-primary">
                    <i class="bi bi-download"></i> Download Struk
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i> Tutup
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

<style>
.table {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
        font-family: 'Arial', sans-serif;
        font-size: 14px;
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Untuk modal tambah transaksi
        document.querySelector('.add-item').addEventListener('click', function() {
            let container = document.getElementById('items-container');
            let newItem = document.createElement('div');
            newItem.classList.add('d-flex', 'mb-2');

            newItem.innerHTML = `
            <select name="items[]" class="form-control mr-2">
                @foreach($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }} - Rp{{ number_format($item->price, 0, ',', '.') }}</option>
                @endforeach
            </select>
            <input type="number" name="quantities[]" class="form-control w-25" placeholder="Qty" min="1" value="1">
            <button type="button" class="btn btn-danger ml-2 remove-item">-</button>`;
        
            container.appendChild(newItem);
        });

        // Untuk modal tambah transaksi (remove item)
        document.getElementById('items-container').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-item')) {
                event.target.parentElement.remove();
            }
        });

        // Untuk modal edit transaksi
        document.querySelectorAll('.add-item-edit').forEach(function(button) {
            button.addEventListener('click', function() {
                let transactionId = this.getAttribute('data-transaction-id');
                let container = document.getElementById('edit-items-container-' + transactionId);
                let newItem = document.createElement('div');
                newItem.classList.add('d-flex', 'mb-2');
                newItem.innerHTML = `
                <select name="items[]" class="form-control mr-2">
                    @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }} - Rp{{ number_format($item->price, 0, ',', '.') }}</option>
                    @endforeach
                </select>
                <input type="number" name="quantities[]" class="form-control w-25" placeholder="Qty" min="1" value="1">
                <button type="button" class="btn btn-danger ml-2 remove-item">-</button> `;
           
                container.appendChild(newItem);
            });
        });

        // Event delegation untuk tombol remove item (berlaku untuk semua modal)
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-item')) {
                event.target.parentElement.remove();
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadReceipt(transactionId) {
        const receipt = document.getElementById(`receipt${transactionId}`);
        const buttons = receipt.querySelectorAll(".modal-footer button"); // Ambil tombol

        // Sembunyikan tombol sementara
        buttons.forEach(btn => btn.style.display = "none");

        html2canvas(receipt, { scale: 2 }).then(canvas => {
            let link = document.createElement("a");
            link.href = canvas.toDataURL("image/png");
            link.download = `Struk_Transaksi_${transactionId}.png`;
            link.click();

            // Kembalikan tombol setelah screenshot
            buttons.forEach(btn => btn.style.display = "");
        });
    }
</script>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("form").forEach(form => {
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

            // Cek input file (bukti transaksi)
            let fileInput = form.querySelector("input[type='file']");
            if (fileInput && fileInput.files.length === 0) {
                isValid = false;
                fileInput.classList.add("is-invalid");
                missingFields;
            } else {
                fileInput.classList.remove("is-invalid");
            }

            if (!isValid) {
                event.preventDefault(); // Mencegah submit jika ada yang kosong
                
                // Tampilkan alert dengan daftar field yang belum diisi
                Swal.fire({
                    icon: "warning",
                    title: "Oops...",
                    html: "<b>Harap isi semua field yang wajib untuk di isi</b><br><ul style='text-align:left;'>" + 
                        missingFields.map(field => `<li>${field}</li>`).join("") + 
                        "</ul>",
                    confirmButtonText: "OK",
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
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const transactionDateInput = document.getElementById('transaction_date');
        
        if (transactionDateInput) {
            const currentDate = new Date();
            currentDate.setHours(0, 0, 0, 0);  // Set waktu menjadi 00:00 untuk hanya membandingkan tanggal
            const currentDateString = currentDate.toISOString().split('T')[0];  // Format ke 'yyyy-mm-dd'
            
            // Set atribut min untuk input tanggal
            transactionDateInput.setAttribute('min', currentDateString);

            // Event listener untuk perubahan tanggal
            transactionDateInput.addEventListener('change', function () {
                const selectedDate = new Date(transactionDateInput.value);

                // Cek apakah tanggal yang dipilih lebih kecil dari hari ini
                if (selectedDate < currentDate) {
                    // Tampilkan alert dengan SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Tanggal Tidak Valid!',
                        text: 'Tanggal transaksi tidak boleh lebih kecil dari tanggal hari ini.',
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    });

                    // Reset input tanggal jika tidak valid
                    transactionDateInput.value = '';
                }
            });
        }
    });
</script>


@endsection