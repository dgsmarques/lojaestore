<template>
    <div class="card text-white mb-3 card-height-cat" :class="cor" style="max-width: 18rem;">
        <div class="card-body">
            <a :href="link" class="text-white">
                <h1 class="card-title">{{ nome }}</h1>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['cor', 'nome', 'link'],
    }
</script>

<style>
.card-height-cat{
    min-height: 150px;
}
</style>
