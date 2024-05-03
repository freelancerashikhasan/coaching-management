<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="departmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Department</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-data">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="">
                                        {{-- <p for="name" class="form-label">Department Name</p> --}}
                                        <input type="hidden" name="dep_id" id="dep_id">
                                        <input type="text" name="department_name" id="department_name" placeholder="Enter Department Name">
                                        <span id="department_name_Error"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="departmentModalClose">Close</button>
            <button type="button" class="btn btn-primary" onclick="addDepartment()">Save</button>
        </div>
        </div>
    </div>
</div>

@push('script')
@include('admin.department.internal-assets.js')
@include('layouts.admin.select2')

{{-- <script>
    $(document).ready(function() {
        $('#departmentModal').on('shown.bs.modal', function () {
            $('#depsartment_id').select2({
                dropdownParent: $('#departmentModal')
            });
        });
    });
</script> --}}
@endpush
