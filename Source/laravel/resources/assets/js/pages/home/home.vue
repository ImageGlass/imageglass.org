<template>
	<div class="">
		<HomeTopModule></HomeTopModule>
		<HomeFeaturesModule></HomeFeaturesModule>
		
		<HomeNewsModule></HomeNewsModule>
		<div class="separator"></div>
		<HomeReviewModule></HomeReviewModule>

		<HomeSourceModule></HomeSourceModule>
		<HomeDonateModule></HomeDonateModule>

	</div>
</template>


<script>
import HomeTopModule from "../../modules/home-top";
import HomeFeaturesModule from "../../modules/home-features";
import HomeSourceModule from "../../modules/home-source";
import HomeDonateModule from "../../modules/home-donate";
import HomeNewsModule from "../../modules/home-news";
import HomeReviewModule from "../../modules/home-review";



export default {
	name: "HomePage",
	components: {
		HomeTopModule,
		HomeFeaturesModule,
		HomeSourceModule,
		HomeDonateModule,
		HomeNewsModule,
		HomeReviewModule
	},
	data: function() {
		return {
			
		};
	},
	
	
};
</script>


<style lang="scss" scoped>
</style>
