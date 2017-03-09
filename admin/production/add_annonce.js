$(document).ready(function(){


	$('.formulaire').submit(function(){

		var titre = $('.titre').val();
		var societe = $('.societe').val();
		var date = $('.date').val();
		var urlannonce = $('.urlannonce').val()
		var contactrecruteur = $('.contactrecruteur').val();
		var adresse1 = $('.adresse1').val();
		var adresse2 = $('.adresse2').val();
		var codepostal = $('.codepostale').val();
		var ville = $('.ville').val();
		var note = $('.note').val();


		


		$.post('add_annonce_send.php',{titre:titre,societe:societe,date:date,urlannonce:urlannonce,contactrecruteur:contactrecruteur,
			adresse1:adresse1,adresse2:adresse2,codepostale:codepostal,ville:ville,note:note},function(donnee){
				
				$('.return').html(donnee).slideDown();
								

					$('.titre').val('');
					$('.societe').val('');
					$('.date').val('');
					$('.urlannonce').val('');
					$('.contactrecruteur').val('');
					$('.adresse1').val('');
					$('.adresse2').val('');
					$('.codepostale').val('');
					$('.ville').val('');
					$('.note').val('');

					alert(titre+adresse2+adresse1+ville+codepostal+date+note);

			});
		return false;



		
	});

});

