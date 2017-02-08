<template>
	<div class="row-fluid">
        <div v-text="flashMessage"></div>
   		<form method="post" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <!-- {{ csrf_field() }} -->
            <!--  {{ URL::to('workflows') }} -->
            <modules-list></modules-list>
            <actions-list></actions-list>
            <div class="form-group">
                <label for="name">Name of the approval</label>
                <input type="text" class="form-control" id="name" placeholder="Enter the name of the approval"  aria-describedby="nameOfApproval" v-model="form.name" @keydown="form.errors.clear('name')" />
                <span id="nameOfApproval" class="help-block">This will help you to remember when you come next time</span>
                <span class="text-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <textarea class="form-control" placeholder="Enter the description" v-model="form.description"></textarea>
                <span class="text-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>
            <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" :disabled="form.errors.any()" class="btn btn-success">Submit</button>
        </form>
    </div>
</template>

<script>
// import Errors from '../../models/Errors'; 
import Form from '../../models/Form'; 
import Workflow from '../../models/Workflow.js';

    export default {
    	created() {
            
    	},
        mounted() {
            console.log('Approval Flow form mounted.')
        },
        data(){
        	return {
                form : new Form({
                    name: '',
                    description: '',
                }),
                // errors: new Errors(),
                flashMessage : false,
                isLoading: false
        	}
        },
        methods: {
            onSubmit(){
                this.form.submit('post', '/api/v1/approvalSettings/store')
            }
        }
    }
</script>
