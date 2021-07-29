const app = new Vue({
    el: '#app',
    data: {
       url: 'mytopten.php',
       mytopten: '' 
    },
    mounted(){
        axios
            .get(this.url)
            .then(response => {                
                this.mytopten = response.data;
                console.log(response);
            })
            .catch(error => {
                console.log(error);
            })
    },
})