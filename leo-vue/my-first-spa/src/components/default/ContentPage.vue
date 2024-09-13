<template>
    <section>
        <div>
            <p>Meu conteúdo </p>
            <div>
                <input v-model="nome" placeholder="Digite seu nome">
                <p>Seu nome é: {{ nome }}</p>
                <button @click="submeterFormulario">Verificar nome</button>
                <p v-if="url">{{ url }}</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    nome: 'ContentPge',
    data(){
        return {
            nome: '',
            url: ''
        }
    },
    methods: {
        submeterFormulario(){
            fetch(`https://api.github.com/users/${this.nome}`).then((data) =>{
                this.url = data.url
                console.log(data.url);
            });
        }
    }
}
</script>

<style>
</style>