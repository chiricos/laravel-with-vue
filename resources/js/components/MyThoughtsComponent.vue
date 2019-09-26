<template>
    <div class="col-md-8">
        
        <form-component @new="addThought"></form-component>

        <thought-component 
        v-for="(thought, index) in thoughts" 
        :key="thought.id"
        :thought="thought"
        @update="updateThought(index, ...arguments)"
        @delete="deleteTghought(index)">
        </thought-component>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                thoughts: [{
                    'id': 1,
                    'description': '23:11 del video',
                    'created_at': '17-09-2019'
                }]
            }
        },
        mounted() {
            axios.get('/drawde/my-thouhts/public/thoughts')
            .then((response) => {
                this.thoughts = response.data;
            })
        },
        methods: {
            addThought(thought) {
                this.thoughts.push(thought);
            },
            updateThought(index, thought){
                this.thoughts[index]= thought;
            },
            deleteTghought(index){
                this.thoughts.splice(index,1);
            }
        }
    }
</script>
