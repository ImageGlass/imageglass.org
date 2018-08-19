<template>
    <div class="row justify-content-center home-news-list">
        <div class="col-xl-8 col-xxl-10 col-hg-9">
            <ul class="news-list">
                <li class="news-item new-post">
                    <router-link class="news-item-content" to="/">
                        <h3 class="title">Announcing ImageGlass 5.1</h3>
                        <time datetime="2018/05/20">May 20 2018</time>
                    </router-link>
                </li>
                <li class="news-item">
                    <router-link class="news-item-content" to="/">
                        <h3 class="title">Etiam et ante sed ligula auctor ultricies ac et risus</h3>
                        <time datetime="2018/05/20">May 20 2018</time>
                    </router-link>
                </li>
                <li class="news-item">
                    <router-link class="news-item-content" to="/">
                        <h3 class="title">Proin luctus, lorem eu elementum maximus, ligula erat tristique nisi.</h3>
                        <time datetime="2018/05/20">May 20 2018</time>
                    </router-link>
                </li>
                <li class="news-item">
                    <router-link class="news-item-content" to="/">
                        <h3 class="title">Icies ac et risus</h3>
                        <time datetime="2018/05/20">May 20 2018</time>
                    </router-link>
                </li>
                <li class="news-item">
                    <router-link class="news-item-content" to="/">
                        <h3 class="title">Auctor ultricies ac et risus</h3>
                        <time datetime="2018/05/20">May 20 2018</time>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>


<script>
import { FluentRevealEffect } from "fluent-reveal-effect";

export default {
    name: "NewsListComponent",
    methods: {
        applyRevealEffect: () => {
            FluentRevealEffect.applyEffect(".home-news", {
                clickEffect: true,
                lightColor: "rgba(0,0,0, 0.8)",
                gradientSize: 180,
                isContainer: true,
                children: {
                    borderSelector: ".home-news .eff-reveal-border",
                    elementSelector: ".home-news .eff-reveal",
                    lightColor: "rgba(0,0,0, 0.5)",
                    gradientSize: 200
                }
            });
        }
    },
    updated: function() {
        this.applyRevealEffect();
    },
	mounted: function() {
		this.applyRevealEffect();
	}
};
</script>
