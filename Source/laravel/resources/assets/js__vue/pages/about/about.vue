<template>
    <div class="xxx">
        I'm about page: {{ $route.params.author }}
        <div>
            <router-link to="/">
                Back to home
            </router-link>
        </div>
    </div>
    
</template>


<script>
export default {
    name: "AboutPage",
}
</script>


<style lang="scss" scoped>
.xxx {
	color: #00f;
}
</style>
