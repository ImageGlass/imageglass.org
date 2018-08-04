<template>
    <div class="row justify-content-center">
        <div class="col-xxl-10 col-hg-9">
            <ul class="grid-img-list row justify-content-center">
                <li class="img-box col-6 col-md-3 col-lg-3 col-xl-3" v-for="item in instagramPosts" :key="item.code">
                    <a class="img-box-content" :href="item.url" target="_blank" rel="noopener noreferrer">
                        <div class="img-wrapper">
                            <img :src="item.thumbnails[320]" :alt="item.caption" />
                        </div>
                        <div class="cover">
                            <div class="reveal-eff p-2 p-lg-3">
                                <div class="img-label">
                                    {{ item.caption }}
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { FluentRevealEffect } from "fluent-reveal-effect";


export default {
	name: "InstagramPhotoListComponent",
	props: {
		instagramPosts: {
			type: Array,
			default: () => []
		}
	},
	data: function() {
		return {};
    },
    methods: {
        applyRevealEffect: () => {
            FluentRevealEffect.applyEffect(".grid-img-list .img-box .reveal-eff", {
                clickEffect: true,
                lightColor: "rgba(255,255,255, 0.4)",
                gradientSize: 300
            });
        }
    },
    updated: function() {
        this.applyRevealEffect();
    },
	mounted: function() {
        
	}
};
</script>
