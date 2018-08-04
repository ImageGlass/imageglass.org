<template>
	<section class="bg-box home-top">
        <div class="bg-box-content">
            <div class="container pt-5">

                <h1 class="fs-h1 text-center">
                    A lightweight, versatile image viewer
                </h1>

                <div class="text-center mt-4">
                    <a href="/download" class="btn eff-reveal-border btn-download will-links">
                        <span class="eff-reveal">
                            <span class="will-link">
                                <i class="icon icon-download"></i>
                                DOWNLOAD
                            </span>
                        </span>
                    </a>
                </div>

                <div class="text-center mt-1 download-version">
                    <span>version: </span>
                    <span>5.5.7.26</span>
                </div>

                <section class="row justify-content-center mt-5">
                    <div class="col-hg-7 col-xxl-8 col-xl-9 col-lg-10 col-12">
                        <div class="embed-responsive embed-responsive-16by9 top-video">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/d2ZCAZE0el4?rel=0&amp;controls=0&amp;showinfo=0"></iframe> 
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</template>


<script>
import { FluentRevealEffect } from "fluent-reveal-effect";

function applyRevealEffect() {
	FluentRevealEffect.applyEffect(".home-top > .bg-box-content", {
		clickEffect: true,
		lightColor: "rgba(255,255,255, 0.9)",
		gradientSize: 120,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal",
			lightColor: "rgba(255,255,255, 0.7)",
			gradientSize: 200
		}
	});
}

export default {
    name: "HomeTopModule",
    mounted: function() {
		applyRevealEffect();
	}
};
</script>


<style lang="scss" scoped>
</style>
