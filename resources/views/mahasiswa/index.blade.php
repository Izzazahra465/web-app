@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <section class="panel">
        <div class="section-heading">
            <p class="eyebrow">Data akademik</p>
            <h1>Daftar Mahasiswa</h1>
            <p class="intro">Berikut adalah daftar mahasiswa yang terdaftar.</p>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['alamat'] }}</td>
                            <td><span class="gender-badge">{{ $item['gender'] }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
