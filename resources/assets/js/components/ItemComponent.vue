<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" v-model="inputText" />
                </div>
                <button class="btn btn-success pull-right" @click="addItem()"><i class="fa fa-plus"></i> Add Item</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table" id="items_table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="item in items">
                            <td>{{ item.id }}</td>
                            <td>{{ item.name }}</td>
                            <td style="text-align: right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-danger" @click="removeItem(item)"><i class="fa fa-trash"></i></button>
                                    <!--button type="button" class="btn btn-primary" @click="editItem(item)"><i class="fa fa-pencil"></i></button-->
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: [],
                inputText: ''
            }
        },

        mounted() {
            this.fetchItems();
        },

        methods: {
            fetchItems() {
                this.items = [
                    {
                        "id": 1,
                        "name": "velit sint"
                    },
                    {
                        "id": 2,
                        "name": "magna aute"
                    },
                    {
                        "id": 3,
                        "name": "labore cillum"
                    },
                    {
                        "id": 4,
                        "name": "laborum dolore"
                    },
                    {
                        "id": 5,
                        "name": "aute esse"
                    }
                ]
            },

            removeItem(item) {
                this.items = this.items.filter(i => i !== item)
            },

            addItem() {
                let name = this.inputText.trim();
                if (name !== '') {
                    this.items.push({ id: this.items.length + 1, name: name });
                    this.inputText = ''
                }
            }
        }
    }
</script>
