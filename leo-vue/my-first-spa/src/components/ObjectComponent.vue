<template>
    <form @submit.prevent="addPerson">
        <input type="text" v-model="name" placeholder="Name:">
        <input type="text" v-model="age" placeholder="Age:">
        <input type="text" v-model="document" placeholder="Documento:">

        <input type="submit">
    </form>
    <div class="pessoa" v-for="(person, index) in personList" :key="index">
            <p>ID: {{ index + 1 }}</p>
            <p>Name: {{ person.name }} <br></p>
            <p>Age: {{ person.age }} <br></p>
            <p>Document: {{ person.document }}</p>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                personList: [],
                name: '',
                age: '',
                document: ''
            }
        },
         methods: {
            addPerson(){
                let person = {
                    name: this.name,
                    age: this.age,
                    document: this.document
                }
                this.personList.push(person)
            }
         }
    }
</script>

<style>
.pessoa{
    border: 2px, solid, red;
    margin: auto;
    margin-top: 10px;
    width: 50%;
}
</style>
