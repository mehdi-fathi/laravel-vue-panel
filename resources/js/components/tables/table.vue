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
                        <th v-for="item in data.head">
                            {{ item }}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in data.body">
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.family }}</td>
                        <td>{{ item.post_cnt }}</td>
                        <td>
                            <span v-if="label" class="badge badge-success">فعال</span>
                        </td>
                    </tr>

                    </tbody>
                </table>

                <div v-for="item in score">
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
            label :{
              type: Boolean,
            },
            data: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style>

</style>
