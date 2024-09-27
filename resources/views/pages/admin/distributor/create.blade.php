@extends('layouts.admin.main') 
@section('title', 'Tambah Distributor') 
@section('content') 
    <div class="main-content"> 
        <section class="section"> 
            <div class="section-header"> 
                <h1>Tambah Distributor</h1> 
                <div class="section-header-breadcrumb"> 
                    <div class="breadcrumb-item"><a href="{{ route('distributor.index') }}">Daftar Distributor</a></div> 
                    <div class="breadcrumb-item active">Tambah Distributor</div> 
                </div> 
            </div> 

            <div class="section-body"> 
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row"> 
                    <div class="col-12"> 
                        <div class="card"> 
                            <div class="card-header"> 
                                <h4>Form Tambah Distributor</h4> 
                            </div> 
                            <div class="card-body"> 
                                <form action="{{ route('distributor.store') }}" method="POST"> 
                                    @csrf 
                                    <div class="form-group"> 
                                        <label>Nama Distributor</label> 
                                        <input type="text" name="nama_distributor" class="form-control" value="{{ old('nama_distributor') }}"> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label>Lokasi</label> 
                                        <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}"> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label>Kontak</label> 
                                        <input type="text" name="kontak" class="form-control" value="{{ old('kontak') }}"> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label>Email</label> 
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}"> 
                                    </div> 
                                    <button type="submit" class="btn btn-primary">Simpan</button> 
                                </form> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </section> 
    </div> 
@endsection
