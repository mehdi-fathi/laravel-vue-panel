@extends('layouts.master')

@section('title', 'Page Title')

{{--@section('sidebar')--}}
{{--    @parent--}}
{{--    <p>This is appended to the master sidebar.</p>--}}
{{--@stop--}}

@section('content')
        <div id="app">
            <dashboard></dashboard>
        </div>


    <!-- /.conainer-fluid -->
@stop
<script>
    export default
</script>
