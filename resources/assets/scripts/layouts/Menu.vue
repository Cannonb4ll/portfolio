<template>
	<transition name="fadeScale">
		<nav class="menu" v-if="active">
			<ul class="nav">
				<li class="nav-item">
					<router-link class="nav-link" to="/">Over mij</router-link>
				</li>
				<li class="nav-item">
					<router-link class="nav-link" to="/resume">CV</router-link>
				</li>
				<li class="nav-item">
					<router-link class="nav-link" to="/portfolio">Portfolio</router-link>
				</li>
				<!-- <li class="nav-item">
					<router-link class="nav-link" to="/blog">Blog</router-link>
				</li> -->
				<li class="nav-item">
					<router-link class="nav-link" to="/contact">Contact</router-link>
				</li>
			</ul>
		</nav>
	</transition>
</template>

<script>
// import RouterLink from 'vue-router'
export default {
	components: {
        // RouterLink,
    },
    data(){
    	return {
    		active: false
    	}
    },
    mounted(){
    	var self = this;
    	bus.$on('menu:toggle', function(active){
    		self.active = active;
    	});
    }
}
</script>
