@extends ('admin.layout.appadmin')
@section ('content')

                    <div class="container-fluid px-4">
                    <div class="card mb-4">
                            <div class="card-body">
                            <h1 class="mt-4">List User</h1>
                                <a target="_blank" href="https://datatables.net/"></a>
                                
                            </div>
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                                <!-- <a class="btn btn-primary" href="#">Create</a> -->
                                
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Akses</th>
                                         </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Akses</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @php
                                        $no = 1;
                                        @endphp
                                        @foreach($user as $user)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role}}</td>
                                        </tr>
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