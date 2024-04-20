<script>
    $('#name').on('input', function(){
        setTimeout(() => {
            let data = $('#name').val();
            $('#student_name').text(data);
        }, 500);
    });
    $('#student_id').on('input', function(){
        setTimeout(() => {
            let data = $('#student_id').val();
            $('#pre_student_id').text(data);
        }, 500);
    });
    function displaySelectedImage() {
        const fileInput = document.getElementById('fileInput');
        const selectedImage = document.getElementById('selectedImage');
        const studentImageContainer = document.getElementById('studentImageContainer');
        const uploadImage = document.querySelector('.upload');

        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const imageUrl = e.target.result;

                // Update the selectedImage element
                selectedImage.src = imageUrl;
                selectedImage.style.display = 'block';
                uploadImage.style.display = 'none';

                // Update the studentImageContainer element
                studentImageContainer.innerHTML = `<img src="${imageUrl}" alt="Student Image" class="student_image" style="width: 100%; height: auto;">`;
            };

            reader.readAsDataURL(file);
        }
    }
</script>
<script>
    function triggerFileInputClick(id) {

        document.getElementById(id).click();
    }
    function showPdfImage(id, imageId) {
    var input = $(''+id+'')[0].files[0];

    if (input) {
        if (input.type === 'application/pdf') {
            $(''+imageId+'').html('<img class="upload" src="{{ asset("icon/pdf_icon.svg") }}" alt="PDF">');

            $(''+imageId+'').removeClass('error');
            $(''+id+'_Error').text('');
        } else {
            $(''+imageId+'').addClass('error');
            $(''+id+'_Error').text('The selected file is not a PDF.');
            $(''+id+'').val('');
            $(''+imageId+'').html('<img class="upload" src="{{ asset("img/upload.svg") }}" alt="PDF">');
            console.error('The selected file is not a PDF.');
        }
    } else {
        console.error('File input element or no file selected.');
    }
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function addStudentData() {
    // Clear any existing error messages
    $('#error').text('');

    // Retrieve file inputs
    let imageInput = $('#fileInput')[0].files[0] || '';
    let nidBirthInput = $('#nid_birth_input')[0].files[0] || '';
    let transferLetterInput = $('#transfer_letter_input')[0].files[0] || '';
    let fatherNidInput = $('#father_nid_input')[0].files[0] || '';
    let motherNidInput = $('#mother_nid_input')[0].files[0] || '';
    let marksheet_input = $('#marksheet_input')[0].files[0] || '';

    // Create FormData object
    let formData = new FormData();
    formData.append('name', $('#name').val());
    formData.append('student_id', $('#student_id').val());
    formData.append('roll', $('#roll').val());
    formData.append('department_id', $('#department_id').val());
    formData.append('father_name', $('#father_name').val());
    formData.append('father_nid', $('#father_nid').val());
    formData.append('father_mobile', $('#father_mobile').val());
    formData.append('father_occupation', $('#father_occupation').val());
    formData.append('mother_name', $('#mother_name').val());
    formData.append('mother_nid', $('#mother_nid').val());
    formData.append('mother_mobile', $('#mother_mobile').val());
    formData.append('mother_occupation', $('#mother_occupation').val());
    formData.append('student_mobile', $('#student_mobile').val());
    formData.append('student_email', $('#student_email').val());
    formData.append('class', $('#class').val());
    formData.append('date', $('#date').val());
    formData.append('nid_birth_input', nidBirthInput);
    formData.append('gender', $('#gender').val());
    formData.append('transfer_letter_input', transferLetterInput);
    formData.append('father_nid_input', fatherNidInput);
    formData.append('mother_nid_input', motherNidInput);
    formData.append('image', imageInput);
    formData.append('marksheet_input', marksheet_input);

    // Make AJAX POST request
    $.ajax({
        url: '{{ route("admin.student.store") }}',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log('Student added successfully:', response);
            success_msg('Student added successfully');
        },
        error: function(error) {

            var errors = error.responseJSON.errors;
            Object.keys(errors).forEach(function(fieldName) {

                let errorField = '#' + fieldName + '_Error';
                let fieldId = '#' + fieldName;
                $(''+fieldId+'').addClass('border-danger');
                var errorMessage = errors[fieldName][0];
                $(''+errorField+'').text(errorMessage);
                $(''+errorField+'').addClass('text-danger text-bolder');
                // toastr.error(errorMessage);
                error_msg(errorMessage);

            });
        }
    });
}
</script>
