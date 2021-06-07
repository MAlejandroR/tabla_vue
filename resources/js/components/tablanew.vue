<template>

    <table>
        <caption> {{ nombre_tabla }}</caption>
        <tr>
            <th v-for="campo in campos">
                <button class="cursor-pointer" @click="ordenar(campo)">{{ campo }}</button>
            </th>
            <th></th>
            <th></th>
        </tr>

        <tr v-for="fila in filas">
            <td v-for="valor in fila">
                {{ valor }}
            </td>
            <button @click="borrar(fila.id)" class="bg-blue-400 p-1 mx-2">
                <td>Borrar</td>
            </button>
            <button @click="editar(fila.id)" class="bg-red-400 p-1 mx-2">
                <td>Editar</td>
            </button>

        </tr>
    </table>
</template>

<script>
import axios from 'axios';

export default {
    name: "tablanew",
    props: ['nombre_tabla', 'campos_serializados', 'filas_serializadas'],
    data() {
        return {
            campos: [],
            filas: [],
        }
    },
    mounted() {
        this.campos = JSON.parse(this.campos_serializados);
        this.filas = JSON.parse(this.filas_serializadas);
        console.log("Valor de tabla " + this.nombre_tabla);
    },
    methods: {
        ordenar(valor) {
            this.filas = this.filas.sort((a, b) => {
                var retorno;
                if (a[valor] > b[valor])
                    retorno = 1;
                else
                    retorno = -1;
                return retorno;
            });
        },
        borrar(clave) {

            console.log("hola con clave " + clave);
            var url = window.location.href;
            console.log("Url actual " + url);
            var self = this;

            axios.delete(

                url + "/" + clave)
                .then( (response)=> {
                    self.filas = response.data;
                });


        },
        editar(clave) {
            window.location.href = window.location.href + "/" + clave + "/edit";
            console("URL " + window.location);
        }

    }


}
</script>
<style scoped>

</style>
