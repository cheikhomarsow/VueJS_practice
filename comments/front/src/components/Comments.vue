<template>
  <div class="ui comments">
    <div for="comment in comments">
        
    </div>
  </div>
</template>

<script type="text/babel">
import axios from 'axios'
import Comment from './comments/Comment.vue'
import CommentForm from './comments/Form.vue'

export default {
  data () {
    return {
      comments: []
    }
  },
  components: { Comment, CommentForm },
  props: {
    id: Number,
    model: String,
    csrf: String,
    ip: String
  },
  ready: function () {
    axios.get('/comments', {params: {id: this.id, type: this.model}}).then((response) => {
      this.comments = response.data
    })
  }
}
</script>
