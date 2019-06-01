
<template>

        <!--{{ $route.params.userId }}-->
        <div>

            <Input v-model="title">
                <span slot="prepend">标题</span>

            </Input>
            {{ title }}
        </div>

</template>
<script>
    export default {
        data () {
            return {
                title:''
            }
        },
        mounted(){

            console.log(this.$route.params.userId)

            axios.get('api/topics/'+this.$route.params.userId).then(response=>{
                this.title = response.data.topic.title;
                console.log(response.data.topic.title)
            })
        }
    }
</script>



