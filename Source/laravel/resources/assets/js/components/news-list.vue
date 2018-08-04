<template>
    <div class="row justify-content-center xxx">
        <div class="col-xxl-10 col-hg-9">
            <ul class="news-list row justify-content-center">
                <li class="news-box new-post col-6 col-md-3 col-lg-3 col-xl-3">
                    <router-link class="news-box-content" to="/">
                        <div class="img-wrapper">
                            <img src="https://scontent-ort2-1.cdninstagram.com/vp/5754e82644a1d00478dc20ff20c942e0/5BA672D7/t51.2885-15/s320x320/e35/33854636_155685638621689_3585694317974388736_n.jpg" alt="xxxxxxxxx" />
                        </div>
                        <div class="cover eff-reveal-border">
                            <div class="eff-reveal p-2 p-lg-3">
                                <div class="img-label">
                                    <h3 class="title">Announcing ImageGlass 5.1</h3>
                                    <time datetime="2018/05/20">May 20 2018</time>
                                </div>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li class="news-box col-6 col-md-3 col-lg-3 col-xl-3">
                    <router-link class="news-box-content" to="/">
                        <div class="img-wrapper">
                            <img src="https://scontent-ort2-1.cdninstagram.com/vp/5754e82644a1d00478dc20ff20c942e0/5BA672D7/t51.2885-15/s320x320/e35/33854636_155685638621689_3585694317974388736_n.jpg" alt="xxxxxxxxx" />
                        </div>
                        <div class="cover eff-reveal-border">
                            <div class="eff-reveal p-2 p-lg-3">
                                <div class="img-label">
                                    <h3 class="title">News with the ImageGlass 5.0</h3>
                                    <time datetime="2018/05/20">May 06 2018</time>
                                </div>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li class="news-box col-6 col-md-3 col-lg-3 col-xl-3">
                    <router-link class="news-box-content" to="/">
                        <div class="img-wrapper">
                            <img src="https://scontent-ort2-1.cdninstagram.com/vp/5754e82644a1d00478dc20ff20c942e0/5BA672D7/t51.2885-15/s320x320/e35/33854636_155685638621689_3585694317974388736_n.jpg" alt="xxxxxxxxx" />
                        </div>
                        <div class="cover eff-reveal-border">
                            <div class="eff-reveal p-2 p-lg-3">
                                <div class="img-label">
                                    <h3 class="title">How to set ImageGlass as default photo viewer</h3>
                                    <time datetime="2018/05/20">Dec 02 2017</time>
                                </div>
                            </div>
                        </div>
                    </router-link>
                </li>
                <li class="news-box col-6 col-md-3 col-lg-3 col-xl-3">
                    <router-link class="news-box-content" to="/">
                        <div class="img-wrapper">
                            <img src="https://scontent-ort2-1.cdninstagram.com/vp/5754e82644a1d00478dc20ff20c942e0/5BA672D7/t51.2885-15/s320x320/e35/33854636_155685638621689_3585694317974388736_n.jpg" alt="xxxxxxxxx" />
                        </div>
                        <div class="cover eff-reveal-border">
                            <div class="eff-reveal p-2 p-lg-3">
                                <div class="img-label">
                                    <h3 class="title">ImageGlass 4.5 is released</h3>
                                    <time datetime="2018/05/20">Nov 27 2017</time>
                                </div>
                            </div>
                        </div>
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
                    lightColor: "rgba(255,255,255, 1)",
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
