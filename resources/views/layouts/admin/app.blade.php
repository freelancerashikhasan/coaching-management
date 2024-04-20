<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Coaching Management</title>
    @include('layouts.admin.link')

    @include('layouts.admin.css')
@stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layouts.admin.navbar')

  @include('layouts.admin.sidebar')
  <div class="content-wrapper">
  <div class="content-header">

    </div>
    <section class="content">
      <div class="container-fluid">
            @yield('content')
      </div>
    </section>
  </div>
  @include('layouts.admin.footer')

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
@include('layouts.admin.script')

@stack('script')
</body>
</html>
