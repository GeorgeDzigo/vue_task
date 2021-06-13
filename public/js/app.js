new Vue({
    el: "#root",
    data: {
        users: [],
        errors: [],
        search: '',
    },

    computed: {
        filteredUsers() {
            this.getUsersFromDB();
            return this.users.filter(user => {
                if (user.name.toLowerCase().match(this.search.toLowerCase()) || user.email.toLowerCase().match(this.search.toLowerCase()))
                    return true;
            });
        }
    },

    methods: {
        getUsersFromDB() {
            axios.get('/api/users')
            .then(response => this.users = response.data)
            .catch(errors =>  this.errors = errors);
        }
    },
    created() {
        this.getUsersFromDB();
    }
})
