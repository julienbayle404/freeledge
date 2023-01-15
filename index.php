<?php include ("header.php"); ?>

    <div class="video_container-home">
        <video id="background_video-home" autoplay muted loop preload="auto">
            <source src="images/videobureau.mp4" type="video/mp4">
        </video>
    </div>

<!-- Haut de page -->

    <section class="top_container-home center">
        <p class="welcometext-home">Bienvenue chez Freeledge</p>
        <div class="frise-circles">
            <span class="circle circ-blue-1"></span>
            <span class="circle circ-blue-2"></span>
            <span class="circle circ-green-1"></span>
            <span class="circle circ-green-2"></span>
            <span class="circle circ-yellow-1"></span>
            <span class="circle circ-yellow-2"></span>
            <span class="circle circ-orange-1"></span>
            <span class="circle circ-orange-2"></span>
            <span class="circle circ-orange-3"></span>
            <span class="circle circ-red-1"></span>
            <span class="circle circ-pink-1"></span>
            <span class="circle circ-purple-1"></span>
            <span class="circle circ-purple-2"></span>
        </div>
        <h1 class="searchbar_title-home">Vous êtes à la recherche d'une formation ?</h1>
        <form action="https://www.google.com/search" method="get" class="searchbar-home">
            <input type="text" placeholder="Insérer des mots-clés ...">
            <a href="#">
                <i class="fa-solid fa-magnifying-glass searchbar-icon"></i>
            </a>
        </form>
        <p class="searchbar_exemples-home">Ex. : Scrum, PHP, Management, Webmarketing, ...</p>
    </section>

<!-- Partie prochaines sessions de formation à venir -->

    <section class="next_sessions_container-home">
        <div class="center">
            <h2 class="subtitle-home">Nos prochaines sessions</h2>
            <div class="grid">
                <article class="session_card-home">
                    <div class="session_card_description-home">
                        <h3 class="session_card_description_title-home">
                            Agilité : Principes & Méthodologies
                        </h3>
                        <div class="session_card_infos-home">
                            <p class="card_enjeux">Hello</p>
                            <p class="card_dates">24 juin au 30 janvier</p>
                            <p class="card_duree">15h</p>
                            <p class="card_prix">30€</p>
                        </div>
                        <button onclick="window.location.href = 'formation1.php';" class="btn-learn-more">
                            En savoir plus
                        </button>
                    </div>
                </article>
                <article class="session_card-home">
                    <div class="session_card_description-home">
                        <h3 class="session_card_description_title-home">
                            Transformation digitale : Enjeux & Implémentation
                        </h3>
                        <div class="session_card_infos-home">
                            <p>hello</p>
                            <p>24 juin au 30 janvier</p>
                        </div>
                        <button onclick="window.location.href = 'formation2.php';" class="btn-learn-more">
                            En savoir plus
                        </button>
                    </div>
                </article>
                <article class="session_card-home">
                    <div class="session_card_description-home">
                        <h3 class="session_card_description_title-home">
                            Optimiser l'expérience client
                        </h3>
                        <div class="session_card_infos-home">
                            <p>hello</p>
                            <p>24 juin au 30 janvier</p>
                        </div>
                        <button onclick="window.location.href = 'formation3.php';" class="btn-learn-more">
                            En savoir plus
                        </button>
                    </div>
                </article>
            </div>
            <a href="#">
                <button class="btn_next_sessions-home" type="button">
                    Consultez nos sessions
                </button>
            </a>
        </div>
    </section>

