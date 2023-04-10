@extends ('admin.layout.appadmin')
@section ('content')

                    <div class="container-fluid px-4">
                        

                        <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">Kategori Buku</h1>
                                <a target="_blank" href="https://datatables.net/"></a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <a class="btn btn-primary" href="{{url('admin/kategori_buku/tambah')}}">Create</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori Buku</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori Buku</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($kategori_buku as $kategori_buku)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$kategori_buku->kategori_buku}}</td>
                                            <td>

                                                
                                                <a href="{{url('admin/kategori_buku/edit/'.$kategori_buku->idkategori_buku)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{url('admin/kategori_buku/delete/'.$kategori_buku->idkategori_buku)}}" class="btn btn-danger">Delete</a>
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