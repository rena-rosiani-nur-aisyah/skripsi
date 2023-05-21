@extends('template.master-main')
@section('content')
    <div class="main">
        <section class="section">
            <div class="section-header">
                <h1></h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Syarat dan Ketentuan</a></div>
                    <div class="breadcrumb-item"><a href="/test">Syarat Tamyiz</a></div>
                    <div class="breadcrumb-item">Tabel</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Syarat Tamyiz</h4>
                                <div class="card-header-action">
                                    <a href="{{ url('tsyaratamyiz') }}" class="btn active">+ Tambah
                                        Syarat Tamyiz</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table">
                                    <table class="table table-bordered table-md col-lg-12">
                                        <tr>
                                            <th>Id</th>
                                            <th>Syarat dan Ketentuan</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $no = 1; ?>
                                        @foreach ($items as $value)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $value->snk_tamyiz }}</td>
                                                <td> <a href="/show/{{ $value->id }}"> <img src="/images/icon/edit.png"
                                                            alt="edit" width="30"> </a>
                                                    <a href="/delete/{{ $value->id }}"><img src="/images/icon/delete.png"
                                                            alt="delete" width="30"></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
