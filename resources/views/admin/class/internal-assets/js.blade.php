<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function addclass() {
    $('#error').text('');
    let c_id = $('#c_id').val();
    let formData = new FormData();
    formData.append('class_name', $('#class_name').val());


    // Make AJAX POST request
    if (c_id == '') {
            $.ajax({
            url: '{{ route("admin.class.store") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                setTimeout(() => {
                    var option = new Option(response.name, response.id, true, true);
                    $('#class_id').append(option).trigger('change');
                }, 100);
                console.log('Student added successfully:', response);
                success_msg('Student added successfully');
                $('#classModalClose').click();
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
        let url = '{{ route("admin.class.update",':dep_id') }}';
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
