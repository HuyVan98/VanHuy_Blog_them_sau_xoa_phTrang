<template>
    <div class="addItem">
        <input type="text" v-model="item.name">
        <a @click="them()" href="#" >Them</a>

    </div>
</template>
<script>
export default {
    data() {
        return {
            item:{
                name:""
            }
        }
    },
    methods: {
        them(){
            if(this.item.name==''){
                return;
            }
            axios.post('api/item/store',{
                item: this.item
            })
            .then(response=>{
                if (response.status==201) {
                    this.item.name=="";
                }
            })
            .catch(error=>{
                console.log(error);
            })
        }
    },
}
</script>
