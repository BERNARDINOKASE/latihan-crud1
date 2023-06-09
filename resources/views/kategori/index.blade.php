
@extends('layout.master')

@section('title', 'Kategori Page')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data</h4>
                        <p class="card-title-desc">Provide valuable, actionable feedback to your users with
                            HTML5 form validation–available in all our supported browsers.</p>
                        <form class="needs-validation" action="{{route('kategori.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Id</label>
                                        <input type="text" class="form-control @error('id') is-invalid  @enderror " id="id" name="id">
                                        @error('id')
                                            <span class="text-danger">{{$message}}</span>    
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>    
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>   
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
                <h4 class="card-title">Kategori Table</h4>
                <p class="card-title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perspiciatis molestias veniam minima.
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>id</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <a type="" href="" class="text-warning">
                                        Edit
                                    </a> 
                                    <a type="" href="" class="text-danger">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection