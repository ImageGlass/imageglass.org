<template>
    <section class="home-features pt-5 pb-4">
        <div class="container">
            <h2 class="fs-h2 text-center">
                Features
            </h2>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6 fw-light fs-h4 mt-2 mb-4 text-center">
                    A simple-to-use program that comes packed with basic functions and a nice minimal modern user interface.
                </div>
            </div>

            <div class="row justify-content-center text-center mt-4 feature-list">
                <div class="col-md-6 col-lg-4 col-xxl-3 mb-4 feature-item">
                    <div class="eff-reveal-border">
                        <div class="eff-reveal links">
                            <div class="feature-icon">
                                <span class="icon-picture link"></span>
                            </div>

                            <h3 class="feature-title">
                                70+ formats supported
                            </h3>

                            <p class="feature-desc">
                                ImageGlass works great with GIF, SVG, HEIC and RAW formats,
                                <router-link to="/documentation/supported-formats" title="View all supported formats">
                                    among others
                                </router-link>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xxl-3 mb-4 feature-item">
                    <div class="eff-reveal-border">
                        <div class="eff-reveal links">
                            <div class="feature-icon">
                                <span class="icon-lightweight link"></span>
                            </div>

                            <h3 class="feature-title">
                                Lightweight & Versatile
                            </h3>

                            <p class="feature-desc">
                                Fast switch between images
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xxl-3 mb-4 feature-item">
                    <div class="eff-reveal-border">
                        <div class="eff-reveal links">
                            <div class="feature-icon">
                                <span class="icon-theme link"></span>
                            </div>

                            <h3 class="feature-title">
                                Personalization
                            </h3>

                            <p class="feature-desc">
                                Easy installation of new 
                                
                                <router-link to="/download/languagepacks" title="Download language packs">
                                    language packs
                                </router-link>
                                &amp;
                                <router-link to="/download/themes" title="Download themes">
                                    themes
                                </router-link>
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</template>


<script>
import { FluentRevealEffect } from "fluent-reveal-effect";

function applyRevealEffect() {
	FluentRevealEffect.applyEffect(".home-features", {
		clickEffect: false,
		lightColor: "rgba(255,255,255, 0.1)",
		gradientSize: 170,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal",
			lightColor: "rgba(0,0,0, 0.2)",
			gradientSize: 500
		}
	});
}

export default {
    name: "HomeFeaturesModule",
    mounted: function() {
		applyRevealEffect();
	}
};
</script>


<style lang="scss" scoped>
</style>
