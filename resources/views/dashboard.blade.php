@extends('layout')

@section('content')
<div style=" min-height: 75vh; display: flex; justify-content: center; align-items: center; padding-top: 50px;">
    <div class="bg-white shadow rounded p-4" style="width: 100%; max-width: 500px;">
        <div class="text-center mb-4">
            <h5 class="fw-semibold">FinAlly.</h5>
        </div>
        <div style="min-height: 25vh; display: flex; flex-direction: column; justify-content: center;">
            <div class="list-group">
                <a href="{{ route('keuangan.catatan') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Catatan Keuangan
                    <i class="bi bi-book"></i>
                </a>
                <a href="{{ route('keuangan.tabungan') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Tabungan
                    <i class="bi bi-piggy-bank"></i>
                </a>
                <a href="{{ route('keuangan.dompet') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Dompet
                    <i class="bi bi-wallet2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@endsection
