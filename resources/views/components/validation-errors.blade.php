@if ($errors->any())

    @foreach ($errors->all() as $error)
        @php
            toastr()->addError($error);
        @endphp
    @endforeach
@endif
