@extends ('admin.layout.appadmin')
@section ('content')

                    <div class="container-fluid px-4">
                    <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">List Buku</h1>
                                <a target="_blank" href="https://datatables.net/"></a>
                                
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
                                          <img src="{{ url('admin/image/nophoto.png') }}" width="20%" >
                                        @else
                                         <img src="{{ url('admin/image')}}/{{$buku->cover}}" width="20%" >
                                         @endempty
                                            </td>
                                            
                                            <td>
                                                <a href="{{url('admin/buku/edit_buku/'.$buku->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                                
                                                <a href="{{url('admin/buku/delete/'.$buku->id)}}" class="btn btn-sm btn-danger">Delete</a>
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