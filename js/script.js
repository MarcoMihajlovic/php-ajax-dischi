var app = new Vue ({
    el: "#root",

    data: {
        albums: [],
        types: [],
        filterAuthor: "all",
    },

    methods: {
        getAlbum: function() {
            
            if(this.filterAuthor == 'all') {
                return this.albums;
            }

            this.albums = [];

            axios
                .get('http://localhost/php-ajax-dischi/server.php?author=' + this.filterAuthor)
                .then((request) =>{
                    request.data.forEach(element => {
                        this.albums.push(element);
                    })

                });

        }
    },

    created () {
        axios
            .get('http://localhost/php-ajax-dischi/server.php?author=' + this.filterAuthor)
            .then((request) =>{
                request.data.forEach(element => {
                    this.albums.push(element);
                    if(!this.types.includes(element.author)) {
                        this.types.push(element.author);
                    };
                })
            });
            Vue.config.devtools = true;
    }
})