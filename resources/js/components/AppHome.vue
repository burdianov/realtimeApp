<template>
    <div>
        <app-toolbar></app-toolbar>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import appToolbar from './AppToolbar'
    import appFooter from './AppFooter'

    export default {
        components: {
            appToolbar,
            appFooter
        }
    }
</script>

<style scoped>

</style>