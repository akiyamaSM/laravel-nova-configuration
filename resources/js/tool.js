Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'laravel-nova-configuration',
            path: '/laravel-nova-configuration',
            component: require('./components/Configurations'),
        },
        {
            name: 'laravel-nova-configuration-edit',
            path: '/laravel-nova-configuration/:id/edit',
            component: require('./components/EditConfiguration'),
            props: true
        },
        {
            name: 'laravel-nova-configuration-create',
            path: '/laravel-nova-configuration/create',
            component: require('./components/CreateConfiguration'),
        }
    ])
})
