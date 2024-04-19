

  <!-- Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
          <button type="button" class="btn-close" style="background-color: white;" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <section class="">
                <div class="contact-form row p-2">
                   <div class="form-field col-lg-6">
                      <input id="student_id" class="input-text js-input" type="text" >
                      <label class="label" for="student_id">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Student ID
                      </label>
                   </div>
                   <div class="form-field col-lg-6 col-xl-6 col-md-6 col-sm-12">
                      <input id="birth_certificate" class="input-text js-input" type="text" >
                      <label class="label" for="student_nid">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Student NID/Birth Certificate
                      </label>
                   </div>
                   <div class="form-field col-lg-12 col-sm-12">
                      <input id="name" class="input-text js-input" type="text" >
                      <label class="label" for="name">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Student Name
                      </label>
                   </div>
                   <div class="form-field col-lg-4 col-sm-12">
                      <input id="father_name" class="input-text js-input" type="text" >
                      <label class="label" for="father_name">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Father's Name
                      </label>
                    </div>
                    <div class="form-field col-lg-4 col-sm-12">
                      <input id="father_nid" class="input-text js-input" type="text" >
                      <label class="label" for="father_nid">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Father's NID
                      </label>
                   </div>
                    <div class="form-field col-lg-4 col-sm-12">
                      <input id="father_phone" class="input-text js-input" type="text" >
                      <label class="label" for="father_phone">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Father's Phone Number
                      </label>
                    </div>
                   <div class="form-field col-lg-4 col-sm-12">
                      <input id="mother_name" class="input-text js-input" type="text" >
                      <label class="label" for="mother_name">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Mother's Name
                      </label>
                    </div>
                    <div class="form-field col-lg-4 col-sm-12">
                      <input id="mother_nid" class="input-text js-input" type="text" >
                      <label class="label" for="mother_nid">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Mother's NID
                      </label>
                   </div>
                    <div class="form-field col-lg-4 col-sm-12">
                      <input id="mother_phone" class="input-text js-input" type="text" >
                      <label class="label" for="mother_phone">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Mother's Phone Number
                      </label>
                    </div>
                   <div class="form-field col-lg-6 col-sm-12">
                      <input id="email" class="input-text js-input" type="email" >
                      <label class="label" for="email">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Student E-mail
                      </label>
                   </div>
                   <div class="form-field col-lg-6 col-sm-12">
                      <input id="phone" class="input-text js-input" type="text" >
                      <label class="label" for="phone">
                        <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt="">  Student Phone
                      </label>
                   </div>
                   <div class="form-field col-lg-4 col-sm-12">
                    <select id="form-select-sm" class="input-text js-input select2 class_id" id="class_id">
                        <option value="">Select Class</option>
                        <option value="1">a</option>
                        <option value="5">b</option>
                        <option value="4">c</option>
                        <option value="4">d</option>
                    </select>
                    <label class="label mb-3" for="class">
                      <img src="{{ asset('icon/Student.svg') }}" class="mb-2" alt="">  Class
                    </label>
                 </div>
                   <div class="form-field col-lg-4 col-sm-12">
                      <select id="form-select-sm" class="input-text js-input select2 section_id" id="section_id">
                        <option value="">Select Section</option>
                        <option value="1">a</option>
                        <option value="5">b</option>
                        <option value="4">c</option>
                        <option value="4">d</option>
                      </select>
                      <label class="label mb-3" for="section">
                        <img src="{{ asset('icon/Student.svg') }}" class="mb-2" alt="">  Section
                      </label>
                   </div>
                   <div class="form-field col-lg-4 col-sm-12">
                      <select id="form-select-sm" class="input-text js-input select2 discipline_id" id="discipline_id">
                        <option value="">Select Discipline</option>
                        <option value="1">a</option>
                        <option value="5">b</option>
                        <option value="4">c</option>
                        <option value="4">d</option>
                      </select>
                      <label class="label mb-3" for="discipline">
                        <img src="{{ asset('icon/Student.svg') }}" class="mb-2" alt="">  Discipline
                      </label>
                   </div>
                   <div class="form-field col-lg-3 col-sm-126">
                    <input  class="input-text js-input" type="text" id="course_fee">
                    <label class="label" for="fee">
                      <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt=""> Course Fee
                    </label>
                  </div>
                   <div class="form-field col-lg-3 col-sm-6">
                    <input class="input-text js-input" type="text" id="payment">
                    <label class="label" for="payment">
                      <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt=""> Payment
                    </label>
                  </div>
                   <div class="form-field col-lg-3 col-sm-6">
                    <input  class="input-text js-input" type="text" id="due">
                    <label class="label" for="due">
                      <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt=""> Due
                    </label>
                  </div>
                   <div class="form-field col-lg-3 col-sm-6">
                    <select id="form-select-sm" class="input-text js-input select2" id="course_type">
                        <option value="">Select Type</option>
                        <option value="1">a</option>
                        <option value="5">b</option>
                        <option value="4">c</option>
                        <option value="4">d</option>
                    </select>
                    <label class="label" for="type">
                      <img src="{{ asset('icon/Student.svg') }}" class="py-2" alt=""> Type
                    </label>
                  </div>
                </div>
             </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="studentModalClose">Close</button>
          <button class="btn btn-primary" id="addStudent">Add Student</button>
        </div>
      </div>
    </div>
  </div>
@push('script')
<script>
    // $("#form-select-sm").select2({
    //     theme: "bootstrap-5",
    //     dropdownCssClass: "select2--small",
    //     dropdownParent: $("#form-select-sm").parent(),
    // })
    $('#addStudent').on('click',function(){
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        var student_id = $('#student_id').val();
        var birth_certificate = $('#birth_certificate').val();
        var name = $('#name').val();
        var father_name = $('#father_name').val();
        var father_nid = $('#father_nid').val();
        var father_phone = $('#father_phone').val();
        var mother_name = $('#mother_name').val();
        var mother_nid = $('#mother_nid').val();
        var mother_phone = $('#mother_phone').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var class_id = $('.class_id').val();
        var section_id = $('.section_id').val();
        var discipline_id = $('.discipline_id').val();
        var course_fee = $('#course_fee').val();
        var due = $('#due').val();
        var payment = $('#payment').val();
        var course_type = $('.course_type').val();

        var formData = new FormData();

        // Append form fields to the FormData object
        formData.append('student_id', student_id);
        formData.append('birth_certificate', birth_certificate);
        formData.append('name', name);
        formData.append('father_name', father_name);
        formData.append('father_nid', father_nid);
        formData.append('father_phone', father_phone);
        formData.append('mother_name', mother_name);
        formData.append('mother_nid', mother_nid);
        formData.append('mother_phone', mother_phone);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('class_id', class_id);
        formData.append('section_id', section_id);
        formData.append('discipline_id', discipline_id);
        formData.append('course_fee', course_fee);
        formData.append('due', due);
        formData.append('payment', payment);
        formData.append('course_type', course_type);

        $.ajax({
            type: 'POST',
            url: '{{ route("admin.student.store") }}',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function (response) {
                // Handle the success response
                console.log(response);
            },
            error: function (error) {
                // Handle the error response
                console.log(error);
            }
        });
});
</script>
@endpush
