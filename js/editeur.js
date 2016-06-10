
$(function() {

	$('[data-toggle="tooltip"]').tooltip()

	// Restaure le format choisi si la page est rechargé
	Format = sessionStorage.getItem('formatPage');
	if (Format != null) {
		Width = sessionStorage.getItem('widthPage') ;
		Height = sessionStorage.getItem('heightPage') ;
		FormatPage(Format, Width, Height) ;
	} ;

	// Restaure la derniere sauvegarde si la page est rechargé
	/*
	LoadPage = Decode(sessionStorage.getItem('page'));
	if (LoadPage != 'undefined') {

		$('#editeur').html(Page) ;
	}
	*/

	ToFocus();
});

function ToFocus() {

	$('#editeur').focus() ;
};

// Permet d'utiliser toute sortes de caractères spéciaux et éviter les conflits (ex : < >).
function Encode(Chaine) {

	Page = encodeURIComponent(Chaine);
	return Page ;
};

function Decode(Chaine) {

	Page = decodeURIComponent(Chaine);
	return Page ;
};

function Sauvegarde() {

	Page = Encode($('#editeur').html());
	sessionStorage.setItem('page',Page);
	console.log('Page sauvegardée') ;
	ToFocus();
};

function Restaure() {

	Page = Decode(sessionStorage.getItem('page'));
	if (Page != 'null') {
		$('#editeur').html(Page) ;
		console.log('Page restaurée') ;
		ToFocus();
	}
};

// Ajoute une bordure sur une image au survol de la souris
function AddBorder(id) {

	$('#'+id).addClass('ImgBorder') ;
};

function RemoveBorder(id) {

	$('#'+id).removeClass('ImgBorder') ;
};

function selectImg(src) {

	$('#sourceImg').val(src) ;
	$('#previewImg').attr("src",src);
};

// Permet de changer les dimensions d'une image
function DimensionsImg(id) {

	$('#modal_dimension').modal("show") ;
	$('#ImgId').val(id) ;
	$('.ModifImage').click(function() {

		ImgId = $('#ImgId').val() ;
		width = $('#editeur').width() / 100 * $('#nouvelle_taille').val() - 10 ;
		$('#'+ImgId).attr( "width", width );
		$("#modal_dimension").modal("hide");
		Sauvegarde();
		ToFocus();
	});
};

// Permet de changer le format de la page (A4, A5 etc...)
function FormatPage(format, width, height) {

	$('#editeur').css('width', width);
	$('#editeur').css('height', height);

	sessionStorage.setItem('formatPage',format);
	sessionStorage.setItem('widthPage',width);
	sessionStorage.setItem('heightPage',height);

	$(".btn-formatPage").html(format);
	console.log('Format modifié en '+format) ;

	ToFocus();
};

// Permet de changer l'orientation de la page (Portrait ou Paysage)
function Orientation(choix) {

	Format = sessionStorage.getItem('formatPage');
	if (Format != null) {

		Width = sessionStorage.getItem('widthPage') ;
		Height = sessionStorage.getItem('heightPage') ;

		if (parseInt(Width) > parseInt(Height)) {

			if (choix == 'Portrait') {

				$('#editeur').css('width', Height);
				$('#editeur').css('height', Width);
			}
		}
		else {

			if (choix == 'Paysage') {

				$('#editeur').css('width', Height);
				$('#editeur').css('height', Width);
			}
		}
		sessionStorage.setItem('widthPage',Height);
		sessionStorage.setItem('heightPage',Width);
	}
	else {
		alert('Vous devez définir un format de page avant de changer l\'orientation') ;
	}
	console.log('Orientation en '+choix) ;
	ToFocus();
}

$('.closeview').click(function() {

	$(".modal").modal("hide") ;
	$('.editView').addClass('edit');
	ToFocus();
});

// Sauvegarde la page en cours à chaque fois qu'une touche est pressée
object = $('#editeur')[0] ;
object.onkeyup=function(){
	console.log('Automatiquement') ;
	Sauvegarde();
};

$('.commande').click(function(e) {
	e.preventDefault();

	nom = $(this).attr('nom');
	argument = $(this).attr('argument');

	if (typeof argument === 'undefined') {
    	argument = '';
  	}
	switch (nom) {
		case "image":
			$("#modal_image").modal("show") ;
      	break;
    	case "tableau":
			$("#modal_tableau").modal("show") ;
      	break;
    }
	document.execCommand('styleWithCSS', false, true);
	document.execCommand(nom, false, argument);
	console.log('Commande "'+nom+'" exécutée') ;
	Sauvegarde();
});

$('.apercu').click(function(e) {
	e.preventDefault() ;

	$('.dialog-size').css('width', $('#editeur').outerWidth()) ;
	$('#apercu').css('height', $('#editeur').height()) ;
	$("#modal_apercu").modal("show") ;
	$('#apercu').html(Decode(sessionStorage.getItem('page'))) ;
	$('.editView').removeClass('edit');
	console.log('Apercu lancé') ;
});

$('.AjoutImage').click(function(e) {
	e.preventDefault() ;

	nom = "insertHTML" ;
	src = $('#sourceImg').val() ;
	width = $('#editeur').width() / 100 * $('#taille').val() - 10 ;
	float = $('#alignement').val() ;
	argument = '<img id="'+Math.floor(Date.now() / 1000)+'" src="'+src+'" width="'+width+'px" style="float:'+float+'; margin: 5px;" onMouseOver="AddBorder(this.id)" onMouseOut="RemoveBorder(this.id)" ondblclick="DimensionsImg(this.id)" />' ;

	document.execCommand(nom, false, argument);
	$("#modal_image").modal("hide") ;
	console.log('Image ajoutée') ;
	Sauvegarde();
	ToFocus();

}) ;

$('.AjoutTableau').click(function(e) {
	e.preventDefault() ;

	nom = "insertHTML" ;
	align = $('#align').val() ;
	bordure = $('#bordure').val() ;
	couleur = $('#couleur').val() ;
	couleur_fond = $('#couleur_fond').val() ;

	if (bordure == 'dotted') {
		BordureCouleur = 'style="vertical-align: top; padding: 5px; background-color: '+couleur_fond+' !important" class="editView edit"' ;
	}
	else {
		BordureCouleur = 'style="border:1px '+bordure+' '+couleur+'; vertical-align: top; padding: 5px; background-color: '+couleur_fond+' !important"' ;
	}

	largeur = $('#largeur').val() ;
	NbColonnes = $('#colonnes').val() ;
	NbLignes = $('#lignes').val() ;
	height = $('#height').val() ;

	colonne = "" ;
	for (colonnes = 0; colonnes < NbColonnes; colonnes++) {
		colonne += '<td '+BordureCouleur+height+'>Vide</td>' ;
	}

	ligne = "" ;
	for (lignes = 0; lignes < NbLignes; lignes++) {
		ligne += '<tr>'+colonne+'</tr>' ;
	}

	argument = '<table '+align+largeur+'> '+ligne+' </table>' ;

	document.execCommand(nom, false, argument);
	$("#modal_tableau").modal("hide") ;
	console.log('Tableau ajouté') ;
	Sauvegarde();
	ToFocus();
}) ;
