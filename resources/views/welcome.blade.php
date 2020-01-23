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



    <div>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Dropdown button
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </div>
    </div>
</footer>

@include('panel.sections.footer.scripts')
<script type="text/javascript" src="js/app-vue/app.js"></script>
@stack('styles')

</body>
</html>
