<template>
    <div id="facebook-slider" :class="{expandfb:showSlideUp}" >
        <div id="facebook-slideup"  >
    <div class="facebook-slideup-button" @click="showSlideUp=!showSlideUp">
        View Facebook
        <i v-if="!showSlideUp" class="fa fa-chevron-up"></i>
        <i v-else class="fa fa-chevron-down"></i>
    </div>
    <div class="fb-page"
         data-href="https://www.facebook.com/facebhttps://www.facebook.com/Salter-House-Museum-435714077031842/ook"
         data-tabs="timeline" data-width="500" data-height="400" data-small-header="true"
         data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
        <blockquote
            cite="https://www.facebook.com/facebhttps://www.facebook.com/Salter-House-Museum-435714077031842/ook"
            class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/facebhttps://www.facebook.com/Salter-House-Museum-435714077031842/ook">Salter
                House Museum</a></blockquote>
    </div>
    </div>
    </div>


</template>

<script>
    export default {
        data() {
            return {
                showSlideUp: false,
                height: '0px',
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

