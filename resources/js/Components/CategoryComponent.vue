<template>
    <div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(category,index) in categories">
                    <td>{{ index+1 }}</td>
                    <td>{{ category.title }}</td>
                    <td>{{ category.description }}</td>
                    <td class="btn-group">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data()
        {
            return {
                categories:{},
            }
        },
        created() {
            axios.get('/api/category').then(response => this.categories = response.data.data)
        },
        methods: {

        }

    }
</script>
