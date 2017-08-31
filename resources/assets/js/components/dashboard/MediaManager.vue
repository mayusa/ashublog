<template>
<div id="app-dropzone" class="m-b-50">
    <button class="button is-pulled-right" @click="toggleZone">{{btn_text}}</button>
    <dropzone id="myVueDropzone" v-if="showZone" :url="upload_url" :headers="csrfHeaders" :maxNumberOfFiles="maxNumberOfFiles" :maxFileSizeInMB="maxFileSizeInMB" v-on:vdropzone-success="showSuccess">
        <!-- Optional parameters if any! -->
        <div class="btn-cancle has-text-right has-text is-size-3"></div>
    </dropzone>
</div>
</template>

<script>
import Dropzone from 'vue2-dropzone'
import {uploadMediaPic} from './../../config'
export default {
    data(){
        return {
            btn_text:"add media",
            showZone: false,
            upload_url: '',
            csrfHeaders: {},
            maxNumberOfFiles: 3,
            maxFileSizeInMB: 2
        }
    },
    components: {
      Dropzone
    },
    methods:{
      'showSuccess': function (file) {
        console.log('A file was successfully uploaded')
      },
      'toggleZone': function (){
        this.showZone= !this.showZone
        this.btn_text=this.showZone ? 'Close Dropzone' : 'Add Media'
      }
    },
    created(){

      this.csrfHeaders = {
        'X-CSRF-TOKEN': window.ashucn.csrfToken
      }
        this.upload_url = uploadMediaPic
    }
}
</script>
<style lang="css">

</style>
