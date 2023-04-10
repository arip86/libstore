@extends ('admin.layout.appadmin')
@section ('content')

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <a class="btn btn-primary" href="{{url('admin/buku/create_buku')}}">Create</a>
                                
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>tahun_terbit</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Kategori Buku</th>
                                            <th>gambar</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>tahun_terbit</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Kategori Buku</th>
                                            <th>gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($buku as $buku)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$buku->judul}}</td>
                                            <td>{{$buku->penulis}}</td>
                                            <td>{{$buku->penerbit}}</td>
                                            <td>{{$buku->tahun_terbit}}</td>
                                            <td>{{$buku->harga}}</td>
                                            <td>{{$buku->stok}}</td>
                                            <td>{{$buku->kategori_buku}}</td>

                                            <td>

                                            @empty($buku->cover)
                                          <img src="{{ url('admin/image/nophoto.png') }}" width="20%" alt="Profile" class="">
                                        @else
                                         <img src="{{ url('admin/image')}}/{{$buku->cover}}" width="20%" alt="Profile" class="">
                                         @endempty
                                            </td>
                                            
                                            <td>
                                                <a href="{{url('admin/buku/edit_buku/'.$buku->id)}}" class="btn btn-primary">Edit</a>
                                                
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        <tr>
                                            @php
                                                $no++;
                                            @endphp
                                        @endforeach
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                

@endsection