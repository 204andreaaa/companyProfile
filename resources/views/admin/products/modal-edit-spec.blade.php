<style>
/* ===== FULLSCREEN CUSTOM MODAL ===== */
.modal-fullscreen-custom {
    width: 95vw;
    max-width: 95vw;
    height: 90vh;
    margin: auto;
}

.modal-fullscreen-custom .modal-content {
    height: 90vh;
    border-radius: 14px;
}

.modal-fullscreen-custom .modal-body {
    overflow-y: auto;
    max-height: calc(90vh - 140px);
    padding: 30px;
}

.modal-header {
    padding: 20px 30px;
}

.modal-footer {
    padding: 20px 30px;
}

.form-label {
    font-weight: 600;
    font-size: 13px;
    margin-bottom: 6px;
}
</style>


<div class="modal fade"
     id="editSpecModal{{ $spec->id }}"
     tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-fullscreen-custom">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header bg-primary text-white">
                <h5 class="mb-0">
                    Edit Specification - {{ $spec->model }}
                </h5>
                <button type="button"
                        class="close text-white"
                        data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.genset.updateSpec',$spec->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <div class="row">

                        <!-- LEFT SIDE IMAGE -->
                        <div class="col-md-5 text-center">

                            <img id="preview_{{ $spec->id }}"
                                 src="{{ $spec->image_url }}"
                                 style="height:280px;
                                        width:100%;
                                        object-fit:contain;
                                        margin-bottom:15px;
                                        background:#f8f9fa;
                                        border-radius:10px;">

                            <input type="file"
                                   name="image"
                                   class="form-control"
                                   onchange="previewSpecImage(this,'preview_{{ $spec->id }}')">
                        </div>


                        <!-- RIGHT SIDE FORM -->
                        <div class="col-md-7">

                            <!-- BASIC INFO -->
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-label">Model</label>
                                    <input type="text"
                                           name="model"
                                           value="{{ $spec->model }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Engine</label>
                                    <input type="text"
                                           name="engine"
                                           value="{{ $spec->engine }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Alternator</label>
                                    <input type="text"
                                           name="alternator"
                                           value="{{ $spec->alternator }}"
                                           class="form-control">
                                </div>
                            </div>

                            <hr>

                            <!-- OUTPUT -->
                            <h6 class="mb-3">Output</h6>

                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">PRP (KVA)</label>
                                    <input type="number"
                                           name="prp_kva"
                                           value="{{ $spec->prp_kva }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">ESP (KVA)</label>
                                    <input type="number"
                                           name="esp_kva"
                                           value="{{ $spec->esp_kva }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">PRP (KW)</label>
                                    <input type="number"
                                           name="prp_kw"
                                           value="{{ $spec->prp_kw }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">ESP (KW)</label>
                                    <input type="number"
                                           name="esp_kw"
                                           value="{{ $spec->esp_kw }}"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="form-label">
                                    Fuel Consumption (L/H)
                                </label>
                                <input type="number"
                                       step="0.1"
                                       name="fuel"
                                       value="{{ $spec->fuel }}"
                                       class="form-control">
                            </div>

                            <hr>

                            <!-- OPEN TYPE -->
                            <h6 class="mb-3">Open Type Dimensions</h6>

                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Length (mm)</label>
                                    <input type="number"
                                           name="l_open"
                                           value="{{ $spec->l_open }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Width (mm)</label>
                                    <input type="number"
                                           name="w_open"
                                           value="{{ $spec->w_open }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Height (mm)</label>
                                    <input type="number"
                                           name="h_open"
                                           value="{{ $spec->h_open }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Weight (kg)</label>
                                    <input type="number"
                                           name="kg_open"
                                           value="{{ $spec->kg_open }}"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- SILENT TYPE -->
                            <h6 class="mt-4 mb-3">Silent Type Dimensions</h6>

                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Length (mm)</label>
                                    <input type="number"
                                           name="l_silent"
                                           value="{{ $spec->l_silent }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Width (mm)</label>
                                    <input type="number"
                                           name="w_silent"
                                           value="{{ $spec->w_silent }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Height (mm)</label>
                                    <input type="number"
                                           name="h_silent"
                                           value="{{ $spec->h_silent }}"
                                           class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Weight (kg)</label>
                                    <input type="number"
                                           name="kg_silent"
                                           value="{{ $spec->kg_silent }}"
                                           class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-success px-4">
                        Save Changes
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>