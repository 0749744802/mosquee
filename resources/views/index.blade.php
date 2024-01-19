@include('section.header')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
   @include('section.top')

           @include('section.nav')

@yield('content')
@yield('content')

           @include('section.footer')