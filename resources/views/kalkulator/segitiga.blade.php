@extends('layouts.app')

@section('title', 'Kalkulator Segitiga')

@section('content')
    <section class="panel calculator-panel">
        <div class="section-heading">
            <p class="eyebrow">Kalkulator geometri</p>
            <h1>Luas Segitiga</h1>
            <p class="intro">Masukkan panjang alas dan tinggi untuk menghitung luas segitiga.</p>
        </div>

        <div class="formula">Luas = <span>1/2 × alas × tinggi</span></div>

        <form action="{{ route('kalkulator.segitiga.hitung') }}" method="POST" class="calculator-form">
            @csrf
            <div class="form-field">
                <label for="alas">Alas</label>
                <input id="alas" name="alas" type="number" min="0.01" step="any"
                       value="{{ old('alas', $alas ?? '') }}" placeholder="Contoh: 10" required>
                @error('alas')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-field">
                <label for="tinggi">Tinggi</label>
                <input id="tinggi" name="tinggi" type="number" min="0.01" step="any"
                       value="{{ old('tinggi', $tinggi ?? '') }}" placeholder="Contoh: 8" required>
                @error('tinggi')
                    <p class="field-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Hitung luas</button>
        </form>

        @isset($luas)
            <div class="result" role="status">
                <span>Hasil perhitungan</span>
                <strong>{{ number_format($luas, 2, ',', '.') }}</strong>
                <span class="result-unit">satuan persegi</span>
            </div>
        @endisset
    </section>
@endsection
