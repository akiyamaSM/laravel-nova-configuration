Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'laravel-nova-configuration',
            path: '/laravel-nova-configuration',
            component: require('./components/Tool'),
        },
    ])
})
