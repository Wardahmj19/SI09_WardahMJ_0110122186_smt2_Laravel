@extends('template/admin/index')

@section('content')
    <h1>Customers</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Alamat</th>
                <th scope="col">No.Handphone</th>
            </tr>
        </thead>
        <tbody>
            @php $number = 1; @endphp
            @foreach($customers as $c)
            <tr>
                <td>{{ $number }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->address }}</td> 
                <td>{{ $c->no_hp }}</td>
            </tr>
            @php $number++ @endphp
            @endforeach
        </tbody>
    </table>
@endsection