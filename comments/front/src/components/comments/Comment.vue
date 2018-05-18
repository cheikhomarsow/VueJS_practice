<template>
  <div class="comment">
  <div class="avatar"><img src="#" alt=""></div>
  <div class="content">
    <div class="author">{{ comment.username }}</div>
    <div class="metadata">
      <span class="date">{{ comment.created_at }}</span>
    </div>
    <div class="text">
      {{ comment.content }}
    </div>
    <div class="actions">
      <a href="#">Répondre</a>
    </div>
  </div>
  </div>
</template>

<script type="text/babel">
export default {
  props: {
    ip: String,
    comment: Object
  }
}
</script>
