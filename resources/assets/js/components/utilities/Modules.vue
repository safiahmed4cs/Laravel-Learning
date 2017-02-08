<template>
	<div class="form-group">
   		<label for="name"> {{ trans('Select Module') }}</label>
    	<select class="form-control" v-model="selected">
            <option value=""> {{ trans('Select One ...') }} </option>
			<option v-for="module in modules" :value="module.id">{{ module.name }}</option>
    	</select>
    </div>
</template>

<script>
    export default {
    	created() {
    		
    	},
        mounted() {
            console.log('Modules mounted.')
        },
        data(){
        	return {
        		selected : '',
        		modules: [
                    { 'id' : 1, 'name' : 'Module 1' },
                    { 'id' : 2, 'name' : 'Module 2' },
                    { 'id' : 3, 'name' : 'Module 3' }
                ]
        	}
        }
    }
</script>
