<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    @include('panel.sections.head.head')
    @stack('styles')
</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

<header class="app-header navbar">
    @include('panel.sections.head.header')
</header>

<div id="app">

</div>


<footer class="app-footer">
    @include('panel.sections.footer.footer')
</footer>

<script type="text/javascript" src="js/app-vue/app.js"></script>
@include('panel.sections.footer.scripts')
@stack('styles')

</body>
</html>
