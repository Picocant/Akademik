@extends('layouts.app')

@section('content')
    <h1>Biodata Mahasiswa</h1>

    <table>
        <tbody>
            <tr>
                <th>Nama</th>
                <td>{{ $biodata['nama'] }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $biodata['nim'] }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $biodata['tempat_lahir'] }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $biodata['tanggal_lahir'] }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $biodata['jenis_kelamin'] }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{ $biodata['program_studi'] }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>{{ $biodata['fakultas'] }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $biodata['alamat'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection
