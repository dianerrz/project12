<!DOCTYPE html>
<html>
<head>
    <title>trynote</title>
    <script type="text/javascript" src="https://unpkg.com/vue"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div id="app">


        <form class="form-inline">
          <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="" v-model="post.titlev">
          </div>
          <div class="form-group">
            <label for="text">Email</label>
            <input type="text" class="form-control" id="text" placeholder="" v-model="post.textv">
          </div>
          <button @click="addPost()" class="btn btn-default">Add Post</button>
        </form>
        <button class="btn btn-default" @click="addPost()">Submit</button>

<div class="list-group">
  <a href="#" class="list-group-item active" v-for="post in posts">
    <h4 class="list-group-item-heading">@{{ post.titlev }}</h4>
    <p class="list-group-item-text">@{{ post.textv }}</p>
  </a>
</div>


<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            post: {
                titlev: "",
                textv: "",
            },
            posts: []
        },
        methods: {
            addPost(){
                let { titlev, textv } = this.post;
                this.posts.push({
                    titlev: titlev,
                    textv: textv
                });
            }
        }
    })
</script>
</body>

</html>