const { createApp } = Vue;

createApp({
    data() {
        return {
            todos: [],
        }
    },
    methods: {
        fetchTodo() {
            axios.get('./server.php').then(res => {
                    console.log(res.data);
                    this.todos = res.data
                })
                .catch((err) => {
                    console.log('errore: ', err);
                    this.todos = [];
                })
        },
    },
    mounted() {
        this.fetchTodo()
    },
}).mount('#app')