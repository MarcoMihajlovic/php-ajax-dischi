var app = new Vue ({
    el: "#root",

    data: {
        albums: [],
    },

    mounted () {
        const self = this;
        self.albums = [];
        axios
            .get('http://localhost/php-ajax-dischi/server.php')
            .then((request) =>{
                request.data.forEach(element => {
                    self.albums.push(element);
                })
            })
    }
})