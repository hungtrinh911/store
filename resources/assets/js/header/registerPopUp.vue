<template>
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form @submit.prevent="register">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" v-model="data.name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" v-model="data.email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" v-model="data.password" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" v-model="data.confirmPassword" required="">
						</div>
						 <p v-if="errors.length">
						    <b>Please correct the following error(s):</b>
						    <ul style="list-style: none">
						      <li v-for="error in errors" style="color: red">{{ error }}</li>
						    </ul>
						 </p>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2" v-model="terms">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
  export default {
  	data() {
  		return {
  			data: {},
  			url: 'http://localhost:8000/api/user/register',
  			errors: [],
  			terms: false
  		}
  	},
  	methods: {
  		register() {
  			var errors = this.validate();
  			if (!errors.length) {
  				this.display = true;
  			} else {
	  			this.axios.post(this.url, this.data).then(function (response) {
	  				console.log(response);
	  			}).catch(error => {
				    console.log(error.response)
				});
  			}
  		},
  		validate() {
  			this.errors = [];
  			if (this.data.name.length > 10) {
  				this.errors.push('ten duoi 10 ki tu');
  			}
  			if (this.data.confirmPassword !== this.data.password) {
  				this.errors.push('mat khau khong khop');
  			}
  			if (!this.terms) {
  				this.errors.push('can phai dong y voi dieu khoan');
  			}
  			return errors;
  		}
  	},
  }
 </script>