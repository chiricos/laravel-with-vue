<template>
    <div class="card">
        <div class="card-header">¿En que estàs pensando ahora?</div>

        <div class="card-body">

            <form action="" v-on:submit.prevent="newThought()">
                <div class="form-group">
                    <label for="thought">Ahora estoy pensando en:</label>
                    <input type="text" name="thought" class="form-control" v-model="description">
                </div>
                <button type="submit" class="btn btn-primary">Enviar pensamiento</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                description: ''
            }
        },
        mounted() {
            console.log('form.')
        },
        methods: {
            newThought() {
                const params = {
                    description: this.description,
                }
                this.description = '';
                axios.post('/drawde/my-thouhts/public/thoughts',params)
                .then((response) => {
                    const thought = response.data;
                    this.$emit('new',thought);
                });
            }
        }
    }
</script>
