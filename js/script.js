var app = new Vue ({
    el: "#root",

    data: {
        albums: [],
        types: [],
        filterAuthor: "all",
    },

    methods: {
        getAlbum: function() {

            this.albums = [];

            axios
                .get('http://localhost/php-ajax-dischi/server.php?author=' + this.filterAuthor)
                .then((request) =>{
                    this.albums = request.data;

                    if(this.filterAuthor == "all") {
                        request.data.forEach(element => {
                            if(!this.types.includes(element.author)) {
                                this.types.push(element.author);
                            }
                        });
                    }

                });

        }
    },

    created () {
            this.getAlbum();

            Vue.config.devtools = true;
    }
})