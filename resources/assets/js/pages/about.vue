<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">The About Page</div>

                    <div class="panel-body">
                        I'm an about component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            axios.get('/user')
            .then(response => {
                console.log(response.data);
            });
        }
    }
</script>