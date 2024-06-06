@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sortable Table</h4>
                    <div class="card-header-action">
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="sortable-table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <i class="fas fa-th"></i>
                                    </th>
                                    <th>No.</th>
                                    <th>Pengguna</th>
                                    <th>Jenis Darah</th>
                                    <th>Gejala</th>
                                    <th>Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @if (isset($data))
                                    @foreach ($items as $post)
                                        <tr>
                                            <td>
                                                <div class="sort-handler">
                                                    <i class="fas fa-th"></i>
                                                </div>
                                            </td>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $post->user->user }}</td>
                                            <td>{{ $post->post->name }}</td>
                                            <td>{{ $post->gejala->gejala }}</td>
                                            <td>{{ $post->jawaban }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
