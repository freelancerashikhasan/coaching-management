<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function addDepartment() {
    $('#error').text('');
    let dep_id = $('#dep_id').val();
    let formData = new FormData();
    formData.append('department_name', $('#department_name').val());


    // Make AJAX POST request
    if (dep_id == '') {
            $.ajax({
            url: '{{ route("admin.department.store") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // fetchDepartments();
                setTimeout(() => {
                    var option = new Option(response.name, response.id, true, true);
                    $('#department_id').append(option).trigger('change');
                }, 100);
                console.log('Student added successfully:', response);
                success_msg('Student added successfully');
                $('#departmentModalClose').click();
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
                    error_msg(errorMessage);

                });
            }
        });
    }else{
        let url = '{{ route("admin.department.update",':dep_id') }}';
        url = url.replace(':dep_id',dep_id);
        $.ajax({
            url: url,
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
                error_msg(errorMessage);

            });
        }
    });
    }
}
</script>
