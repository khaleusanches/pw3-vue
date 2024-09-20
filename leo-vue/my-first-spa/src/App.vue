<template>
  <div class="container">
      <div>
        <TrianguloEquilatero></TrianguloEquilatero>
      </div>
      <div>
        <AreaCirculo></AreaCirculo>
      </div>
      <div>
        <AreaTrapezio></AreaTrapezio>
      </div>
  </div>
</template>

<script>
import AreaCirculo from './components/Calculos/AreaCirculo.vue';
import AreaTrapezio from './components/Calculos/AreaTrapezio.vue';
import TrianguloEquilatero from './components/Calculos/TrianguloEquilatero.vue';

export default {
  name: 'App',
  components: {
    TrianguloEquilatero,
    AreaCirculo,
    AreaTrapezio
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.container{
  display: flex;
  justify-content: space-around;
}
</style>
