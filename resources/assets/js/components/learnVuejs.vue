<!-- <template>
<div id="app-2" v-if="display">
  <span v-bind:title="title">
	{{message}}
  </span>
  <button v-on:click="reverseMessage">Reverse Message</button>
  <ol>
    <li v-for="todo in todos">
    	{{todo.text}}
    </li>
  </ol>
  <todoItem></todoItem>
  <input v-model="message">	
  <p>{{fullName}}</p>
  <p>{{lastName}}</p>
  <input v-model='fullName'>
  <p>
    Ask a yes/no question:
    <input v-model="question">
  </p>
  <p v-bind:id="1">{{ answer }}</p>
  <img v-bind:src="picture">
</div>
<div v-else>
    <todoItem></todoItem>
     <ul>
    <li
      is="todo-item"
      v-for="(todo, index) in todos"
      v-bind:key="todo.id"
      v-bind:title="todo.title"
      v-on:remove="todos.splice(index, 1)"
    ></li>
  </ul>
</div>
</template>
<div></div>
<script>
import todoList from '../childComponents/todoList.vue';
export default {
  data() {
        return {
          message: 'Hover your mouse over me for a few seconds to see my dynamically bound title!',
          title: 'devailoz',
          todos: [
  		      { text: 'Learn JavaScript' },
  		      { text: 'Learn Vue' },
  		      { text: 'Build something awesome' },
		      ],
          firstName: 'Trinh',
          lastName: 'Hung',
          question: '',
          answer: 'ask me some yes/no question pls',
          picture: '',
          display: false,
        }
    },
  methods: {
	    reverseMessage: function () {
	      this.message = this.message.split('').reverse().join('')
	    },
      getAnswer: function () {
        if (this.question.indexOf('?') === -1) {
          this.answer = 'Questions usually contain a question mark. ;-)'
          return
        }
        this.answer = 'Thinking...';
        var vm = this;
        axios.get('http://127.0.0.1:8000/api/yesno').then(function (response) {
            vm.answer = response.data.answer,
            vm.picture = response.data.image
          }).catch(function (error) {
            vm.answer = 'Error! Could not reach the API. ' + error
          });
    }
	},
  components: {
      'todoItem': todoList,
      'todo-item': {
          template: '\
            <li>\
              <button v-on:click="$emit(\'remove\')">Remove</button>\
            </li>\
          ',
          props: ['text']
      }
  },
  computed: {
    fullName: {
      // getter
      get: function () {
        return this.firstName + ' ' + this.lastName
      },
      // setter
      set: function (newValue) {
        var names = newValue.split(' ')
        this.firstName = names[0]
        this.lastName = names[names.length - 1]
      }
    }
  },
  watch: {
    // whenever question changes, this function will run
    question: function (newQuestion, oldQuestion) {
      this.answer = 'Waiting for you to stop typing...';
      //this.debouncedGetAnswer();
    }
  },
  created: function () {
    //this.debouncedGetAnswer = _.debounce(this.getAnswer, 500);
  }
}
</script> -->