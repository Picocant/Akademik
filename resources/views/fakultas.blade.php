@extends('layouts.app')

@section('content')
    <h1>Data Fakultas</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Fakultas</th>
                <th>Dekan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($fakultas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['dekan'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center">Data fakultas belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
