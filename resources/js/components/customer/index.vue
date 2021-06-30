<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title">Customer</span>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-stripee table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Create_At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laravel</td>
                            <td>CAHy</td>
                            <td>Vantu@.com</td>
                            <td>0943</td>
                            <td>45 hien nam</td>
                            <td>29/3/1221</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-footer"></div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            params:{
                page: 1,
                per_page: 10,
                soft_column: 'id',
                direction: 'desc',
                search_column:'id',
                search_operator: 'equal_to',
                search_query_1: '',
                search_query_2: '',
            },
        }
    },
    mounted(){
        this.fetchData();
    },
    watch:{},
    computed:{},
    methods:{
        fetchData(){
            fetch(this.builUrl())
            .then(response => response.json())
            .then(data => console.log(data.data))
            .catch(error => {console.log(error);})
        },
        buildUrl(){
            let p = this.params;
            return 'api/customer?page=1&per_page=10&soft_column=id&direction=desc&search_column=id&search_operator=equal_to&search_query_1=2'
        }
    }
    
}
</script>
