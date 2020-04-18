<template>
    <div>
        <h3> you have been remove {{number}} gif</h3>
        <input v-on:click.middle="doThis()">
        <input type="checkbox" id="checkbox" v-model="checked">
        <label for="checkbox">{{ checked ? 'nam' : 'nu'}}</label>
        <input type="radio" id="one" value="Nam" v-model="picked">
        <label for="one">Nam</label>
        <br>
        <input type="radio" id="two" value="Nu" v-model="picked">
        <label for="two">Nu</label>
        <br>
        <span>Picked: {{ picked }}</span>

        <input v-model.trim="msg">
        <todoItem  v-on:enlarge-text="number += $event"></todoItem>
        <Warning>you click this {{number}}</Warning>
<!--         <ol class="row">
            <li v-for="(item, index) in gif" class="col-4"">
                <img v-bind:src="item.images.downsized_large.url" v-bind:atl="item.title"> 
                <button v-on:click="removeElement(index)">Remove</button>
            </li>
        </ol> -->
    </div>
</template>
<script>
  export default {
    data() {
        return {
            users: [
                {
                    name: 'Mr Been',
                    description: 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
                    avatar: 'http://60nam.dhhp.edu.vn/wp-content/uploads/2019/03/user.png'
                },
                {
                    name: 'Nick',
                    description: 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters',
                    avatar: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPxjRIYT8pG0zgzKTilbko-MOv8pSnmO63M9FkOvfHoR9FvInm'
                },
     
                {
                    name: 'Holly',
                    description: 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
                    avatar: 'https://cdn4.iconfinder.com/data/icons/avatars-circle-2/72/108-512.png'
                }
            ],
            gif: null,
            url: 'http://localhost:8000/api/getGifApi',
            number: 0,
            checked: true,
            picked: 1,
            msg: 'hahahaha   ',
        }
    },
    methods: {
       getGif: function () {
            var vm = this;
            axios.get(this.url).then(function (response) { console.log(response.data.data);
                vm.gif = response.data.data;
            });
       },
       removeElement: function(index) {
            if (this.gif !== null) {
                this.gif.splice(index, 1);
            }
            this.number++;
       },
       doThis: function() {
            alert(123);
       }
    },
    created: function () {
        this.getGif()
    },
    components: {
      'todoItem': {
        template: `
        <button v-on:click="$emit('enlarge-text', 1)">
            Counting
        </button>
        `
      },
      'Warning': {
        template: `<div class="demo-alert-box">
        <strong>Error!</strong>
        <slot></slot>
        </div>
        `
      }
    }
  }
</script>
