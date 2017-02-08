class Client{

	static all(then) {

		return axios.get('/users.json')
		    .then(({data}) => then(data));

	}

}

export default Client;