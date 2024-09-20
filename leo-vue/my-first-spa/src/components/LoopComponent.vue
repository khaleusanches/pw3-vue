<template>
    <div>
        <form @submit.prevent="addItem">
            <input type="text" v-model="inputValue">
            <button @click="addItem">Adicionar</button>
        </form>
        <p v-for="(item, index) in itens" :key="index">
            <b>Index:</b> {{ index }} <br>
            <b>Item:</b> {{ item }}
        </p>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                itens: [],
                inputValue: ''
            }
        },
        props: {

        },
        methods: {
            addItem(){
                if(this.inputValue){
                    this.itens.push(this.inputValue),
                    this.inputValue = ''
                }
            }
        }
    }
</script>

<style>

</style>