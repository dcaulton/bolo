<template>
    <div class="thumbnail-flow-panel-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Thumbnail Flow Panel
                        <div class="ml-3 float-right">
                        <a class="btn btn-primary" href="#thumbnail-flow-panel" data-toggle="collapse">hide</a>
                        </div>
                    </div>

                    <div id="thumbnail-flow-panel" class="collapse in">
                        <div class="card-body">
                            I'm a thumbnail flow panel.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('ThumbnailFlowPanel Component mounted.')
        }
    }
</script>
