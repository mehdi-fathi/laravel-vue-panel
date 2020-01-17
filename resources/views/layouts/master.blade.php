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

<div class="app-body">

    <div class="sidebar">
        @include('panel.sections.side.sidebar')
    </div>

    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">خانه</li>
            <li class="breadcrumb-item"><a href="#">ادمین</a></li>
            <li class="breadcrumb-item active">داشبورد</li>

            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="دکمه های گروهی">
                    <a class="btn" href="#"><i class="icon-speech"></i></a>
                    <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;داشبود</a>
                    <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
                </div>
            </li>
        </ol>
        @yield('content')
    </main>

    <aside class="aside-menu">
        @include('panel.sections.side.side-menu')
    </aside>

</div>

<footer class="app-footer">
    @include('panel.sections.footer.footer')
</footer>

@include('panel.sections.footer.scripts')
@stack('styles')

</body>
</html>
