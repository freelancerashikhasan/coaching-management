<div class="modal fade" id="sectionModal" tabindex="-1" aria-labelledby="sectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">section</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-data">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="">
                                        {{-- <p for="name" class="form-label">section Name</p> --}}
                                        <input type="hidden" name="sec_id" id="sec_id">
                                        <input type="text" name="section_name" id="section_name" placeholder="Enter section Name">
                                        <span id="section_name_Error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="sectionModalClose">Close</button>
            <button type="button" class="btn btn-primary" onclick="addSection()">Save</button>
        </div>
        </div>
    </div>
</div>

@push('script')
@include('admin.section.internal-assets.js')
{{-- <script>
    $(document).ready(function() {
        $('#sectionModal').on('shown.bs.modal', function () {
            $('#depsartment_id').select2({
                dropdownParent: $('#sectionModal')
            });
        });
    });
</script> --}}
@endpush
