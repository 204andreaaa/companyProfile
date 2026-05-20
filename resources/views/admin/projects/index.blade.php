@extends('layouts.admin')

@section('content')
    <div class="section-header">
        <h1>Project</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Project</a></div>
        </div>
    </div>

    <div class="section-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Semua Project</h4>
                <div class="card-header-action">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#projectCreateModal">
                        <i class="fas fa-plus"></i> Tambah Project
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:60px;">#</th>
                                <th style="width:130px;" class="text-center">Cover</th>
                                <th>Judul</th>
                                <th class="text-center" style="width:90px;">Gambar</th>
                                <th class="text-center" style="width:100px;">Urutan</th>
                                <th class="text-center" style="width:110px;">Status</th>
                                <th class="text-center" style="width:160px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($projects as $project)
                                <tr>
                                    <td class="text-center">{{ $project->id }}</td>
                                    <td class="text-center">
                                        <img src="{{ $project->cover_url }}" alt="{{ $project->title }}"
                                            class="img-thumbnail" style="height:70px;width:95px;object-fit:cover;">
                                    </td>
                                    <td>
                                        <strong>{{ $project->title }}</strong>
                                        @if ($project->location)
                                            <div class="text-muted small">{{ $project->location }}</div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $project->images->count() }}</td>
                                    <td class="text-center">{{ $project->sort_order }}</td>
                                    <td class="text-center">
                                        @if ($project->is_active)
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-secondary">Nonaktif</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#projectImagesModal{{ $project->id }}" title="Gambar">
                                                <i class="fas fa-images"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#projectEditModal{{ $project->id }}" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                                onsubmit="return confirm('Hapus project ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">Belum ada project.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    <div class="modal fade" id="projectCreateModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Project</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    @include('admin.projects.partials.form', ['project' => null])
                </div>

                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    @foreach ($projects as $project)
        <div class="modal fade" id="projectEditModal{{ $project->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <form action="{{ route('admin.projects.update', $project) }}" method="POST"
                    enctype="multipart/form-data" class="modal-content">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Project</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        @include('admin.projects.partials.form', ['project' => $project])
                    </div>

                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="projectImagesModal{{ $project->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gambar Project</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h6>{{ $project->title }}</h6>

                        <div class="row mt-3">
                            @forelse ($project->images as $image)
                                <div class="col-6 col-md-4 mb-4">
                                    <div class="border rounded p-2 h-100 text-center">
                                        <img src="{{ $image->image_url }}" class="img-fluid rounded mb-2"
                                            style="height:120px;width:100%;object-fit:cover;"
                                            alt="{{ $project->title }}">

                                        <form action="{{ route('admin.project-images.destroy', $image) }}"
                                            method="POST"
                                            onsubmit="return confirm('Hapus gambar ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p class="text-muted mb-0">Belum ada gambar upload. Di halaman user akan memakai fallback slider.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endpush
