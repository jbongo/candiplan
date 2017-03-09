<?php

require "entete_admin.php";
require "menu_admin.php";
 ?>
            <br />

           

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Vos annonces</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="rechercher une annonce...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            
            
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">Code</th>
                          <th style="width: 20%">Titre job</th>
                          <th>Société</th>
                          <th>Date limite</th>
                          <th>Status</th>
                          <th>Lettre de motivation</th>
                         
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>

                      <?php        

                        require('../src/annonce.class.php');

                        $annonce = new Annonce();
                        $mesAnnonces = $annonce->afficherAnnonce();   



                       foreach ($mesAnnonces as $ligne ){

                       
                     ?>

                      <tbody>
                        <tr>
                          <td> <?php echo $ligne ['id_anno'] ; 

                        ?></td>
                          <td>
                            <a><?php echo $ligne['titre_anno'] ;?></a>
                            
                          </td>
                          <td>
                            <p><?php echo $ligne['libelleEntreprise_anno'] ;?></p>
                          </td>
                          <td class="project_progress">

                              <p><?php echo $ligne['dateLimite_anno'] ; ?></p>

                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Envoyé</button>
                          </td>
                          
                          <td>
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#CadidateModal<?php echo $ligne['id_anno'] ;?>">Ajouter lettre motivation</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#DetailsModal<?php echo $ligne['id_anno'] ;?>"><i class="fa fa-folder"></i> Details </a>
                            <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal<?php echo $ligne['id_anno'] ;?>"><i class="fa fa-pencil"></i> Editer </a>
                            <a href="delete_annonce.php?del=<?php echo $ligne['id_anno'] ; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Supprimer </a>
                          </td>
                        </tr>
                        



                      </tbody>
                      <?php  }?>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <?php 
              foreach ($mesAnnonces as $ligne ){


         ?>


        <!-- /candidateModal -->
        <div id="candidateModal<?php echo $ligne['id_anno'] ;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Comment avez-vous candidaté?</h4>
              </div>
              <div class="modal-body">
                <div id="testmodal" style="padding: 5px 20px;">
                  <form id="antoform" class="form-horizontal calender" role="form">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Le poste</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="title" name="title" disabled value="Developpeur web">
                      </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Methode</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <select class="form-control">
                        <option>Choisir</option>
                        <option value="mail">mail</option>
                        <option value="courrier">courrier</option>
                        <option value="ligne">En ligne</option>
                        <option value="phone">Téléphone</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Ajouter une note</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary antosubmit">valider</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /candidateModal -->




        <!-- /DetailsModal -->
        <div id="DetailsModal<?php echo $ligne['id_anno'] ;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Detail de l'annonce </h4>
              </div>
              <div class="modal-body">
                <div id="testmodal" style="padding: 5px 20px;">
                  <form id="antoform" class="form-horizontal calender" role="form">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Le poste</label>
                      <div class="col-sm-9">
                        <p> <?php echo $ligne['titre_anno'] ;?></p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Société: </label>
                      <div class="col-sm-9">
                        <p><?php echo $ligne['libelleEntreprise_anno'] ;?></p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Date limite:  </label>
                      <div class="col-sm-9">
                        <p><?php echo $ligne['dateLimite_anno'] ;?></p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">URL de l'annonce :  </label>
                      <div class="col-sm-9">
                        <p><?php echo $ligne['lien_anno'] ;?></p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Contact du recruteur :  </label>
                      <div class="col-sm-9">
                        <p> <?php echo $ligne['contactRecruteur_anno'] ;?> </p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Adresse 1:  </label>
                      <div class="col-sm-9">
                        <p> <?php echo $ligne['adresseUnRecruteur_anno'] ;?> ,
                            <?php echo $ligne['codePostalEntreprise_anno'] ;?>,
                            <?php echo $ligne['villeEntreprise_anno'] ;?>
                        </p>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Note :  </label>
                      <div class="col-sm-9">
                        <p> <?php echo $ligne['note_anno'] ;?> </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

              </div>
            </div>
          </div>
        </div>
        <!-- /DetailsModal -->



        <!-- /editModal -->
        <div id="editModal<?php echo $ligne['id_anno'] ;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modifier l'annonce</h4>
              </div>
              <div class="modal-body">
                <div id="testmodal" style="padding: 5px 20px;">
                  <form id="antoform" class="form-horizontal calender"  method="post" action="#" role="form">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Titre <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" value="<?php echo $ligne['titre_anno'] ;?>" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="societe">Société <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="societe" type="text" name="societe" value="<?php echo $ligne['libelleEntreprise_anno'] ;?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Date limite <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="date" value="<?php echo $ligne['dateLimite_anno'] ;?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">URL de l'annonce <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="website" name="website" required="required" value="<?php echo $ligne['lien_anno'] ;?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contactrecruteur">Contact du recruteur</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="contactrecruteur" name="contactrecruteur" value="<?php echo $ligne['contactRecruteur_anno'] ;?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label for="adresse1" class="control-label col-md-3">Adresse 1</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="adresse1" type="text" name="adresse1" value="<?php echo $ligne['adresseUnRecruteur_anno'] ;?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="adresse2" class="control-label col-md-3">Adresse 2</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="adresse2" type="text" name="adresse2" value="<?php echo $ligne['adresseDeuxRecruteur_anno'] ;?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="codepostale" class="control-label col-md-3">Code Postale</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="codepostale" type="text" name="codepostale" value="<?php echo $ligne['codePostalEntreprise_anno'] ;?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label for="ville" class="control-label col-md-3">Ville</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="ville" type="text" name="ville" value="<?php echo $ligne['villeEntreprise_anno'] ;?>" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>


                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note">Ajouter une note
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="note" required="required" name="note" value="<?php echo $ligne['note_anno'] ;?>" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary ">valider</button>
              </div>
            </div>
          </div>
        </div>
        <!-- editModal -->

        <?php 
        
        }

        ?>




     <?php 
      require "footer_admin.php";
     ?>