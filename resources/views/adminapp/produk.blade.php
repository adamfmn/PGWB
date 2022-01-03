@extends('adminapp.master')

@section('section')
<div class="card-body table-responsive p-8">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
                @foreach ($getproducts as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->Nama }}</td>
                <td>{{ $item->Harga }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td><a href="{{route ('produkDelete', $item->id)}}" class="btn btn-flat btn-danger">Hapus</a></td>
            </tr>        
                @endforeach
        </tbody>
    </table>
</div>
    
@endsection