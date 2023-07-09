const {createApp} = Vue;

createApp({
    data(){
        return{
            todoList: null,
            apiUrl: 'server.php',
            nuova_task: " ",
        }
    },
    mounted(){
        //effettuo la chiamata al server.php per restituirmi la lista nell'array
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data);
            this.todoList = response.data;
        });
    },
    methods: {
        inviaLista(){
            //se l'utente inserisce una nuova task
            if(this.nuova_task != " "){
                //creo un nuovo oggetto 
                const data = {
                    text: this.nuova_task,
                    done: true,
                }
                //chiamata api + il nuovo ogetto che ho creato
                axios.post(this.apiUrl, data, {
                    headers: {'Content-Type' : 'multipart/form-data'}
                }).then ((response)=> {
                    this.todoList = response.data;
                    this.todoList = '';
                })
            }

        }

    },

}).mount('#app');