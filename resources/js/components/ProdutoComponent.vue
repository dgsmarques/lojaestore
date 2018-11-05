<template>
    <div class="card-deck mb-4">
        <div class="card mb-4 shadow-sm card-height">
            <div class="card-body">
                <img class="card-img-top imagem-card border" :src="imagem" :alt="nome">
                <h5 class="title">{{ nome }}</h5>
                
                <div class="row">
                    <div class="col-6">
                        <span class="preco text-success">
                            {{ preco }}
                        </span>
                    </div>    
                    <div class="col-6 text-right">
                        <a :href="link">Ver Mais</a>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
</template>

<script>
    export default {
        props: ['nome', 'preco', 'imagem', 'link']
    }
</script>

<style>
.imagem-card{
    height: 222px;
}

.card-height{
    min-height: 400px;
}

.title{
    padding: 10px;
}
.preco{
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
}
</style>
