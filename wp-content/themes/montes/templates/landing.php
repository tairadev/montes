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
            <source src="https://montesemontesadv.com.br/wp-content/themes/montes/materiais/video.mp4" type="video/mp4">
        </video>
        
        <div id="content">
            <div class="container">
                <div class="col-12 col-md-9">
                    <h1>ESTÁ PRECISANDO DE AJUDA PARA GARANTIR SUA APOSENTADORIA?</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="contato-botao">
        <div class="container">
            <div class="col-12">
                <a href="#" class="contato-botao">
                    ENTRE EM CONTATO COM NOSSOS ESPECIALISTAS
                </a>
            </div>
        </div>
    </section>

    <section id="conteudo">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-12 col-md-8 col-lg-7">
                    <h2>HÁ MAIS DE 40 ANOS NO MEIO JURÍDICO</h2>
                    <p>
                        O escritório Montes & Montes Advogados está preparado para atuar nas principais questões tratas na área de <strong>Direito Previdenciário</strong>, oferecendo aos clientes sempre <strong> a melhor solução jurídica</strong>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="itens">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-12 col-md-10">
                    <h2>A NOSSA ATUAÇÃO CONSULTIVA E CONTENCIOSA ENVOLVE:</h2>
                    <p>
                        O escritório Montes & Montes Advogados está preparado para atuar nas principais questões tratas na área de <strong>Direito Previdenciário</strong>, oferecendo aos clientes sempre <strong> a melhor solução jurídica</strong>.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <img src="https://cdn.pixabay.com/photo/2017/10/16/21/51/accepted-2858655_960_720.png" alt="">
                    <h3>Aposentadoria</h3>
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