<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        ready(){
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
};
    window.axios.get('/api/user').then(response => {
        console.log(response.data);
    });
            this.$http.get('/api/user').then(response=>{

                console.log('hello world______test');
                console.log(response.data);
            });
        }

    }
</script>
