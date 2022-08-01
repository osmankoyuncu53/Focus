<?php include "header.php"; ?>
</div>
      
   	<section >
      	<div class="bannen_inner">
            <!-- Page Header Start -->
				<div class="container-fluid bg-secondary mb-5" style="width:100%;">
					<div class="d-flex flex-column align-items-center justify-content-center" style="min-height:300px">
					    <h1 class="font-weight-semi-bold text-uppercase mb-3">ILETISIM</h1>
					        <div class="d-inline-flex">
					            <p class="m-0"><a href="">Anasayfa</a></p>
					            <p class="m-0 px-2">-</p>
					            <p class="m-0">Iletisim</p>
					        </div>
					</div>
				</div>
        </div>
    <section>           

    <!-- service end -->
    <!-- contact start -->
    <div id="contact" class="contact_section" style="margin-top:-20px;">
    	<div class="container">
    		<div class="col-sm-12">
    			<h1 class="choose_text">Bizimle İletişime Geçmek İçin</h1>
    			
    		</div>
    	</div>
    </div>
    <div class="contact_section_2" style="margin-top:-3px;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="input_main">
              <form action="netting/islem.php" method="POST">
                       <div class="container">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Ad" name="txt_iletisimAd">
                            </div>

                            <div class="form-group">
                              <input type="email" class="email-bt" placeholder="Mail" name="txt_iletisimEmail">
                            </div>

                            <div class="form-group">
                              <input type="text" pattern="\d*" class="email-bt" placeholder="Telefon" name="txt_iletisimTelefon">
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Mesaj" rows="5" id="comment" name="txt_iletisimMesaj"></textarea>
                            </div>
                       </div> 

                       <div class="send_btn">
                        <button name="iletisimYolla" type="submit" class="main_bt">Gönder</button>
                       </div>                   
                      </div>
              </form>
    			</div>
    			<div class="col-md-6">
    				<div class="section_right">
    					<img src="images/img-2.png" style="max-width: 100%;">
    				</div>
    			</div>
    		</div>
    	</div>
    </div>


<div class="choose_section_2" style="margin-top:45px; margin-bottom: 130px;">
        <div class="container" >
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48152.69528633698!2d29.01271007818618!3d41.035243200158526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac826d524c9f1%3A0xc14f7612337b7f38!2zw5xza8O8ZGFyL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1519733547760" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
    		</div>
    	</div>
</div>

<?php include "footer.php"; ?>



