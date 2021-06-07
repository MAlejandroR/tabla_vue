<template>
    <div class=" flex flex-row justify-center">
        <table class="m-3 overflow-scroll">
            <caption class="text-4xl text-green-700">{{ nombre_tabla }}</caption>
            <thead>
            <tr class=" text-3xl">
                <th class= "mx-4" v-for="campo in campos">
                    <button @click="ordena(campo)"> {{ campo }}</button>
                </th>
                <th>Borrar</th>
                <th>Editar</th>
            </tr>
            </thead>
            <tr  v-for="fila in filas">

                   <td  class= "cursor-pointer bg-green-100 border-top-1 px-6"  v-for="valor in fila">
                          {{ valor }}
                    </td>
                <th @click="borrar(fila.id)" class="hover:text-blue-700  cursor-pointer" >Borrar</th>
                <th @click='mostrar_fila(fila.id)' class="hover:text-blue-700  cursor-pointer">Editar</th>

            </tr>
        </table>
    </div>

</template>

<script>
import axios from 'axios';

export default {

    name: "tabla",

    props: ['campos_serializados', 'filas_serializadas', 'nombre_tabla'],
    data() {
        return {
            campos: [],
            filas: [],
        }

    },
    mounted() {
        this.campos = JSON.parse(this.campos_serializados);
        this.filas = JSON.parse(this.filas_serializadas);
    },
    methods: {
        ordena(campo) {
            this.filas = this.filas.sort(function (a, b) {
                if (a[campo] > b[campo])
                    return 1;
                else
                    return -1
            });
        },
        mostrar_fila(id){
            var url = window.location.href;
            window.location.href = url+"/"+id;



             // console.log("Selecconado "+fila.id+" en tabla"+this.nombre_tabla);
            // window.location.href=("http://localhost:8000/"+this.nombre_tabla+"/"+fila.id);
            // axios.get("http://localhost:8000/"+this.nombre_tabla+"/"+fila.id);
        },
        borrar(id){
            console.log("Estamos borranod "+id);
            var url = window.location.href;
            axios.delete(url+"/"+id);

             // console.log("Selecconado "+fila.id+" en tabla"+this.nombre_tabla);
            // window.location.href=("http://localhost:8000/"+this.nombre_tabla+"/"+fila.id);
            // axios.get("http://localhost:8000/"+this.nombre_tabla+"/"+fila.id);
        }
    }
}
</script>

<style scoped>

</style>
