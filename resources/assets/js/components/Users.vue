<template>
    <div>
        <h2>Listing users</h2>
        <a href="#" class="btn btn-primary">
            Add new user
        </a>

        <table class="table">	
            <thead>	
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users">
                    <td>{{user.id}}</td>
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a> || 
                        <a href="#" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                users: []
            }
        },
        mounted() {
            this.getUsers();
        },
        methods: {
            getUsers() {
                axios.get('api/user/get').then(response => {
                    console.log(response);
                    this.users = response.data;
                });
            }
        }
    }
</script>

<style>

</style>