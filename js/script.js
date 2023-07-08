const {createApp} = Vue;

createApp({
    data(){
        return{
            todoList: null,
            apiUrl: 'server.php'
        }
    },
    mounted(){
        //effettuo la chiamata al server.php per restituirmi la lista nell'array
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data);
            this.todoList = response.data;
        });
    }

}).mount('#app');