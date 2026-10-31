@extends('layouts.app')

@section('content')
    <h1>Data Dosen</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dosens as $dosen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dosen['nidn'] }}</td>
                    <td>{{ $dosen['nama'] }}</td>
                    <td>{{ $dosen['prodi'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center">Data dosen belum tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
