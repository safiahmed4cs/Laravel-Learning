<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 userName">
                                <strong class="upperCase">Tasks</strong> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <tasks-list>I am here</tasks-list>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            // axios call here.
        }
    }
</script>
        