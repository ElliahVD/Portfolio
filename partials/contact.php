<section class="contact section" id="contact">
    <h2 class="section-title" lng-tag="contactMe">Contactez-moi</h2>

    <div class="contact__container bd-grid">
        <div class="contact__info">
            <!--            <h3 class="contact__subtitle">EMAIL</h3>-->
            <!--            <div class="contact__text">contact@amandinedelaire.fr</div>-->
            <h3 class="contact__subtitle">GitHub</h3>
            <div class="contact__text">https://github.com/ElliahVD</div>
        </div>

        <section class="">
            <div class="container contact-form pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <form name="contact" method="POST" action="../admin/verify.php">
                            <div class="alert alert-success d-none" data-message-success="d-none">
                                Message envoyé avec succès !
                            </div>
                            <div class="alert alert-danger d-none" data-message-error="d-none">
                                Erreur, vérifier le formulaire.
                            </div>
                            <div id="contact" novalidate="novalidate">
                                <div class="form-row row">
                                    <div class="form-group col-md-6">
                                        <label for="contact_name">Votre Nom </label><input type="text" id="contact_name"
                                                                                           name="contact_name"
                                                                                           class="form-control"
                                                                                           required>
                                    </div>
                                </div>
                                <div class="form-row row mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="contact_object">Objet </label><input type="text" id="contact_object"
                                                                                         name="contact_object"
                                                                                         class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact_email">E-mail </label><input type="email" id="contact_email"
                                                                                         name="contact_email"
                                                                                         class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="contact_message " required>Message </label>
                                    <textarea id="contact_message" name="contact_message" class="form-control"
                                              rows="5"></textarea>
                                </div>
                                <input type="hidden" id="contact_referer" name="contact_referer">
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-4 col-md-12">
                                    <div class="d-flex justify-content-center">
                                        <div class="form-group">
                                            <button type="submit" class="btn">Envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>


