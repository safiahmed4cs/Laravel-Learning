import VueRouter from 'vue-router';

let routes = [
	{
		path: '/dashboard',
		component: require('./pages/dashboard')
	},
	{
		path: '/about',
		component: require('./pages/about')
	},
	{
		path: '/blog',
		component: require('./pages/blog')
	},
	{
		path: '/user',
		component: require('./pages/user')
	},
	{
		path: '/tokens',
		component: require('./pages/token')
	},
	{
		path: '/project/create',
		component: require('./pages/project/form')
	},
	{
		path: '/task/create',
		component: require('./pages/task/form')
	}
]

export default new VueRouter({
	routes,

	linkActiveClass: 'is-active' 
});