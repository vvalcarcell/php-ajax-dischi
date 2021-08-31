Vue.config.devtools = true;

new Vue(
    {
        el: '#app',
        data: {
            discs: []
        },
        created() {

            axios.get('http://localhost:8888/php-ajax-dischi-1/API/apiFilter.php')
                .then((response) => {
                    this.discs = response.data;
                })

        }

    }
);