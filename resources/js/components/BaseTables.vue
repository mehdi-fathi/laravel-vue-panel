<template>

    <div class="animated fadeIn">
        <div class="row">
            <!--d-->
            <Table :data="data" label></Table>
            <!--/.col-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> جدول راه راه
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>نام کاربری</th>
                                <th>تاریخ ثبت</th>
                                <th>نقش</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>رضا حسینی</td>
                                <td>2012/01/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>رضا اکبری</td>
                                <td>2012/02/01</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-danger">Banned</span>
                                </td>
                            </tr>
                            <tr>
                                <td>محمد حسینی</td>
                                <td>2012/02/01</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-secondary">غیر فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدی خیری</td>
                                <td>2012/03/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-warning">معلق</span>
                                </td>
                            </tr>
                            <tr>
                                <td>عباس امیری</td>
                                <td>2012/01/21</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> جدول
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-sm">
                            <thead>
                            <tr>
                                <th>نام کاربری</th>
                                <th>تاریخ ثبت</th>
                                <th>نقش</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>اکبر ایمانی</td>
                                <td>2012/01/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>نعیمه موسوی</td>
                                <td>2012/02/01</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-danger">Banned</span>
                                </td>
                            </tr>
                            <tr>
                                <td>محمد علوی</td>
                                <td>2012/02/01</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-secondary">غیر فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>هوتن مختاری</td>
                                <td>2012/03/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-warning">معلق</span>
                                </td>
                            </tr>
                            <tr>
                                <td>رضا یونسی</td>
                                <td>2012/01/21</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.col-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> بردر جدول
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>نام کاربری</th>
                                <th>تاریخ ثبت</th>
                                <th>نقش</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>رامیت رضاییان</td>
                                <td>2012/01/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>فاطمه نازینین</td>
                                <td>2012/02/01</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-danger">Banned</span>
                                </td>
                            </tr>
                            <tr>
                                <td>مهدوکیا</td>
                                <td>2012/02/01</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-secondary">غیر فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>سارا هدوی</td>
                                <td>2012/03/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-warning">معلق</span>
                                </td>
                            </tr>
                            <tr>
                                <td>مجتبی علوی</td>
                                <td>2012/01/21</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> جدول ترکیبی
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                                <th>نام کاربری</th>
                                <th>تاریخ ثبت</th>
                                <th>نقش</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>محمود کریمی</td>
                                <td>2012/01/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>رضا یونسی</td>
                                <td>2012/02/01</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-danger">Banned</span>
                                </td>
                            </tr>
                            <tr>
                                <td>مرتضی ساجدی</td>
                                <td>2012/02/01</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-secondary">غیر فعال</span>
                                </td>
                            </tr>
                            <tr>
                                <td>مرتضی ساجدی</td>
                                <td>2012/03/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-warning">معلق</span>
                                </td>
                            </tr>
                            <tr>
                                <td>محمود کریمی</td>
                                <td>2012/01/21</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-success">فعال</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
</template>
<script>
    import Table from "./tables/table"

    export default {
        components: {Table},
        name: "BaseTables",
        props: [
            'bamWam'
        ],
        data() {
            return {
                data: {
                    "head": [
                        'نام',
                        'نام خانوادگی',
                        'تعداد پست',
                        'وضعیت'
                    ],
                    "body": [],
                }
            }
        },
        created() {
            console.log(this.bamWam);
        },
        mounted() {
            axios
                .get('http://127.0.0.1:8000/users/table')
                .then(response => (this.data.body = response.data))
        }
    }
</script>
