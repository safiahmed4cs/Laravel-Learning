class User{

	static all(then) {

		return axios.get('/api/v1/users')
			.then(({data}) => then(data) );

			// .then(({data}) => then(data) );

	}

	static current(then) {

		return axios.get('/api/v1/user')
			.then(({data}) => then(data) );

			// .then(({data}) => then(data) );

	}

}

export default User;