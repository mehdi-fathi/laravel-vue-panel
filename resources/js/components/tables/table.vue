<template>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> جدول ساده
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
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
                        <td>محمد نوری</td>
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
                        <td>یاسر عبدلهی</td>
                        <td>2012/02/01</td>
                        <td>Admin</td>
                        <td>
                            <span class="badge badge-secondary">غیر فعال</span>
                        </td>
                    </tr>
                    <tr>
                        <td>محسن عزیزی</td>
                        <td>2012/03/01</td>
                        <td>Member</td>
                        <td>
                            <span class="badge badge-warning">معلق</span>
                        </td>
                    </tr>
                    <tr>
                        <td>حسین محمدی</td>
                        <td>2012/01/21</td>
                        <td>Staff</td>
                        <td>
                            <span class="badge badge-success">فعال</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                ds
                <div v-for="item in score.head">
                    <span>{{ item }}</span>
                </div>
                <div v-for="item in score.body">
                    <span>{{ item }}</span>
                </div>

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
</template>

<script>
    export default {
        name: "table",
        props: {
            score: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style>

</style>
