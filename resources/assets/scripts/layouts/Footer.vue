<template>
  <footer>
  	<dl>
  		<dt>E-mail</dt>
  		<dd><a :href="mailto">{{email}}</a></dd>
  	</dl>
  	<dl>
  		<dt>Telefoon</dt>
  		<dd><a :href="tel">{{phone}}</a></dd>
  	</dl>
  	<dl class="mb-0">
  		<dt>Social</dt>
  		<dd class="mb-0">
  			<ul class="nav nav-social">
  				<li class="nav-item">
  					<a class="nav-link" href="https://www.facebook.com/dennissm1nk" target="_blank">
  						<i class="fa fa-facebook"></i>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="https://www.linkedin.com/in/dennissmink/" target="_blank">
  						<i class="fa fa-linkedin"></i>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="https://twitter.com/dennis_smink" target="_blank">
  						<i class="fa fa-twitter"></i>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link" href="https://github.com/Cannonb4ll" target="_blank">
  						<i class="fa fa-github"></i>
  					</a>
  				</li>
  			</ul>
  		</dd>
  	</dl>
  </footer>
</template>

<script>
export default {
	data(){
		return {
			email: 'info@dennissmink.nl',
			phone: '+31 6 22 30 42 99',
			social : {
				facebook : '',
				twitter: '',
				github: ''
			}
		}
	},
	computed: {
		mailto(){
			return 'mailto:' + this.email;
		},
		tel(){
			return 'tel:' + this.phone.replace(/ /g, '')
		}
	}
}
</script>
