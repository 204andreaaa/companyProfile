@php
    $isEdit = filled($project);
@endphp

<div class="form-group">
    <label>Judul Project</label>
    <input type="text" class="form-control" name="title"
        value="{{ old('title', $project->title ?? '') }}" required>
</div>

<div class="form-group">
    <label>Slug (optional)</label>
    <input type="text" class="form-control" name="slug"
        value="{{ old('slug', $project->slug ?? '') }}">
    <small class="text-muted">Kalau dikosongkan akan dibuat otomatis dari judul.</small>
</div>

<div class="form-group">
    <label>Lokasi / Client (optional)</label>
    <input type="text" class="form-control" name="location"
        value="{{ old('location', $project->location ?? '') }}">
</div>

<div class="form-group">
    <label>Deskripsi (optional)</label>
    <textarea class="form-control" name="description" rows="3">{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Urutan</label>
        <input type="number" class="form-control" name="sort_order" min="0"
            value="{{ old('sort_order', $project->sort_order ?? 0) }}">
    </div>

    <div class="form-group col-md-6">
        <label>Status</label>
        <div class="custom-control custom-switch mt-2">
            <input type="checkbox" class="custom-control-input"
                id="projectActive{{ $project->id ?? 'Create' }}" name="is_active" value="1"
                {{ old('is_active', $project->is_active ?? true) ? 'checked' : '' }}>
            <label class="custom-control-label" for="projectActive{{ $project->id ?? 'Create' }}">Aktif</label>
        </div>
    </div>
</div>

<div class="form-group">
    <label>{{ $isEdit ? 'Tambah Gambar Project' : 'Gambar Project' }}</label>
    <input type="file" class="form-control" name="images[]" multiple
        data-max-width="1600" data-max-height="1200" data-quality="0.84">
    <small class="text-muted">Bisa pilih banyak gambar sekaligus. Gambar akan tampil sebagai slider otomatis.</small>
</div>
