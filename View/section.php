<?php

echo '
<section>
    <div class="center_left">
        <div class="title_welcome"><span class="red">MELHOR</span> Livraria do Brasil !</div>
        
        <div class="welcome_box">
            <p class="welcome">
                <span class="orange">Sobre a paixão da Livraria São Paulo </span><br />
                "O livro é um artefato cultural criado pela humanidade para transmitir conhecimento através das gerações.
                 Ele é uma arte poderosa, fonte de entretenimento e conhecimento destinando-se a
                educar ou doutrinar, pode tornar-se um modo eficiente de influenciar os cidadãos."
            </p>
            <a href="sobre.php" class="read_more">Leia Mais</a>
        </div>

         <div class="features">
                <div class="title_news">Vantagens de Ler Livros</div>
                
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                        A leitura é uma atividade que estimula a reflexão sobre os nossos princípios, valores, pensamentos e atitudes. E isso não acontece só quando você lê livros de auto-ajuda. Histórias ficcionais, literatura clássica, biografias e até livros relacionados a assuntos profissionais provocam algum tipo de reflexão durante a leitura. Depois de ler um livro, você nunca é a mesma pessoa que era antes de lê-lo.
                    </div>
                </div>
                
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                        Ler é um hábito e, assim como qualquer outro, requer esforço, foco e vontade, principalmente no começo. Alguns começam a ler quando crianças, aos poucos. Outros descobrem os livros mais tarde. O problema dos adultos que querem aprender a gostar de ler mas não conseguem, é que acham que precisam ler um livro inteiro em um dia e dez em uma semana, e se frustram quando não conseguem. O segredo é ler um pouco a cada dia e ir descobrindo o que aquilo lhe traz de bom. A leitura é um dos bons hábitos que todos deveriam desenvolver, inclusive por seus benefícios à saúde: ela diminui o stress, estimula a memória, aumenta a concentração e melhora o raciocínio.
                    </div>
                </div>
        </div>
    </div>


    <div class="center_right">
        
        <div class="software_box">
            <img src="images/livro.png" alt="" title="" />
        </div>

        <div class="text_box">
            <div class="title">Login Cliente/Administrador</div>
                <form method="POST">
                    <div class="login_form_row">
                        <label class="login_label">Email:</label><input type="text" name="name" class="login_input" id="email" />
                    </div>

                    <div class="login_form_row">
                      <label class="login_label">Senha:</label><input type="password" name="pass" class="login_input" id="senha" />
                    </div>
               
                    <input type="image" src="images/login.gif" class="login" id="login" />
                 </form>
            </div>

            <div class="testimonials">
                 <div class="title_news">OPINIÕES DA GALERA !</div>
                 
                 <div class="text_box">
                    <p class="testimonial">
                         Nossa sempre que preciso comprar um livro online, a Livraria Cultura sempre é minha primeira escolha,
                         nunca me deixou na mão, ótimo atendimento, site confiável, recomendo galera !
                         <strong>Leticia Nunes</strong>
                    </p>
                </div>

            </div>
        </div>

        <div class="clear"></div>
    </section>
';


?>