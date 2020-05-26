<template>
    <div id="photo-carousel">
        <i class="fa fa-caret-left" @click="slide('down')"></i>
        <div class="img-container">
            <img :src="'/images/carousel/' + photos[index]">
        </div>

        <i class="fa fa-caret-right" @click="slide('up')"></i>
    </div>


</template>

<script>
    export default {
        data() {
            return {
                index: 0,
                photos: [
                    'pc1.jpg',
                    'pc2.jpg',
                    'pc3.jpg',
                    'pc4.jpg',
                    'pc5.jpg',
                    'pc6.jpg',
                    'pc7.jpg',
                    'pc8.jpg',
                    'pc9.jpg'
                ]
            }
        },
        methods: {
            slide(direction) {
                let length = this.photos.length - 1;
                if(direction === 'up'){
                    if(this.index === length){
                        this.index = 0;
                    }else{
                        this.index++;
                    }
                }
                if(direction === 'down') {
                    if(this.index === 0){
                        this.index = length;
                    }else{
                        this.index--;
                    }
                }
            }
        },
        mounted() {

        }
    }
</script>
<style scoped>
    #photo-carousel {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
    }

    i {
        color: #636b6f;
        font-size: 55px;
        cursor: pointer;
    }
    

    .img-container {
        width:75%;
        height:500px;
        display:flex;
        justify-content:center;
        align-items:center;
        overflow:hidden
    }
    img {
        flex-shrink:0;
        -webkit-flex-shrink: 0;
        max-width:100%;
        max-height:100%;

    }
</style>

