<template>
    <div >
            <div v-for="device in devices" >
                <device-state :device="device" ></device-state>
            </div>
    </div>
</template>

<script>
    export default {
          data(){
            return {
                butonSave: true,
                devices: [],
                host: 'http://10.0.0.139:8080',
            }
        },
        mounted() {
            this.getAllDevices()
        },
        methods: {
            
            getAllDevices: function (){
                let local = this;
                axios.get(this.host + "/device/scann")
                .then((response) => {
                    local.devices = response.data;
                }).catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        }
    }
</script>
