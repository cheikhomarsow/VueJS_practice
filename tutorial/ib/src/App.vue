<template>
  <div>
    <show-blogs></show-blogs>
  </div>
</template>

<script>

import addBlog from './components/addBlog.vue'
import showBlogs from './components/showBlogs.vue'

export default {
  name: 'app',
  data(){
    return{

    }
  },
  methods:{

  },
  components: {
    'add-blog': addBlog,
    'show-blogs': showBlogs
  }
}
</script>

<style>
body{
  margin: 0;
}
</style>
