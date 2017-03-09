

<?php

require "entete_admin.php";
require "menu_admin.php";
 ?>
        <script  src="http://code.jquery.com/jquery-1.7.2.js"></script> 
        <script src="add_annonce.js"></script> 
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ajouter une annonce</h3>
              </div>

<!-- <form class="formulaire" action="#" method="post">

<input type="text" name="no"> NOM

<input type="submit" class="submit" />
  


</form> -->


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small>Formulaire</small></h2>

                    <div class="clearfix "></div>
                  </div>
                  <div class="x_content">

                  <div class="return"></div>

                    <form  action="#" id="formulaire" class="form-horizontal form-label-left formulaire" method="post" >

                      <p>Remplissez ce formulaire pour ajouter une nouvelle annonce.</p>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Titre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 titre"  name="titre" placeholder="Developpeur web" required type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="societe">Société <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="societe" type="text" name="societe" required class="optional form-control col-md-7 col-xs-12 societe">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date limite <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" class="form-control date" name="date" data-inputmask="'mask': '99/99/9999'">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">URL de l'annonce <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="website" name="urlannonce" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12 urlannonce">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contactrecruteur">Contact du recruteur</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="contactrecruteur" name="contactrecruteur" placeholder="" class="form-control col-md-7 col-xs-12 contactrecruteur">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="adresse1" class="control-label col-md-3">Adresse 1</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="adresse1" type="text" name="adresse1" data-validate-length="6,8" class="form-control col-md-7 col-xs-12 adresse1" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="adresse2" class="control-label col-md-3">Adresse 2</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="adresse2" type="text" name="adresse2" data-validate-length="6,8" class="form-control col-md-7 col-xs-12 adresse2" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="codepostale" class="control-label col-md-3">Code Postale</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="codepostale" type="text" name="codepostale" data-validate-length="6,8" class="form-control col-md-7 col-xs-12 codepostale" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="ville" class="control-label col-md-3">Ville</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ville" type="text" name="ville" data-validate-length="6,8" class="form-control col-md-7 col-xs-12 ville" >
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note">Ajouter une note
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="note"  name="note" class="form-control col-md-7 col-xs-12 note"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success" name="submit">Ajouter annonce</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <!-- /page content -->

        

       


<?php 

        

    
require "footer_admin.php";
?>