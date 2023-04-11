@extends ('admin.layout.appadmin')
@section ('content')

                    <div class="container-fluid px-4">
                    <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">List Pesanan</h1>
                                <a target="_blank" href="https://datatables.net/"></a>
                                
                            </div>
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <a class="btn btn-primary" href="#">Create</a>
                                
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jumlah</th>
                                            <th>Waktu order</th>
                                            <th>Buku</th>
                            
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Jumlah</th>
                                            <th>Waktu order</th>
                                            <th>Buku</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($order as $pesan)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$pesan->jumlah}}</td>
                                            <td>{{$pesan->order_date}}</td>
                                            <td>{{$pesan->judul}}</td>
                                            
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                
                                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
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