<!-- Partie financement de formation -->

    <section class="finance_container-home">
        <div class="center">
            <h2 class="subtitle-home">Financez votre formation en 2023</h2>
            <p class="description_subtitle-home">Nos conseillers sont là pour vous aider à activer vos leviers de financement.</p>
            <div class="finance_cards_bloc-home">
                <a href="#">
                    <article class="finance_card-home">
                        <span class="finance_card_tag-home">Ressources</span>
                        <h3 class="finance_card_title-home">Formateurs, conseillers de formation & Compétences</h3>
                        <img src="images/photobureau1.png" alt="Image de la card Fonds National pour l'Emploi (FNE)">
                    </article>
                </a>
                <a href="#">
                    <article class="finance_card-home">
                        <span class="finance_card_tag-home">Certifications</span>
                        <h3 class="finance_card_title-home">Consulter la page dédiée à nos certifications</h3>
                        <img src="images/photobureau2.png" alt="Image de la card Fonds National pour l'Emploi (FNE)">
                    </article>
                </a>
                <a href="#">
                    <article class="finance_card-home">
                        <span class="finance_card_tag-home">Financement</span>
                        <h3 class="finance_card_title-home">Des questions sur le financement de votre parcours ?</h3>
                        <img src="images/photobureau3.png" alt="Image de la card Fonds National pour l'Emploi (FNE)">
                    </article>
                </a>
                <a href="#">
                    <article class="finance_card-home">
                        <span class="finance_card_tag-home">Informations</span>
                        <h3 class="finance_card_title-home">Découvrir toutes nos informations pratiques</h3>
                        <img src="images/photobureau4.png" alt="Image de la card Fonds National pour l'Emploi (FNE)">
                    </article>
                </a>
            </div>
        </div>
    </section>

<!-- Partie palmarès/satisfaction client -->

    <section class="satisfaction_client_container-home">
        <div class="satisfaction_client_card-home">
            <img src="images/icons/fusee.png" alt="Icône fusée">
            <h4>6 ans</h4>
            <p>d'existence</p>
        </div>
        <div class="satisfaction_client_card-home">
            <img src="images/icons/reveil.png" alt="Icône réveil">
            <h4>2400</h4>
            <p>Heures de formation</p>
        </div>
        <div class="satisfaction_client_card-home">
            <img src="images/icons/stagiaires_plein.png" alt="Icône stagiaires">
            <h4>478</h4>
            <p>Stagiaires</p>
        </div>
        <div class="satisfaction_client_card-home">
            <img src="images/icons/content.png" alt="Icône emoji content">
            <h4>95%</h4>
            <p>Satisfaction Stagiaires</p>
        </div>
    </section>

<!-- Partie reconversion -->

    <section class="reconversion_job_container-home">
        <div class="center">
            <h2 class="reconversion_job_container_title-home">Vous souhaitez vous reconvertir professionnellement ?</h2>
            <p class="reconversion_job_container_description-home">Découvrez toutes les offres de reskilling disponibles chez Freeledge</p>
            <div class="reconversion_job_cards_container-home">
                <a class="reconversion_job_card_link-home" href="#">
                    <article class="reconversion_job_card-home">
                        <p class="reconversion_job_card_tag-home">Reskilling</p>
                        <h3 class="reconversion_job_card_title-home">DevOps</h3>
                        <img src="images/photobureau3.png" alt="Image de la formation [nom de la formation]">
                        <h4 class="reconversion_job_card_date-home">Formation Inter - 399 heures</h4>
                    </article>
                </a>
                <a class="reconversion_job_card_link-home" href="#">
                    <article class="reconversion_job_card-home">
                        <p class="reconversion_job_card_tag-home">Reskilling</p>
                        <h3 class="reconversion_job_card_title-home">Analyste Big Data</h3>
                        <img src="images/photobureau4.png" alt="Image de la formation [nom de la formation]">
                        <h4 class="reconversion_job_card_date-home">Formation Inter - 399 heures</h4>
                    </article>
                </a>
            </div>
        </div>
    </section>

<!-- Partie entreprises avec qui nous avons travaillé -->

    <section class="collaborateurs_container-home">
        <h3 class="collaborateurs_title-home">Nous avons travaillé avec</h3>
        <div class="collaborateurs_slide-home">
            <span class="collaborateurs_slide_image-home">
                <img src="images/collab/logodouanes.png" alt="Logo Douanes & Droits Indirects">
            </span>
            <span class="collaborateurs_slide_image-home">
                <img src="images/collab/logoina.svg" alt="Logo INA">
            </span>
            <span class="collaborateurs_slide_image-home">
                <img src="images/collab/logocpme.png" alt="Logo Douanes & Droits Indirects">
            </span>
            <span class="collaborateurs_slide_image-home">
                <img src="images/collab/logointerfor.png" alt="Logo Douanes & Droits Indirects">
            </span>
        </div>
    </section>

<?php include ("footer.php"); ?>