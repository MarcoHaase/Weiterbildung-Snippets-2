<template>
    <img 
        :src="srcimage" 
        :style="'position:absolute; left:' + left + '; top:' + top"
        :width="width"
        @click="changeImage"   
    >
</template>

<script>

export default ({
    data: () => ({
        srcimage : "",
        images : [
            "img/blatt.png", 
            "img/seerose1.png", 
            "img/seerose2.png", 
            "img/seerose3.png"
        ],
    }),
    computed:{
    },
    methods:{
        randomImage () 
        {
            return this.images[Math.floor(Math.random() * this.images.length)];
        },
        changeImage ()
        {
            let i = this.randomImage();
            j = 0;
            while (i == this.srcimage && j < 10000) 
            {
                j++;
                i = this.randomImage();
            }
                
            this.srcimage = i;
        }
    },
    props: {
        src:String,
        left:String,
        top:String,
        width:String
    },
    created () {
        this.srcimage = this.src;
    }
});
</script>

<style scoped>
</style>

<style>
</style>