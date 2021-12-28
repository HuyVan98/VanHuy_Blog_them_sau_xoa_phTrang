<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ví dụ về Phân trang với Laravel 5.4 và Vue.js 2</div>
                    <div class="panel-body">
                        <div class="panel panel-default" v-for="user in users" :user="user" :key="user.id">
                            <div class="panel-heading">
                                <h3 class="panel-title" v-text="user.name"></h3>
                            </div>
                            <div class="panel-body">
                                <p v-text="user.email"></p>
                            </div>
                        </div>
                    </div>
                    <pagination v-bind:pagination="pagination" v-on:click.native="getUsers(pagination.current_page)" :offset="4"></pagination>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Pagination from '../Pagination.vue'
    export default {
        components: { Pagination },
        data () {
            return {
                users: [],
                counter: 0,
                pagination: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4
            }
        },
        mounted() {
            this.getUsers(this.pagination.current_page);
        },
        methods: {
            getUsers (page) {
                axios.get('api/users?page='+page)
                    .then((response) => {
                        this.users = response.data.data_users.data
                        this.pagination = response.data.data_users
                    })
            }
        }
    }
</script>
