<template>
    <div>
        <b-field label="Name">
            <b-input placeholder="Medium"
                size="is-medium"
                icon="person"
                :value="user_name">
            </b-input>
        </b-field>
        <b-field label="Email">
            <b-input type="email"
                :value="user_email"
                    size="is-medium"
                maxlength="30" disabled
                icon="email">
            </b-input>
        </b-field>
        <b-field label="Password (We'll verify password before update)">
            <b-input type="password"
                :value="password"
                    size="is-medium"
                maxlength="30"
                icon="lock"
                password-reveal>
            </b-input>
        </b-field>

        <a class="button is-info is-medium is-fullwidth">Update</a>
    </div>
</template>

<script>
    export default {
        props:[],
        data(){
            return {
                user_email: window.user.email,

                user_name: window.user.name
            }
        },
        methods:{
            sendMessage(){
                console.log("hahhha");
            }
        },
        mounted() {
            console.log('UserProfileForm Component mounted.')
        }
    }
</script>
<style lang="css">

</style>
