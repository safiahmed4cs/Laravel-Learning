<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 userName">
                                <strong class="upperCase">{{ user.name }}</strong> saying that...
                            </div>
                            <div class="col-md-6">
                                <p style="float:right;">{{ postedOn(user) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>My email id is {{ user.email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
import User from '../models/User';

    export default {
        data(){
            return {
                user: []
            }
        },
        created() {
            User.current( response => this.user = response ); 
            // axios.get('/api/v1/user.json')
            //     .then(response => this.user = response.data);
                // .then(({data}) => this.user = data);
        },
        methods: {
            postedOn(user){
                return moment(status.created_at).fromNow();
            }
        }
    }
</script>