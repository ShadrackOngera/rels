<template>
    <form @submit.prevent="submit">
        <div class="alert alert-success" v-show="success">Message Sent successfully</div>
        <h2 class="fw-bold mb-4">Get in touch</h2>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" v-model="fields.name" class="form-control" id="spend" placeholder="Jane">
            <div class="alert alert-danger" v-if="errors.name"> {{ errors.name[0] }}</div>
        </div>
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" v-model="fields.email" class="form-control" id="receive" placeholder="email@email.com">
            <div class="alert alert-danger" v-if="errors.email"> {{ errors.email[0] }}</div>
        </div>
        <div class="mb-4">
            <div class="justify-content-between d-flex">
                <label for="message" class="form-label">Message</label>
                <label for="receive" class="form-label">{{remainingCount}}</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="description" v-on:keyup="countdown" v-model="fields.description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <div class="alert alert-danger" v-if="errors.description"> {{ errors.description[0] }}</div>
                <label for="description" class="text-muted">Type your question</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>
<script>
export default {
    data(){
        return{
            fields: {},
            success: false,
            errors: {},
            maxCount: 500,
            remainingCount: 500,
            message: '',
            disabled: 0,

        }
    },
    mounted(){

    },
    methods: {
        submit(){
            axios.post('store', this.fields).then(response => {
                this.fields = {};
                this.success = true;
                this.errors = {};
            }).catch(error => {
                if (error.response.status === 422){
                    this.errors =error.response.data.errors;
                }
                console.log('Error');
            });
        },
        countdown: function() {
            // this.hasError = this.remainingCount < 0;
            if (this.remainingCount >0){
                this.remainingCount = this.maxCount - this.fields.description.length;
            } else {
                this.fields.description = this.disabled = 1;

            }
        }
    }
}
</script>
