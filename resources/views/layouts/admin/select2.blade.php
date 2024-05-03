<?php
    $route = Route::current()->getName();
    $GET_URL = request()->route()->uri;
    $QUERY_STRING = $_SERVER['QUERY_STRING'];
?>


<script>


function fetchDepartments(){
    $.ajax({
        url: "{{ route('get.departments') }}",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var html = "";
            $.each(data, function (index, value) {
                html += '<option value=""></option>';
                html += '<option value="' +value.id +'">' +value.name + "</option>";
            });
            $("#department_id").html(html);
        },
    });

    $("#department_id").select2({
        ajax: {
            url: "{{ route('get.departments') }}",
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    search_text: params.term, // Search term entered by the user
                };
            },
            processResults: function (data) {
                var results = $.map(data, function (item) {
                    return {
                        id: item.id,
                        text: item.name,
                    };
                });

                return {
                    results: results,
                };
            },
            cache: true,
        },
        placeholder: "Select Department",
    });
}
function fetchSections(){
    $.ajax({
        url: "{{ route('get.sections') }}",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var html = "";
            $.each(data, function (index, value) {
                html += '<option value=""></option>';
                html += '<option value="' +value.id +'">' +value.name + "</option>";
            });
            $("#section_id").html(html);
        },
    });

    $("#section_id").select2({
        ajax: {
            url: "{{ route('get.sections') }}",
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    search_text: params.term, // Search term entered by the user
                };
            },
            processResults: function (data) {
                var results = $.map(data, function (item) {
                    return {
                        id: item.id,
                        text: item.name,
                    };
                });

                return {
                    results: results,
                };
            },
            cache: true,
        },
        placeholder: "Select Section",
    });
}
function fetchClasses(){
    $.ajax({
        url: "{{ route('get.classes') }}",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var html = "";
            $.each(data, function (index, value) {
                html += '<option value=""></option>';
                html += '<option value="' +value.id +'">' +value.name + "</option>";
            });
            $("#class_id").html(html);
        },
    });

    $("#class_id").select2({
        ajax: {
            url: "{{ route('get.classes') }}",
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    search_text: params.term, // Search term entered by the user
                };
            },
            processResults: function (data) {
                var results = $.map(data, function (item) {
                    return {
                        id: item.id,
                        text: item.name,
                    };
                });

                return {
                    results: results,
                };
            },
            cache: true,
        },
        placeholder: "Select Class",
    });
}
</script>
