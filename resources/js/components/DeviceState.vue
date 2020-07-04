<template>
    <div class="card">
        <div class="card-content">
            <div class="content">
                <div v-if="info != null ">
                    <label>
                        {{ device.address }}
                    </label>
                    <br>
                    <button  v-show="info.data.switch == 'off'"  v-on:click="deviceState(1)" class="button is-success"><i class="fas fa-power-off"></i></button>
                    <button v-show="info.data.switch == 'on'"  v-on:click="deviceState(0)" class="button is-danger"><i class="fas fa-power-off"></i></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                butonSave: true,
                host: 'http://10.0.0.139:8080',
                info: null,
            }
        },
        props: ['device'],
        mounted() {
            this.infoDevice()
        },
        methods: {
            infoDevice: function (){
                let local = this;
                axios.get(this.host + "/device/info/" + this.device.address) 
                .then((response) => {
                    local.info = response.data;
                }).catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            deviceState: function (state){
                let local = this;
                axios.get(this.host + "/device/" + this.device.address+"/"+state) 
                .then((response) => {
                    local.info = response.data;
                    local.infoDevice();
                }).catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        }
    }
</script>
<style scoped>
 .card{
    align-content: center;
    text-align: center;
    margin: 5px;
    background: inherit;
    display: inline-block;
    overflow: hidden;  
    webkit-backdrop-filter: blur(20px);
    backdrop-filter: blur(20px);
    background-color: rgba(255,255,255,.3);
     transition: box-shadow 0.2s;

 }

 .card:hover{
     box-shadow: 0px 0px 10px 1px  #0a0a0a4a;
     transition: box-shadow 0.2s;
 }


    .card:before{
      background-color: rgba(255,255,255,.3);
      content: ‘’;
      background: inherit; 
      position: absolute;
      left: -25px;  
      right: 0;
      top: -25px;  
      bottom: 0;
      box-shadow: inset 0 0 0 200px rgba(255,255,255,0.3);
      filter: blur(20px);
      backdrop-filter: blur(20px)
    }

    button{
        align-content: center;
        opacity:0.6 !important;
    }
</style>