class Project{
	
	static store(then) {

		return axios.post('/api/v1/projects/store', {
                    name: this.name,
                    description: this.description
                })

	}

}

export default Project;