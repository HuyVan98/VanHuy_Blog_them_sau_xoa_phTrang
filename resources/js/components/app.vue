<template>
    <div class="todoListContainer">
        <div class="heading">
            <h2 id="title">Too list</h2>
            <addItemForm></addItemForm>
        </div>
        <list-view :items="items"></list-view>
    </div>
</template>


<script>
import addItemForm from './addItemForm.vue'
import listView from './listView.vue'

export default {
    components:{
        addItemForm,
        listView
    },
    data() {
        return {
            items:[]
        }
    },
    methods: {
        getList(){
            axios.get('api/items')
            .then(respone=>{
                this.item=respone.data
            })
            .catch(error=>{
                console.log(error);
            })
        }
    },
    created(){
        this.getList();
    }
}
</script>
<style scoped>
    .todoListContainer{
        width: 350px;
        margin: auto;
    }
    .heading{
        background: #e6e6e6;
        padding: 10px;
    }
    #title{
        text-align: center;
    }
</style>
