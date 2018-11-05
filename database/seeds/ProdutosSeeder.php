<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'id'        => 1,
            'nome'      => 'Colcha Matelasse-Royal Comfort-Solteiro-02 Pçs-Branco',
            'descricao' => 'A Colcha Matelasse-Royal Comfort é produzido com tecido 100% algodão e percal fio 233 fios, proporcionando total maciez e durabilidade ao produto.',
            'preco'     => '282.99',
            'key'       => 'colcha-matelasseroyal-comfortsolteiro02-pcsbranco',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Plumasul-Colcha-Matelasse-Royal-Comfort-Solteiro-02-PC3A7s-Branco-3292-39565-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 2,
            'nome'      => 'Colcha de Piquet Casal 220x240 Bege Beca Decor',
            'descricao' => 'Como a principal atração do quarto, é imprescindível que a cama esteja sempre bem arruma. Confeccionada em algodão e poliéster, a colcha Piquet casal, além de dar cara nova ao seu cantinho de aconchego, vai deixa-lo ainda mais aconchegante. O diferencial deste acessório é a textura em tela Piquet, que proporciona volume à peça e resulta num acabamento mais encorpado e charmoso. Com a colcha Piquet casal na cor bege, o seu quarto será o centro das atenções!',
            'preco'     => '229.99',
            'key'       => 'colcha-de-piquet-casal-220x240-bege-beca-decor',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Beca-Decor-Colcha-de-Piquet-Casal-220x240-Bege-Beca-Decor-9949-726231-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 3,
            'nome'      => 'Cobre Leito Dual Color Preto E Branco Queen 03 Peças',
            'descricao' => 'A linha 100% poliéster Dourados Enxovais tem um toque suave e macio. O tecido caracteriza-se por ser muito leve, confortável, sedoso, com secagem rápida e ótimo caimento. Vem trazendo estilo para a decoração de seu quarto, ficará de ótimo bom gosto e elegância. Confira!',
            'preco'     => '109.99',
            'key'       => 'cobre-leito-dual-color-preto-e-branco-queen-03-pecas',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Dourados-Enxovais-Cobre-Leito-Dual-Color-Preto-E-Branco-Queen-03-PeC3A7as-5091-167335-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 4,
            'nome'      => 'Painel Decorativo Anubis Retangular Freijo 175 cm',
            'descricao' => 'Que tal colocar o Painel Decorativo Anubis em sua casa? Lindo, né?! Você pode colocá-lo em sua sala de jantar, sala de estar ou até mesmo em seu quarto. Dependendo do cômodo, ele serve para dar a sensação de amplitude e é perfeito para dar aquela olhada na maquiagem antes de sair. Perfeito, não é? Leva!',
            'preco'     => '899.99',
            'key'       => 'painel-decorativo-anubis-retangular-freijo-175-cm',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Dalla-Costa-Painel-Decorativo-Anubis-Retangular-Freijo-175-cm-1973-083905-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 5,
            'nome'      => 'Painel Criative 136x68 cm Preto Textura',
            'descricao' => 'Complete a decoração da sua casa com o Painel Criative. Lindo, né?! Você pode colocá-lo em sua sala de jantar, sala de estar ou até mesmo em seu quarto. Dependendo do cômodo, ele serve para dar a sensação de amplitude, e é perfeito para aquela olhada no look antes de sair. Super prático, não é mesmo?',
            'preco'     => '399.99',
            'key'       => 'painel-criative-136x68-cm-preto-textura',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Quality-Painel-Criative-136x68-cm-Preto-Textura-2299-954904-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 6,
            'nome'      => 'Quadro Floral Marrom 55x100cm',
            'descricao' => 'Floreie a sua casa! O Quadro Floral vai ajudar na decoração da sua sala de estar, quarto ou até escritório, deixando tudo mais colorido e com mais vida. Leva!',
            'preco'     => '189.99',
            'key'       => 'quadro-floral-marrom-55x100cm',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Uniart-Quadro-Floral-Marrom-55x100cm-0158-421964-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 7,
            'nome'      => 'Ferro A Seco Preto Black&Decker',
            'descricao' => 'Se você gosta de utensílios domésticos práticos, que tal adquirir o Ferro A Seco? Ele possui seletor para escolha do tipo de tecido, poupa botões em toda a lateral do ferro, conta com controle de temperatura frontal e cabo anatômico com giro de 360°. Bom demais, né? Com ele as suas roupas ficarão impecáveis! ;)',
            'preco'     => '79.99',
            'key'       => 'ferro-a-seco-preto-black-decker',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Black26Decker-Ferro-A-Seco-Preto-Black26Decker-8609-090731-1-zoom.jpg',
        ]);

        DB::table('produtos')->insert([
            'id'        => 8,
            'nome'      => 'Lavadora Wap de Alta Pressão Ágil 1800 com Trava de Segurança 1300 PSI - Amarela/Preta - 220V',
            'descricao' => 'Lavadora Wap de Alta Pressão Ágil 1800 com Trava de Segurança 1300 PSI - Amarela/Preta
            Com a Lavadora WAP Ágil 1800 – Amarela/Preta, você terá muita mobilidade, pois ela vem com alça, que facilita seu transporte, ganhando muito mais tempo na hora de alcançar todos os lugares da casa, visto que, Ágil 1800, vem com mangueira de alta pressão com até 3 metros.
            A WAP Ágil 1800, possui uma potência de 1400W e pressão máxima de 1300PSI, além de bomba axial com cabeçote de nylon e pistões em aço inox, que são mais resistentes e duráveis.',
            'preco'     => '499.99',
            'key'       => 'lavadora-wap-de-alta-pressao-agil-1800-com-trava-de-seguranca-1300-psi-amarela-preta-220v',
            'imagem'    => 'https://staticmobly.akamaized.net/p/Wap-Lavadora-Wap-de-Alta-PressC3A3o-C381gil-1800-com-Trava-de-SeguranC3A7a-1300-PSI---Amarela2FPreta---220V-4732-018735-1-zoom.jpg',
        ]);
        
    }
}
