<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-8">
                                <strong class="upperCase">Tokens</strong> 
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel-body">
                        <passport-clients></passport-clients>
						<passport-authorized-clients></passport-authorized-clients>
						<passport-personal-access-tokens></passport-personal-access-tokens>
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
        