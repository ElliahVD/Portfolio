<!-- FOOTER -->
<footer class="footer section" onclick=[modal]>
    <div class="footer__container bd-grid">
        <div class="footer__data">
            <p class="footer__text"></p>
            <!--            Button trigger modal -->
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    lng-tag="aboutMore">
            </button>
            <!--             Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered p-4">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body " lng-tag="iMeMyself" id="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__data">

            <ul>
                <li><a href="#home" class="footer__link" lng-tag="home"></a></li>
                <li><a href="#about" class="footer__link" lng-tag="about"></a></li>
                <li><a href="#skills" class="footer__link" lng-tag="skills"></a></li>
                <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                <li><a href="#Contact" class="footer__link" lng-tag="contact"></a></li>
            </ul>
        </div>

        <div class="img_footer  ">
            <h2 class="footer__title text-center" lng-tag="follow"></h2>
            <div class="d-flex justify-content-center">
            <a href="www.linkedin.com/in/amandine-delaire-3a1566237" class="col-3 footer__social">
                <img src="/assets/logo_linkedin.png" alt="logo linkedin">
            </a>
            <a href="https://github.com/ElliahVD" class="col-3 footer__social">
                <img src="/assets/logo_github.png" alt="logo github">
            </a>
            </div>
        </div>
    </div>
</footer>


<a class=" adCo nav-link active text-end" aria-current="page" href="../admin/connexion.php">Connexion</a>


<script src="js/home.js"></script>
<script src="js/translate.js"></script>
<script src="js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
