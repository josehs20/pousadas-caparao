 <!-- Section 6 -->
 <div class="section-6-container section-container section-container-image-bg background-image" id="section-6">
     <div class="container">
         <div class="row">
             <div class="col section-6 section-description wow fadeIn">
                 <h2>Nosso Contato</h2>
                 <div class="divider-1 wow fadeInUp"><span></span></div>
                 <p>Nos mande um email usando o formulário abaixo.</p>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 section-6-box wow fadeInUp">
                 <h3>Por email</h3>
                 <div class="section-6-form">
                     <form role="form" action="assets/contact.php" method="post">
                         <div class="form-group">
                             <label class="sr-only" for="contact-email">Email</label>
                             <input type="text" name="email" placeholder="Email..." class="contact-email form-control"
                                 id="contact-email">
                         </div>
                         <div class="form-group">
                             <label class="sr-only" for="contact-subject">Assunto</label>
                             <input type="text" name="subject" placeholder="Subject..."
                                 class="contact-subject form-control" id="contact-subject">
                         </div>
                         <div class="form-group">
                             <label class="sr-only" for="contact-message">Mensagem</label>
                             <textarea name="message" placeholder="Message..." class="contact-message form-control"
                                 id="contact-message"></textarea>
                         </div>
                        <button type="submit" class="btn btn-primary btn-customized"><i class="fas fa-paper-plane"></i>
                            Enviar mensagem
                        </button>
                     </form>
                 </div>
             </div>
             <div class="col-md-5 offset-md-1 section-6-box wow fadeInDown">
                 <h3>Nos siga nas redes sociais</h3>
                 <div class="section-6-social">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-dribbble"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-pinterest"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Footer -->
 <footer class="footer-container">
     <div class="container">
         <div class="row">
             <div class="col">
                 &copy; <?php echo date('Y'); ?> Desenvolvido por <b>José Henrique</b> e <b>Jônatas M Campos</b>.
             </div>
         </div>
     </div>
 </footer>

