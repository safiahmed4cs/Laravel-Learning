<template>
   <div class="container">
        <div :class="{ 'isLoading' : isLoading }"></div>
        <div id="flashMessage">
            <p v-text="flashMessage"></p>
        </div>
        <div class="row">
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="project in projects">
                        <td>{{ project.name }}</td>
                        <td>{{ project.description }}</td>
                        <td>{{ createdOn(project) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 userName">
                                <strong class="upperCase">Forms</strong> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    <div class="text-success" v-text="success"></div>
                    <div class="flashMessage" v-text="flashMessage"></div>
                        <form method="POST" action='/project/store' @submit.prevent="onSubmit">
                            <div class="control">
                                <label for="name" class="label">Project Name:</label>
                                <input type="text" id="name" class="form-control" v-model="name" @keydown="errors.clear('name')" />
                                <span class="text-danger" v-text="errors.get('name')"></span>
                            </div>
                            <div class="control">
                                <label for="name" class="label">Project Desctription:</label>
                                <input type="text" id="description" class="form-control" v-model="description" @keydown="errors.clear('description')" />
                                <span class="text-danger" v-text="errors.get('description')"></span>
                            </div>
                            <br/>
                            <div class="control">
                                <input type="submit" class="btn btn-primary" value="Create" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
import Errors from '../../models/Errors'; 

export default {
    data: function(){
        return {
            name: '',
            description: '',
            errors: new Errors(),
            success: '',
            flashMessage: '',
            projects: [],
            isLoading: true
        }
    },
    created() {
        axios.get('/api/v1/projects')
            .then(response => {
                this.projects = response.data
                this.isLoading = false;
                 })
            .catch(error => { this.errors.record(error.response.data) })
    },
    ready(){
    },
    methods: {
        onSubmit(){
            axios.post('/api/v1/projects/store', {
                name: this.name,
                description: this.description
            })
            .then(response => {
                this.flashMessage = response.data.message;
                this.name=''; this.description='';
                this.projects.push(response.data.project);
                this.isLoading = false;
            })
            .catch(error => { this.errors.record(error.response.data) })
        },
        projectList(){
            this.projects = [
                  {
                    title: 'Listing title number one',
                    description: 'Description 1'
                  },
                  {
                    title: 'Listing title number two',
                    description: 'Description 2'
                  }
                ]
        },

        createdOn(project){
            return moment(project.created_at).fromNow();
        }
    }
}
</script>
        