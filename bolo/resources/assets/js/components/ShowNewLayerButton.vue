<template>
    <a class='btn btn-secondary' roll='dirty vegas' @click.prevent="showNewLayer()" href='#'>
        New Layer
    </a>
</template>

<script>
    export default {
        methods: {
            showNewLayer() {
                alert('showing the new layer dialog');
            },
        },
    }
</script>
