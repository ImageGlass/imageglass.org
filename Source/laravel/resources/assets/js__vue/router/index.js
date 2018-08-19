import Vue from "vue";
import Router from "vue-router";
import HelloWorld from "../components/HelloWorld";
import HomePage from "../pages/home/home";
import AboutPage from "../pages/about/about";
import Error404Page from "../pages/error/404";

Vue.use(Router);

export default new Router({
	mode: "history",
	routes: [
		{
			path: "/hello",
			name: "HelloWorld",
			component: HelloWorld
		},
		{
			path: "/about/:author",
			name: "About",
			component: AboutPage
		},
		{
			path: "/",
			name: "Home",
			component: HomePage
		},
		// Error 404 page
		{
			path: "*",
			name: "404",
			component: Error404Page
		}
	]
});
