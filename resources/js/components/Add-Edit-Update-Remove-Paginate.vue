<template>
  <div>
    <div class="root">
      <h2>Them sinh vien</h2>
      <form>
        <label for="fname">Ten</label>
        <input type="text" v-model="user.name" />
        <label for="fname">Email</label>
        <input type="text" v-model="user.email" />
        <label for="fname">Password</label>
        <input type="text" v-model="user.password" />
        <button @click="createUser" type="button">Them</button>
      </form>
    </div>
    <div id="root">
      <h2>Danh sach sinh vien</h2>
      <a href=""><button class="button" type="button">Them</button></a>
      <table>
        <tr>
          <th>Ten</th>
          <th>Email</th>
          <th>Tuy chon</th>
        </tr>
        <!--
            row: value
            key: kay cua arayy
         -->
        <tr v-for="(row, key) in list_users" :key="key">
          <td v-if="!row.isEdit">{{ row.name }}</td>
          <td v-else>
              <input type="text" v-model="selectedUser.name">
          </td>
          <td v-if="!row.isEdit">{{ row.email }}</td>
          <td v-else>
              <input type="text" v-model="selectedUser.email">
          </td>
          <td v-if="!row.isEdit">
              <button v-on:click="selectedUserItem(row)">Sua</button>
              <button @click.prevent="remove(row, key)">Xoa</button>
          </td>
          <td v-else>
            <button v-on:click="updateUser(key)">save</button>
            <button v-on:click="row.isEdit=false">huy</button>
            </td>
        </tr>
      </table>
      <pagination v-bind:pagination="pagination" v-on:click.native="getListUser(pagination.current_page)" :offset="3"></pagination>
    </div>
  </div>
</template>

<script>
// function func(){

// }

// var funb = function(){

// }

// func = () =>{

// }
 import Pagination from './Pagination.vue';
export default {
    components: { Pagination },
  data() {
    return {
    user: {
        name: "",
        email: "",
      },
    selectedUser:{},
    errors: [],
    list_users:[],
    user_item:[],
    // phan trang
    pagination: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
    },
    offset: 3
    };
  },
  created() {
    this.getListUser();
  },
  methods: {
      getListUser(page){
        axios.get('api/users?page='+page)
        .then(response=>{
            console.log(response);
            this.list_users=response.data.data_users.data;
            this.pagination = response.data.data_users
            // console.log(response.data.data_users);
            // this.list_users.forEach(item=>{
            //     Vue.set(item, 'isEdit', false)
            // })
        })
    },
    mounted() {
        this.getListUser(this.pagination.current_page);
        },
    createUser() {
      axios.post("api/users", {
          name: this.user.name,
          email: this.user.email,
          password: this.user.password,
        })
        .then(response => {
            // this.user_item=response.data.data;
            // console.log(response.data.data);
            // console.log(user_item);
            // console.log(response.data.data)
            this.list_users.push(response.data.data);
            // this.list_users.push(...response.data.data, isEdit=false);
        })
        .catch((error) => {
          this.errors = error.response.data.errors.name;
        });
    },
    selectedUserItem(user){
        this.selectedUser={ ...user }
        user.isEdit=true
    },
    updateUser(index){
        axios.put('/api/users/' + this.selectedUser.id,{name:this.selectedUser.name, email:this.selectedUser.email})
        .then(() => {
            this.list_users[index].name=this.selectedUser.name
            this.list_users[index].email=this.selectedUser.email
            this.list_users[index].isEdit=false
        })
        .catch(error=>{
            this.errors=error.response.data.errors.name
        })
    },
    remove(row, index){
        axios.delete('api/users/'+row.id)
        .then(()=>{
            this.list_users.splice(index, 1);
            // this.list_users.splice(index,1);
        })
        .catch(error=>{
            this.error=error.response.data.errors.name
        })
    }
  },
};
</script>


<style>
    #root {
        width: 800px;
        margin: 0 auto;
        background-color: rgb(250, 242, 242);
    }

    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }

    table {
        width: 100%;
    }

    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    font-size: 16px;
    padding: 10px;
    }
     input {
        width: 100%;
    }
</style>
