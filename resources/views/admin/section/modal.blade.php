<div class="modal fade" id="sectionModal" tabindex="-1" aria-labelledby="sectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-data">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="">
                                        <p for="name" class="form-label">Student Name</p>
                                        <input type="text" name="names" id="names" placeholder="Enter Your Name">
                                        <span id="name_Error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="">
                                        <p for="" class="form-label">Department</p>
                                        <select name="department_ids" class="select2" id="depasrtment_id">
                                            <option value="">Science</option>
                                            <option value="">Arts</option>
                                            <option value="">Commerce</option>
                                        </select>
                                    </div>
                                    <span id="department_id_Error"></span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="">
                                        <p for="" class="form-label">Class</p>
                                        <select name="class_sid" class="select2" id="classs_id">
                                            <option value="1">1st Year</option>
                                            <option value="2">2nd Year</option>
                                            <option value="3">3rd Year</option>
                                        </select>
                                    </div>
                                    <span id="class_id_Error"></span>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-0 col-sm-0"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
        </div>
        </div>
    </div>
</div>

@push('script')
<script>
    $(document).ready(function() {
        $('.modal').on('shown.bs.modal', function () {
            $('#department_id').select2({
                dropdownParent: $('.modal')
            });
        });
    });
</script>
@endpush
