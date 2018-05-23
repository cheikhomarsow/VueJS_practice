<template>
  <div v-theme:column="'wide'" id="show-blogs">
    <h1>All Blog Articles</h1>
    <input type="text" v-model="search" placeholder="search blogs" />
    <div v-for="blog in filterBlogs" class="single-blog">
      <h2 v-rainbow>{{ blog.title | to-uppercase }}</h2>
      <article>{{ blog.body | snippet }}</article>
    </div>
  </div>
</template>

<script>

export default {
  name: 'showBlogs',
  data(){
    return{
      blogs: [],
      search:''
    }
  },
  methods:{

  },
  created(){
    this.$http.get('https://jsonplaceholder.typicode.com/posts').then(function(data){
      this.blogs = data.body.slice(0,10);
    });
  },
  computed:{
    filterBlogs: function(){
      return this.blogs.filter((blog) => {
        return blog.title.match(this.search);
      });
    }
  }
}
</script>

<style>
#show-blogs{
  max-width: 800px;
  margin: 0 auto;
}
.single-blog{
  padding:20px;
  margin: 20px 0;
  box-sizing: border-box;
  background: #eee;
}
</style>
