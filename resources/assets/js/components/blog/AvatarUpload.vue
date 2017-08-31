<template>
  <div class="Image-upload-wrapper Image-upload">
    <div id="croppie"></div>
    <div id="upload-wrapper">
      <button class="button"
        v-on:click="modalVisible = !modalVisible">
         Upload image
      </button>

      <div class="Modal" v-if="modalVisible">
        <div class="field">
          <div class="file is-primary">
            <label class="file-label">
              <input class="file-input" name="image-upload" type="file" id="upload-image" v-on:change="setUpFileUploader">
              <div class="file-cta">
                <span class="file-icon">
                  <i class="fa fa-upload"></i>
                </span>
                <span class="file-label">
                  Select a file…
                </span>
              </div>
            </label>
          </div>
        </div>

        <button class="button is-success" id="uploadFileCall" v-on:click="uploadFile">
          <i class="fa" v-bind:class="button.class"></i> {{button.name}}
        </button>

        <button class="button is-danger" v-on:click="cancelUpload">
          <i class="fa fa-times"></i> Cancel
        </button>

      </div>
      <!-- /modal -->
    </div>
    <!-- /wrapper -->

  </div>
</template>

<script>
import Croppie from 'croppie'
import {uploadProfilePic} from './../../config'
console.log("uploadProfilePic", uploadProfilePic);
 export default {
    props: ['imgUrl'],
    mounted () {
      this.$on('imgUploaded', function (imageData) {
        this.image = imageData
        this.croppie.destroy()
        this.setUpCroppie(imageData)
      })
      this.image = this.imgUrl
      this.setUpCroppie()
    },
    data () {
      return {
        button: {
          name: 'Upload',
          class: 'fa-upload'
        },
        showZoomer: false,
        canUpload: true,
        modalVisible: false,
        croppie: null,
        image: null
      }
    },
    methods: {
      uploadFile () {
        this.canUpload = false
        this.button = {
          name: 'Uploading...',
          class: 'fa-refresh fa-spin'
        }
        this.croppie.result({
          type: 'canvas',
          size: 'viewport'
        }).then((response) => {
          this.image = response
          axios.post(uploadProfilePic, {file: this.image})
            .then((response) => {
                console.log("response", response);
                if(response.status == 201){
                    toastr.options.positionClass = "toast-bottom-right";
                    toastr.success("update avatar successfully");
                }
              this.canUpload = true
              this.modalVisible = false
              $("input[type='range']").css('display', 'none');
              this.button = {
                name: 'Upload',
                class: 'fa-upload'
              }
            })
        })
      },
      setUpCroppie () {
        let el = document.getElementById('croppie')
        this.croppie = new Croppie(el, {
          viewport: { width: 200, height: 200, type: 'circle' },
          boundary: { width: 220, height: 220 },
          showZoomer: this.showZoomer,
          enableOrientation: true
        })
        this.croppie.bind({
          url: this.image
        })
      },
      setUpFileUploader (e) {
        let files = e.target.files || e.dataTransfer.files
        if (!files.length) {
          return
        }
        this.createImage(files[0])
        this.showZoomer = true
      },
      createImage (file) {
        var image = new Image()
        var reader = new FileReader()
        var vm = this
        reader.onload = (e) => {
          vm.image = e.target.result
          vm.$emit('imgUploaded', e.target.result)
        }
        reader.readAsDataURL(file)
      },
      cancelUpload(){
        this.modalVisible = false;
        $("input[type='range']").css('display', 'none');
      }
    }
  }
</script>

<style lang="css">
  .Image-upload {
    .Modal {
      border-top: 1px solid #f4f4f4;
      margin-top: 10px;
      h4 {
        margin-bottom: 20px;
      }
    }
    div#upload-wrapper {
      text-align: center;
    }
    .input-file {
      text-align: left;
      width: 50%;
      margin: 0px auto;
      margin-bottom: 20px;
    }
  }
</style>
