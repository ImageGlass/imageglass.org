<template>
	<div id="app">
		<input type="checkbox" id="chkMobileMenu" class="chk-dropdown">
		<label for="chkMobileMenu" class="chk-dropdown-closer"></label>
		
		<HeaderModule></HeaderModule>
		<div id="body">
			<router-view/>
		</div>
		<FooterModule></FooterModule>
	</div>
</template>

<script>
import HeaderModule from "./modules/header"
import FooterModule from "./modules/footer"


export default {
	name: "MyApp",
	components: {
		HeaderModule, FooterModule
	}
};
</script>

