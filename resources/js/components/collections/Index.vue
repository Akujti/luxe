<template>
    <div class="">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1 class="title">My Collections</h1>
            <a href="/user/collections/create" class="btn btn-luxe ">Create</a>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Listings</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index ) in items">
                        <th scope="row">{{ index + 1 }}</th>
                        <td>
                            <div>
                                <div v-if="!item.editable">{{ item.name }}</div>
                                <input v-else type="text" v-model="item.name" class="form-control">
                            </div>
                        </td>
                        <td>
                            <div>
                                <div v-if="!item.editable">{{ item.email }}</div>
                                <input v-else type="email" v-model="item.email" class="form-control">
                            </div>
                        </td>
                        <td>{{ item.listings_count }}</td>
                        <td>
                            <div>
                                <button class="btn btn-luxe" v-if="!item.editable" @click="makeEditable(item)">
                                    Edit
                                </button>
                                <button class="btn btn-luxe" v-if="item.editable" @click="edit(item)">
                                    Update
                                </button>
                                <button class="btn btn-danger" v-if="item.editable" @click="makeEditable(item)">
                                    Cancel
                                </button>
                                <button class="btn btn-danger" v-if="!item.editable" @click="remove(item)">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr v-if="!items.length">
                        <td>No collections found</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    props: ['collections'],
    data() {
        return {
            items: this.collections.map(item => ({ ...item, editable: false })),
        }
    },
    methods: {
        makeEditable(item) {
            item.editable = !item.editable;
        },
        edit(item) {
            axios.put('/user/collections/' + item.id, item).then(res => {
                item.editable = false
            })
        },
        remove(item) {
            if (confirm('Are you sure you want to delete this collection?'))
                axios.delete('/user/collections/' + item.id).then(res => {
                    this.items = this.items.filter(i => i.id !== item.id)
                })
        }
    }
}
</script>
<style>
h1.title {
    font-family: 'gothicbold';
}

table {
    font-family: 'Montserrat', sans-serif;
}
</style>