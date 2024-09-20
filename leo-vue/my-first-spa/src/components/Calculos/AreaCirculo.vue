<template>
    <form @submit.prevent="calcularArea">
        <input type="number" placeholder="raio" v-model="raio">
        <input type="submit">
    </form>
    <div class="circulo" v-for="(circulo, index) in circulos" :key="index">
        <p>ID: {{ index+1 }}</p>
        <p>Raio: {{ circulo.raio }}</p>
        <p>Area do circulo: {{ circulo.area }}</p>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                raio: '',
                area: '',
                circulos: []
            }
        },
        methods: {
            calcularArea(){
                let circulo = {
                    raio: this.raio,
                    area: this.raio**2 * 3.14
                }
                this.circulos.push(circulo)
            }
        }
    }
</script>

<style>
    .circulo{
        width: 50%;
        margin: auto;
        margin-top: 10px;
        border: 2px, solid, black;
    }
</style>