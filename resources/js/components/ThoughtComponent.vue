<template>
    <div class="card">
        <div class="card-header">Publicado en {{thought.created_at}}</div>

        <div class="card-body">
            <p>
                {{thought.description}}

            </p>
        </div>
        <div class="panel-footer">
            <button class="btn btn-secondary">
                Editar
            </button>
             <button class="btn btn-danger">
                Eliminar
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['thought'],
        data() {
            return {
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
