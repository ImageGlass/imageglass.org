<template>
	<section class="home-source">
		<div class="home-source-content">
            <div class="container">
                <h2 class="fs-h2 text-center">
                    Free - Open Source Image Viewer
                </h2>
                <div class="text-center mt-4 fs-h4 fw-light">
                    ImageGlass is totally free for any purpose use.<br/>
                    Its source code was released under the terms of the <a class="link fw-normal" href="https://github.com/d2phap/ImageGlass/blob/master/LICENSE" target="_blank" rel="noopener">GNU General Public License v3.0</a>

                    <div class="mt-4">
                        <span class="eff-reveal-border btn btn-primary">
                            <a href="https://github.com/d2phap/ImageGlass" class="eff-reveal" target="_blank" rel="noopener">
                                <i class="icon-github mr-2"></i>
                                Check Out
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
	</section>
</template>


<script>
import { FluentRevealEffect } from "fluent-reveal-effect";

function applyRevealEffect() {
	FluentRevealEffect.applyEffect(".home-source", {
		clickEffect: true,
		lightColor: "rgba(255,255,255, 0.9)",
		gradientSize: 120,
		isContainer: true,
		children: {
			borderSelector: ".eff-reveal-border",
			elementSelector: ".eff-reveal__",
			lightColor: "rgba(255,255,255, 0.7)",
			gradientSize: 200
		}
	});
}

export default {
    name: "HomeSourceModule",
    mounted: function() {
		applyRevealEffect();
	}
};
</script>


<style lang="scss" scoped>

</style>
