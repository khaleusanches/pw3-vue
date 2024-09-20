<template>
    <form @submit.prevent="calcularArea">
        <input type="text" v-model="base_maior" placeholder="Base maior">
        <input type="text" v-model="base_menor" placeholder="Base menor">
        <input type="text" v-model="altura" placeholder="Altura">
        <input type="submit">
    </form>
    <div class="trapezio" v-for="(trapezio, index) in trapezios" :key="index">
        <p>ID: {{ index + 1 }}</p>
        <p>Base maior: {{ trapezio.base_maior }}</p>
        <p>Base menor: {{ trapezio.base_menor }}</p>
        <p>Altura: {{ trapezio.altura }}</p>
        <p>Area: {{ trapezio.area }}</p>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                altura: '',
                base_menor: '',
                base_maior: '',
                area: '',
                trapezios: []
            }
        },
        methods: {
            calcularArea(){
                let trapezio = {
                    base_maior: this.base_maior,
                    base_menor: this.base_menor,
                    altura: this.altura,
                    area: (this.base_maior + this.base_menor) * this.altura / 2
                }
                this.trapezios.push(trapezio)
            }
        }
    }
</script>

<style>
    .trapezio{
        width: 50%;
        margin: auto;
        margin-top: 10px;
        border: 2px, solid, black;
    }
</style>