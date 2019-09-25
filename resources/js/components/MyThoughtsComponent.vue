<template>
    <div class="col-md-8">
        
        <form-component></form-component>

        <thought-component 
        v-for="thought in thoughts" 
        :key="thought.id"
        :thought="thought"
        @new="addThought">
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
            console.log('Component mounted.')
        },
        methods: {
            addThought(thought) {
                this.thoughts.push(thought);
            }
        }
    }
</script>
