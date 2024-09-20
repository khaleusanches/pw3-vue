<template>
    <form @submit.prevent="calcularTriangulo">
        <input type="number" v-model="lado" placeholder="lado do triangulo">
        <input type="submit">
    </form>
    <div class="triangulo" v-for="(triangulo, index) in triangulos" :key="index">
        <p>ID: {{ index + 1 }}</p>
        <p>Lado do triangulo {{ triangulo.lado }}</p>
        <p>Area do triangulo: {{ triangulo.area }}</p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                lado: '',
                triangulos: []
            }
        },
        methods: {
            calcularTriangulo(){
                let triangulo = {
                    lado: this.lado,
                    area: (this.lado**2 * 1.7 / 4)
                }
                this.triangulos.push(triangulo)
            }
        }
    }

</script>

<style>
    .triangulo{
        width: 50%;
        margin: auto;
        margin-top: 10px;
        border: 2px, solid, black;
    }
</style>