@extends('layouts.app')

@section('content')
    <h1>Data Program Studi</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Program Studi</th>
                <th>Jenjang</th>
                <th>Fakultas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($prodi as $program)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $program['kode'] }}</td>
                    <td>{{ $program['nama'] }}</td>
                    <td>{{ $program['jenjang'] }}</td>
                    <td>{{ $program['fakultas'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center">Data program studi belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
