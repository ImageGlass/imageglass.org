<template>
	<section class="home-news">
		<div class="container">
			<h2 class="fs-h2 text-center">
				Latest News
			</h2>

			<div class="text-center mt-4">
				<NewsListComponent></NewsListComponent>

				<!-- <InstagramPhotoListComponent :instagramPosts="instagramPosts"></InstagramPhotoListComponent> -->
			</div>
		</div>
	</section>
</template>


<script>
import NewsListComponent from "../components/news-list";
import InstagramPhotoListComponent from "../components/instagram-photo-list";
import Instagram from "../helpers/instagram";



export default {
	name: "HomeNewsModule",
	components: {
		NewsListComponent,
		InstagramPhotoListComponent
	},
	data: function() {
		return {
			instagramPosts: []
		}
	},
	methods: {
		getInstagramPosts: async () => {
			return await Instagram.getPosts("ImageGlassApp")
		}
	},
	mounted: function() {

		(async () => {
			this.instagramPosts = await this.getInstagramPosts()
			this.instagramPosts = this.instagramPosts.slice(0, 4)
			// this.instagramPosts.pop()

			// console.log(this.instagramPosts)

		})()

		
		
	},
};
</script>


<style lang="scss" scoped>
</style>
