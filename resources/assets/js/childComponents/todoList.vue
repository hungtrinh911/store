<template>
	<ul>
	    <li v-for="item in groceryList" v-bind:title="item.text" v-bind:id ="item.id">
	    	{{item.text}}
	    </li>
	</ul>
</template>

<script>
	export default {
		props: ['todo'],
		template: 'todo.text',
		data() {
			return {
				groceryList: [
			      { id: 0, text: 'Vegetables' },
			      { id: 1, text: 'Cheese' },
			      { id: 2, text: 'Whatever else humans are supposed to eat' }
			    ],
			    hello: 'hello'
			} 
		},
		computed: {
		    // a computed getter
		  notNow: function () {
		    return Date.now();
		  }
		},
		methods: {
		  now: function () {
		    return Date.now();
		  }
		}
	}
</script>