@extends('templates/base')
@section('title','Books Database')
@section('container')
<div class="container">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Daftar Buku</h1>
<a class="btn btn-primary float-right mt-2" href="{{url('/create')}}" role="button">Tambah Buku</a>
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th>Nama Buku</th>
<th>Tipe Buku</th>
<th class="text-center">Stock</th>
<th>Penulis</th>
<th>Penerbit</th>
<th class="text-center">Terbit</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-center">1</td>
<td>Laskar Pelangi</td>
<td>Novel</td>
<td class="text-center">100</td>
<td>Andrea Hirata</td>
<td>Bentang Pustaka</td>
<td class="text-center">2005-01-01</td>
<td>
<a href="{{url('/edit')}}" class="badge badge-success">edit</a>
<a href="" class="badge badge-danger">delete</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
@endsection