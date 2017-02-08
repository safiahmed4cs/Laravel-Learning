<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2"  v-for="item in users">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 userName">
                                <strong class="upperCase">{{ item.name }}</strong> saying that...
                            </div>
                            <div class="col-md-6">
                                <p style="float:right;">{{ postedOn(item) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>My email id is <strong>{{ item.email }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
import Client from '../models/Client';

    export default {
        data(){
            return {
                users: []
            }
        },
        created() {
            Client.all( response => this.users = response ); 
            axios.get('/clients.json')
                .then(response => this.users = response.data);
                // .then(({data}) => this.users = data);
        },
        methods: {
            postedOn(item){
                return moment(status.created_at).fromNow();
            }
        }
    }
</script>