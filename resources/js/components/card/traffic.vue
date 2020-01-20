<template>

    <div class="card">

    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">ترافیک سایت</h4>
                <div class="small text-muted">
                    بهمن 96
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-7 d-none d-md-block">
                <button type="button" class="btn btn-primary float-right"><i
                    class="icon-cloud-download"></i></button>
                <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                    <label class="btn btn-outline-secondary">
                        <input type="radio" name="options" id="option1" autocomplete="off"> روز
                    </label>
                    <label class="btn btn-outline-secondary active">
                        <input type="radio" name="options" id="option2" autocomplete="off" checked=""> ماه
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> سال
                    </label>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        <div class="chart-wrapper" style="height:300px;margin-top:40px;">
            <canvas id="main-chart" class="chart" height="300"></canvas>
        </div>
    </div>
    <div class="card-footer">
        <ul>
            <li>
                <div class="text-muted">بازدید</div>
                <strong>29.703 کاربر (40%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>
            <li class="d-none d-md-table-cell">
                <div class="text-muted">جدید</div>
                <strong>24.093 کاربر (20%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>
            <li>
                <div class="text-muted">بازدید صفحات</div>
                <strong>78.706 بازدید (60%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>
            <li class="d-none d-md-table-cell">
                <div class="text-muted">کاربر جدید</div>
                <strong>22.123 کاربر (80%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>
            <li class="d-none d-md-table-cell">
                <div class="text-muted">Bounce Rate</div>
                <strong>40.15%</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>
        </ul>
    </div>
    </div>

</template>

<script>
    export default {
        name: "trafic"
    }
</script>

<style scoped>

</style>
