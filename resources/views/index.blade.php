@extends('layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Invensaris Toko</h2>
                    </div>>
                    <div class="card-body">
                        <a href="{{ url('invensaris/toko') }}" class="btn btn-primary btn-md" title="Add New Student">
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buku as $item)
                                        <tr>
                                            <td>{{  }}</td>
                                            <td>{{  }}</td>
                                            <td>{{  }}</td>
                                            <td>{{  }}</td>

                                            <td>
                                                <a href="{{ url('/produk/' . $item->id) }}" title="View Produk"><button class="btn btn-primary btn-sm"><i class="fa fa-faye" aria-hidden="true"></i> View Produk</button></a>
                                                <a href="{{ url('/produk/') . $item->id . '/edit/' }}" title="Edit Produk"><button class="btn btn-secondary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Produk</button>

                                                <form method="POST" action="{{ url('/produk' . '/' . $item->id) }}" accepts-charset="UTF-8" style="display:inline">
                                                    {{  }}
