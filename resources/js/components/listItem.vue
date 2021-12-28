<template>
    <div class="item">
        <input type="checkbox"
            @change="updateCheck()"
            v-model="item.completed"
        >
        <!-- <span :class="[item.completed?'completed':'','itemText']">{{item.name}}</span> -->
        <span>{{item.name}}</span>
        <button @click="removeItem()">xoa</button>
    </div>
</template>
<script>
export default {

}
</script>
