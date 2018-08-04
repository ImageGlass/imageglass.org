<template>
	<header id="header">
		<div class="container header-bar">
			<div class="menu-group">
				<div class="menu-item menu-logo">
					<router-link to="/" title="ImageGlass - A lightweight, versatile image viewer">
						<span>
							ImageGlass
						</span>
					</router-link>
				</div>
			</div>
			<div class="menu-group menu-right">
				<div class="menu-group">
					<div class="menu-item d-flex">
						<label for="chkMobileMenu" class="chk-dropdown-toggler mobile-menu-toggler">
							<div class="bar1"></div>
							<div class="bar2"></div>
							<div class="bar3"></div>
						</label>
					</div>
				</div>


				<nav class="menu-group main-menu">
					<li class="menu-item">
						<router-link to="/news" class="eff-reveal">
							<span>
								NEWS
							</span>
						</router-link>
					</li>
					<li class="menu-item submenu">
						<router-link to="/download" class="eff-reveal">
							<span>
								DOWNLOAD
							</span>
						</router-link>
						<ul class="submenu-group">
							<li class="menu-item">
								<router-link to="/moon" class="eff-reveal">
									<span>
										ImageGlass Moon
									</span>
								</router-link>
							</li>
							<li class="menu-item">
								<router-link to="/download/themes" class="eff-reveal">
									<span>
										Themes
									</span>
								</router-link>
							</li>
							<li class="menu-item">
								<router-link to="/download/languagepacks" class="eff-reveal">
									<span>
										Language Packs
									</span>
								</router-link>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<router-link to="/documentation" class="eff-reveal">
							<span>
								DOCS
							</span>
						</router-link>
					</li>
					<li class="menu-item">
						<router-link to="/support" class="eff-reveal">
							<span>
								SUPPORT
							</span>
						</router-link>
					</li>
					<li class="menu-item">
						<router-link to="/source" class="eff-reveal">
							<span>
								SOURCE
							</span>
						</router-link>
					</li>
					<li class="menu-item">
						<router-link to="/about" class="eff-reveal">
							<span>
								ABOUT
							</span>
						</router-link>
					</li>
				</nav>

			</div>
		</div>
	</header>
</template>


<script>
import { FluentRevealEffect } from "fluent-reveal-effect";
import { getCSSVar } from "../helpers/css-variable"

function applyRevealEffect() {
	FluentRevealEffect.applyEffect("#header .eff-reveal", {
		clickEffect: true,
		lightColor: "rgba(255,255,255, 0.15)",
		gradientSize: 100
	});
}

export default {
	name: "HeaderModule",
	mounted: function() {
		applyRevealEffect();
	}
};
</script>


<style lang="scss" scoped>
</style>
