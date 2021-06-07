<template>
<div>
    <table>
        <h1>Hola caracola</h1>
        <caption>{{nombre_tabla}}</caption>
        <thead>
        <tr>
            <th v-for="campo in campos">
                {{campo}}
            </th>
        </tr>
        </thead>
        <tr v-for="fila in filas">
            <td v-for="valor in fila">
                {{valor}}
            </td>
        </tr>
    </table>
</div>
</template>

<script>

export default {
    name: "tabla",
    props:{
        nombre_tabla:String,
        filas_serializadas:String,
        campos_serializados:String,
    },

    data(){
        return {
            filas : [],
            campos : []
        }
    },
    beforeCreate() {
        console.log("Antes de crear el componnete");

    },
    created(){
        console.log("Componente creado");
    },

    mounted() {
        console.log("Creado el componente");
        this.filas=JSON.parse(this.filas_serializadas);
        this.campos=JSON.parse(this.campos_serializados);
        console.log("Valores de campos "+this.campos);
    }
}
</script>

<style scoped>

</style>
