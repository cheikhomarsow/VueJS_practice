<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>

import addBlog from './components/addBlog.vue'
import showBlogs from './components/showBlogs.vue'
import listBlogs from './components/listBlogs.vue'


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
    'show-blogs': showBlogs,
    'list-blogs': listBlogs
  }
}
</script>

<style>
body{
  margin: 0;
}
</style>
