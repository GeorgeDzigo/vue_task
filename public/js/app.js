new Vue({
    el: "#root",
    data: {
        users: [],
        errors: [],
        message: '',
    },

    created() {
        this.getUsers();
        setInterval(this.getUsers, 150000);
    },
    methods: {
        getUsers() {
            axios.get('/api/users')
            .then(res => this.users = res.data)
            .catch(err => this.errors = err);
        }
    },

    computed: {
        searchedUsers() {
            return this.users.filter(user => {
                if (user.name.toLowerCase().match(this.message.toLowerCase()) || user.email.toLowerCase().match(this.message.toLowerCase()))
                    return true;
            })
        }
    }
})
