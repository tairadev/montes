<!DOCTYPE html>
<?php 
    // Template Name: Landing
    wp_reset_postdata();
    wp_head();
    get_header();
?>
    <div></div>

    <section id="intro-landing">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="<?= get_field('video_de_fundo') ?>" type="video/mp4">
        </video>
        
        <div id="content">
            <div class="container">
                <div class="col-12 col-md-9">
                    <h1><?= get_field('titulo_inicial') ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="contato-botao">
        <div class="container">
            <div class="col-12">
                <a href="<?= get_field('link_do_whatsapp') ?>" target="_blank" class="contato-botao">
                    ENTRE EM CONTATO COM NOSSOS ESPECIALISTAS
                </a>
            </div>
        </div>
    </section>

    <section id="conteudo">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-12 col-md-8 col-lg-7">
                    <h2><?= get_field('titulo_da_secao_2') ?></h2>
                    <p>
                        <?= get_field('texto_da_secao_2') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="itens">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-12 col-md-10">
                    <h2><?= get_field('titulo_da_secao_3') ?></h2>
                </div>
            </div>
            <div class="row" style="justify-content: center;">
            <div></div>
                <?php
                    if(have_rows('itens')) {
                        while( have_rows('itens') ) : the_row();
                ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <img src="<?= get_sub_field('icone') ?>" alt="">
                                <h3><?= get_sub_field('texto') ?></h3>
                            </div>
                <?php    
                        endwhile;
                    }
                ?>
            </div>
        </div>
    </section>

    <section id="call-to-action">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-12 col-lg-10">
                    <img src="<?= get_field('icone_secao_4') ?>" alt="">
                </div>
                <div class="col-12 col-lg-10">
                    <p>
                        <?= get_field('texto_da_secao_4') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="chamada">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>
                        <?= get_field('texto_da_secao_5') ?>
                    </p>
                    <a href="<?= get_field('link_do_whatsapp') ?>" target="_blank" class="contato-botao">
                        FALE CONOSCO VIA WHATSAPP
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?= get_field('imagem_da_secao_5') ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>CONTATO</h2>
                </div>
                <div class="col-12 col-md-6 d-md-none">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.8743415262084!2d-47.471934984468035!3d-23.5010351652536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58ac76a7044ff%3A0xf5ed119f46d78c50!2sR.%20Goi%C3%A1s%2C%20126%20-%20Centro%2C%20Sorocaba%20-%20SP%2C%2018035-550!5e0!3m2!1spt-BR!2sbr!4v1651843737425!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <ul>
                        <li> E-mail: <a href="mailto:contato@montesemontesadv.com.br">contato@montesemontesadv.com.br</a> </li>
                        <li> Telefone Escritório (fixo): (15) 3233-5111 </li>
                        <li> Whatsapp para assuntos de Previdência e Família: <a href="#">(15) 98814-9840 </a> </li>
                        <li> Whatsapp para assuntos de Civil, Consumidor, Empresarial: <a href="#">(15) 98185-8153 </a> </li>
                    </ul>
                    <?= do_shortcode('[contact-form-7 id="12" title="Contact form 1"]'); ?>
                </div>
                <div class="col-12 col-md-6 d-none d-md-block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.8743415262084!2d-47.471934984468035!3d-23.5010351652536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58ac76a7044ff%3A0xf5ed119f46d78c50!2sR.%20Goi%C3%A1s%2C%20126%20-%20Centro%2C%20Sorocaba%20-%20SP%2C%2018035-550!5e0!3m2!1spt-BR!2sbr!4v1651843737425!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>