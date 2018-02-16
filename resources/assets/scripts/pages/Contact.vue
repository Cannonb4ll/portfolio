<template>
	<div>
		<div class="row">
			<div class="col-lg-6 col-primary">
				<contact-form></contact-form>
				<!--<map-canvas position="56.484392,21.017387" zoom="4" icon="/images/mapmarker.png"></map-canvas>-->
			</div>
			<div class="col-lg-6 flex-first flex-lg-unordered">
				<h1 class="title title--spaced">Contact mij</h1>
				
				<div class="list-group">
					<div class="list-group-item">
						<p class="item-title">E-mail</p>
						<p><a href="mailto:info@dennissmink.nl">info@dennissmink.nl</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Telefoon</p>
						<p><a href="tel:+31622304299">+31 6 22 30 42 99</a></p>

						<p class="item-title">KvK</p>
						<p>57213429</p>

						<p class="item-title">BTW</p>
						<p>NL200257444B01</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</template>
<script>
import MapCanvas from '../components/MapCanvas.vue';
import ContactForm from '../components/ContactForm.vue';
import Typed from 'typed.js'
export default {
	components : {
		MapCanvas,
		ContactForm
	}
}
</script>
