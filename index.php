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
            <div class="container">
                <a href="formation1.php">
                    <article class="session_card-home">
                        <div class="session_card_description-home">
                            <h3 class="session_card_description_title-home">
                                Agilité : Principes & Méthodologies
                            </h3>
                            <div class="session_card_infos-home">
                                <p class="card_enjeux">Enjeux professionnels : Adopter un état d'esprit agile et connaitre le sens des méthodologies y afférentes constituent un levier de facilitation mais aussi de perfectionnement de la transition d'une méthode classique vers une logique agile.</p>
                                <p class="card_dates">Dates : 12 décembre et 13 décembre 2022</p>
                                <p class="card_duree">Durée : 2 jours (14 heures)</p>
                                <p class="card_prix">Prix : 1200€</p>
                            </div>
                            <button onclick="window.location.href = 'formation1.php';" class="btn-learn-more">
                                En savoir plus
                            </button>
                        </div>
                    </article>
                </a>
                <a href="formation2.php">
                    <article class="session_card-home">
                        <div class="session_card_description-home">
                            <h3 class="session_card_description_title-home">
                                Transformation digitale : Enjeux & Implémentation
                            </h3>
                            <div class="session_card_infos-home">
                                <p class="card_enjeux">Enjeux professionnels : Opter pour l'optique proactive devrait permettre à l'organisation de mieux se préparer pour les futurs impacts du passage à l'ère digitale mais encore et surtout réussir à y participer activement.</p>
                                <p class="card_dates">Dates : indéterminées</p>
                                <p class="card_duree">Durée : 2 jours (14 heures)</p>
                                <p class="card_prix">Prix : 1200€</p>
                            </div>
                            <button onclick="window.location.href = 'formation2.php';" class="btn-learn-more">
                                En savoir plus
                            </button>
                        </div>
                    </article>
                </a>
                <a href="formation3.php">
                    <article class="session_card-home">
                        <div class="session_card_description-home">
                            <h3 class="session_card_description_title-home">
                                Optimiser l'expérience client
                            </h3>
                            <div class="session_card_infos-home">
                                <p class="card_enjeux">Enjeux professionnels : Se servir du merchandising comme levier de rentabilité</p>
                                <p class="card_dates">Dates : à définir</p>
                                <p class="card_duree">Durée : 2 jours (14 heures)</p>
                                <p class="card_prix">Prix : à définir</p>
                            </div>
                            <button onclick="window.location.href = 'formation3.php';" class="btn-learn-more">
                                En savoir plus
                            </button>
                        </div>
                    </article>
                </a>
            </div>
            <a href="#" id="btn_next_sessions_link">
                <button class="btn_next_sessions-home" type="button">
                    Consultez nos sessions
                </button>
            </a>
        </div>
    </section>

<!-- Partie financement de formation -->

    <section class="finance_container-home">
        <div class="container">
            <h2 class="subtitle-home">Mettez en place votre plan de formation</h2>
            <p class="description_subtitle-home">Freeledge est à votre disposition afin de vous aider à trouver la formation qui vous correspond.</p>
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
            <img src="images/icons/heureux.png" alt="Icône emoji content">
            <h4>95%</h4>
            <p>Satisfaction Stagiaires</p>
        </div>
    </section>

<!-- Partie reconversion -->

    <section class="reconversion_job_container-home">
        <div class="container">
            <h2 class="container-title">Vous souhaitez vous former dans un secteur en particulier ?</h2>
            <p class="container-description">Découvrez toutes les formations disponibles chez Freeledge, classées par type de performance.</p>
            <div class="reconversion_job_cards_container-home">
                <a class="reconversion_job_card_link-home" href="#">
                    <article class="reconversion_job_card-home perf-digitale">
                        <p class="reconversion_job_card_tag-home">Formations</p>
                        <h3 class="reconversion_job_card_title-home">Performance digitale</h3>
                        <img src="images/photobureau4.png" alt="Image de la formation [nom de la formation]">
                        <button class="btn-go-to-formations btn-perf-digitale">Voir formations</button>
                    </article>
                </a>
                <a class="reconversion_job_card_link-home" href="#">
                    <article class="reconversion_job_card-home perf-economique">
                        <p class="reconversion_job_card_tag-home">Formations</p>
                        <h3 class="reconversion_job_card_title-home">Performance économique</h3>
                        <img src="images/photobureau4.png" alt="Image de la formation [nom de la formation]">
                        <button class="btn-go-to-formations btn-perf-economique">Voir formations</button>
                    </article>
                </a>
                <a class="reconversion_job_card_link-home" href="#">
                    <article class="reconversion_job_card-home perf-informatique">
                        <p class="reconversion_job_card_tag-home">Formations</p>
                        <h3 class="reconversion_job_card_title-home">Performance informatique</h3>
                        <img src="images/photobureau4.png" alt="Image de la formation [nom de la formation]">
                        <button class="btn-go-to-formations btn-perf-informatique">Voir formations</button>
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