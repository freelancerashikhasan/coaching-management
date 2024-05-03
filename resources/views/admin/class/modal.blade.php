<div class="modal fade" id="classModal" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">class</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-data">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="">
                                        {{-- <p for="name" class="form-label">class Name</p> --}}
                                        <input type="hidden" name="c_id" id="c_id">
                                        <input type="text" name="class_name" id="class_name" placeholder="Enter class Name">
                                        <span id="class_name_Error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="classModalClose">Close</button>
            <button type="button" class="btn btn-primary" onclick="addclass()">Save</button>
        </div>
        </div>
    </div>
</div>

@push('script')
@include('admin.class.internal-assets.js')
{{-- <script>
    $(document).ready(function() {
        $('#classModal').on('shown.bs.modal', function () {
            $('#depsartment_id').select2({
                dropdownParent: $('#classModal')
            });
        });
    });
</script> --}}
@endpush
