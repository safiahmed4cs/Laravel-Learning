<template>
	<div class="form-group">
   		<label for="name"> {{ trans('Select Action') }}</label>
    	<select class="form-control" v-model="selected">
            <option value=""> {{ trans('Select One ...') }} </option>
			<option v-for="action in Actions" :value="action.id">{{ action.name }}</option>
    	</select>
    </div>
</template>

<script>
    export default {
    	created() {
    		
    	},
        mounted() {
            console.log('Actions mounted.')
        },
        data(){
        	return {
        		selected : '',
        		Actions: [
                    { 'id' : 1, 'name' : 'Action 1' },
                    { 'id' : 2, 'name' : 'Action 2' },
                    { 'id' : 3, 'name' : 'Action 3' }
                ]
        	}
        }
    }
</script>
