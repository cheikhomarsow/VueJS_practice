Vue.component('greeting', {
  template: '<p>Hey there, I am {{ name }} . <button v-on:click="changeName">Change name</button></p>',
  data:function(){
    return{
      name: 'SOW'
    }
  },
  methods: {
    changeName: function(){
      this.name = 'Mario'
    }
  }
});

new Vue({
    el:'#vue-app',
    data: {
      output: 'Your fav food'
    },
    methods: {
      readRefs: function(){
        console.log(this.$refs.input.value);
        this.output = this.$refs.input.value;
      }
    }
});

new Vue({
  el:'#vue-app-one',

});

new Vue({
  el:'#vue-app-two',

});
