
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component('example', require('./components/Example.vue'));

Vue.component('tasks-list', {
	template: `<div>
		<span><slot></slot></span>
	</div>`
})

//real components

//this component is to list the modules 
Vue.component(
    'approvalflow-form',
    require('./components/workflows/Approvalflow-form.vue')
);
Vue.component(
    'modules-list',
 	require('./components/utilities/Modules.vue')
);
Vue.component(
    'actions-list',
 	require('./components/utilities/Actions.vue')
);

