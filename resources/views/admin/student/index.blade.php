@extends('layouts.admin.app')
@section('content')
    <style>
        .leatest{
            color: var(--Dark-Gray, #403E3B);
            font-family: 'Lexend', sans-serif;
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
        .student-card{
            border-radius: 4px;
            background: var(--White, #F2F2F2);
            box-shadow: 0px 0px 15.051px 0px rgba(64, 62, 59, 0.25);
        }
        span{
            font-family: 'Lexend', sans-serif;
            color: var(--Dark-Gray, #403E3B);
            font-family: Lexend;
            font-size: 100%;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

    </style>
      <div class="breadcumb" style="padding: 30px 25px;">
        {!! modal('student') !!}
      </div>
    <div class="section">
        <div class="row">
            <h5 class="leatest my-2">Our Leatest Student</h5>
            <div class="row table-responsive">
                <table id="users-table" class="data-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Details</th>
                            <th>Download</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @include('admin.department.modal')
    @include('admin.section.modal')
    @include('admin.class.modal')
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.student.index') }}",
                columns: [
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'details',
                        name: 'details'
                    },
                    {
                        data: 'download',
                        name: 'download'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },

                ],
                dom: 'Bfrtip', // Enable buttons with custom placement
                buttons: [
                    'copy',
                    {
                        extend: 'excel',
                        text: 'Export to Excel'
                    },
                    {
                        extend: 'pdf',
                        text: 'Export to PDF',
                        filename: 'users_pdf',
                        orientation: 'landscape',
                        pageSize: 'A4'
                    },
                    'print'
                ]
            });
        });
    </script>
@endpush
