new Vue({
  el:'#vue-app',
  data: {
    name:'',
    website:'http://africanagora.com',
    websiteTag:'<a href="http://africanagora.com">African agora</a>',
    age: 24,
    x: 0,
    y: 0,
    a: 0,
    b: 0,
    available: false,
    nearby: false,
    error: false,
    success: false,
    characters: ['Cheikh', 'Omar', 'SOW'],
    ninjas: [
      { name: 'do', age: 11 },
      { name: 're', age: 22 },
      { name: 'fa', age: 33 }
    ]
  },
  methods: {
    greet: function(time){
      return 'Good ' + time + ' ' + this.name;
    },

    add: function(inc){
      this.age += inc;
    },
    subtract: function(dec){
      this.age -= dec;
    },
    updateXY: function(event){
      this.x = event.offsetX;
      this.y = event.offsetY;
    },
    click: function(){
      alert('You clicked me');
    },
    logName: function(){
      console.log('You entered your name');
    },
    logAge: function(){
      console.log('You entered your age');
    },
    /*addToA: function(){
      return this.a + this.age;
    },
    addToB: function(){
      return this.b + this.age;
    }*/

  },
  computed: {
    addToA: function(){
      return this.a + this.age;
    },
    addToB: function(){
      return this.b + this.age;
    },
    compClasses: function(){
      return {
        available: this.available,
        nearby: this.nearby
      }
    }
  }


});
