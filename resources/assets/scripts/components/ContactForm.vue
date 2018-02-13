<template>
	<div>
		<div v-if="!form.show" class="alert alert-success">
			<p><strong>Bedankt, {{form.name}}!</strong></p>
			<p>Ik zal binnen 24 uur reageren op je bericht..</p>
		</div>
		<form action="post" class="form--contacts" @submit.prevent="sendForm" v-if="form.show">
			<legend>{{form.legend}}<span class="typed"></span></legend>
			<fieldset>
				<div class="form-group" :class="{'invalid' : errors.has('name')}">
					<input type="text" id="your-name" class="form-control" name="name" v-model="form.name" :class="{'non-empty' : form.name.length}" autocomplete="off" v-validate="'required'" @change="changeLegend">
					<label for="your-name">Uw naam</label>
					<div class="form-control__helper"></div>
					<transition name="slideUp">
						<div v-if="errors.has('name')" class="form-message error">{{ errors.first('name') }}</div>
					</transition>
				</div>
				<div class="form-group" :class="{'invalid' : errors.has('email')}">
					<input type="email" id="your-email" class="form-control" name="email" v-model="form.email" :class="{'non-empty' : form.email.length}" autocomplete="off" v-validate="'required|email'">
					<label for="your-email">Uw e-mail adres</label>
					<div class="form-control__helper"></div>
					<transition name="slideUp">
						<div v-if="errors.has('email')" class="form-message error">{{ errors.first('email') }}</div>
					</transition>
				</div>
				<div class="form-group" :class="{'invalid' : errors.has('message')}">
					<textarea id="your-message" rows="6" class="form-control" name="message" v-model="form.message" :class="{'non-empty' : form.message.length}" autocomplete="off" v-validate="'required'"></textarea>
					<label for="your-message">Bericht</label>
					<div class="form-control__helper"></div>
					<transition name="slideUp">
						<div v-if="errors.has('message')" class="form-message error">{{ errors.first('message') }}</div>
					</transition>
				</div>

				<button type="submit" :disabled="loading" class="btn btn-primary btn-rounded btn-full">
					<span v-if="loading">
						Versturen..
					</span>
					<span v-else>
						Verstuur
					</span>
				</button>
			</fieldset>
		</form>
	</div>
</template>

<script>
	import Typed from 'typed.js'
	export default {
	name: 'form-contact',
	data(){
		return {
			form : {
				name : '',
				email : '',
				message : '',
				legend : 'Verstuur bericht',
				show: true,
			},
			loading: false,
			typed : null
		}
	},
	methods : {
		changeLegend(){
			if(this.form.name != ''){
				this.form.legend = '';
				var legend = 'Hallo, ' + this.form.name + '!';
				
				if(this.typed){
					this.typed.destroy();
				}
				
				this.typed = new Typed('.typed', {
					strings: [legend],
					typeSpeed: 40,
				});
			}
			else{
				this.form.legend = 'Verstuur een bericht';
				if(this.typed){
					this.typed.destroy();
				}
			}
		},
		sendForm(){
		    this.loading = true;
			var self = this;
			this.$validator.validateAll().then(() => {
				axios.post('/api/contact', {
					name: self.form.name,
					email: self.form.email,
					message : self.form.message
				})
				.then(function (response) {
					if(response.data.success){
						self.form.show = false;
						self.loading = false;
					}
					else{
						var errors = response.data.errors;
						_.forEach(errors, function(message, field){
							self.errors.add(field, message);
						});
					}
					
				})
				.catch(function (error) {
					console.log(error);
				});
			}).catch(() => {
	          // eslint-disable-next-line
	          console.log('errors here')
	      });
		}
	}
}
</script>
