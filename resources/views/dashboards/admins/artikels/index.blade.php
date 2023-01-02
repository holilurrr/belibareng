@extends('layouts.admin')
@section('main')

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Tambah Artikel Baru</h2>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <div class="toolbar">
                                </div>
                                    <form class="form">
                                        <div class="form-row">
                                            <div class="form-group col-auto mr-auto">
                                                <a href="{{ route('artikel.create')}}"
                                                    class="btn btn-md btn-primary mb-3">TAMBAH BLOG</a>
                                            </div>
                                            <div class="form-group col-auto">
                                                <div class="form-group col-auto">
                                                    <label for="search" class="sr-only">Search</label>
                                                    <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                                                </div>
                                        </div>
                                    </form>
                                </div>

                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>GAMBAR</th>
                                            <th>JUDUL</th>
                                            <th>CONTENT</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($artikel as $blog)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ Storage::url('artikels/').$blog->image }}" class="rounded"
                                                    style="width: 150px">
                                            </td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{!! Str::limit($blog->content,100) !!}</td>
                                            <td class="">
                                              <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <span class="text-muted sr-only">Action</span>
                                              </button>
                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('delete_artikel', $blog->id) }}" method="POST">
                                                <a class="dropdown-item" href=" {{ route('edit_artikel', $blog->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger
                                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('delete_artikel', $blog->id) }}" method="POST">
                                                        <a class="dropdown-item"
                                                            href=" {{ route('edit_artikel', $blog->id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="dropdown-item text-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Artikel belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{ $artikel->links('vendor.pagination.bootstrap-5') }}
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
@endsection
