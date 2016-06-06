<div class="modal fade" id="modal_apercu" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog">
    <div class="modal-dialog dialog-size">
        <div class="modal-content">
            <div class="modal-header header-primary">
                <button type="button" class="close closeview"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-eye"></i> Apercu</h4>
            </div>

            <div class="modal-body">
                <div id="apercu"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left closeview">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_image" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header header-primary">
			    <button type="button" class="close closeview"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title"><i class="fa fa-picture-o"></i> Ajout d'une image</h4>
			</div>

			<div class="modal-body">

				<div class="row text-center">

                    <div class="col-lg-2 col-sm-4 col-xs-4">
		                <br />
		                <img src="img/01.jpg" width="50px" onclick="selectImg(this.src);">
		                <br />
                        <small>01.jpg</small>
		            </div>

                    <div class="col-lg-2 col-sm-4 col-xs-4">
		                <br />
		                <img src="img/02.jpg" width="50px" onclick="selectImg(this.src);">
		                <br />
                        <small>02.jpg</small>
		            </div>

                    <div class="col-lg-2 col-sm-4 col-xs-4">
		                <br />
		                <img src="img/03.jpg" width="50px" onclick="selectImg(this.src);">
		                <br />
                        <small>03.jpg</small>
		            </div>

                    <div class="col-lg-2 col-sm-4 col-xs-4">
		                <br />
		                <img src="img/04.jpg" width="50px" onclick="selectImg(this.src);">
		                <br />
                        <small>04.jpg</small>
		            </div>

				</div>

				<br />
                <hr />
				<br />

				<div class="row">

					<div class="col-sm-3 text-center">
						<img id="previewImg" src="img/boxed-bg.jpg" class="img-responsive" />
						<small>Image choisis</small>
					</div>

					<div class="col-sm-9">

						<form class="form-horizontal">
							<input type="hidden" value="" id="sourceImg">
							<div class="form-group">
	                            <label for="Taille" class="col-sm-3 control-label">Taille</label>
	                            <div class="col-sm-9">
	                                <select class="form-control" id="taille">
										<option value="95">100%</option>
										<option value="90">90%</option>
										<option value="80">80%</option>
										<option value="70">70%</option>
										<option value="60">60%</option>
										<option value="50">50%</option>
										<option value="40">40%</option>
										<option value="30">30%</option>
										<option value="20">20%</option>
										<option value="10">10%</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="alignement" class="col-sm-3 control-label">Alignement</label>
	                            <div class="col-sm-9">
	                                <select class="form-control" id="alignement">
										<option value="none">aucun</option>
	                                    <option value="left">gauche</option>
										<option value="right">droite</option>
	                                </select>
	                            </div>
	                        </div>

						</form>

					</div>
				</div>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default closeview">Fermer</button>
			    <button type="button" class="btn btn-primary AjoutImage"><i class="fa fa-save"></i> Ajouter</button>
			</div>
		</div>
    </div>
</div>

<div class="modal fade" id="modal_dimension" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header header-primary">
			    <button type="button" class="close closeview"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title"><i class="fa fa-picture-o"></i> Dimension d'une image</h4>
			</div>

			<div class="modal-body">

				<div class="row">
					<div class="col-sm-12">

						<form class="form-horizontal">
							<input type="hidden" id="ImgId" value="" />
							<div class="form-group">
	                            <label for="Taille" class="col-sm-3 control-label">Taille</label>
	                            <div class="col-sm-9">
	                                <select class="form-control" id="nouvelle_taille">
										<option value="95">100%</option>
										<option value="90">90%</option>
										<option value="80">80%</option>
										<option value="70">70%</option>
										<option value="60">60%</option>
										<option value="50">50%</option>
										<option value="40">40%</option>
										<option value="30">30%</option>
										<option value="20">20%</option>
										<option value="10">10%</option>
	                                </select>
	                            </div>
	                        </div>

						</form>

					</div>
				</div>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default closeview">Fermer</button>
			    <button type="button" class="btn btn-primary ModifImage"><i class="fa fa-save"></i> Modifier</button>
			</div>
		</div>
    </div>
</div>

<div class="modal fade" id="modal_tableau" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header header-primary">
			    <button type="button" class="close closeview"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title"><i class="fa fa-table"></i> Ajout d'un tableau</h4>
			</div>

			<div class="modal-body">

				<div class="row">
					<div class="col-sm-12">

						<form class="form-horizontal">

							<div class="form-group">
	                            <label for="largeur" class="col-sm-4 control-label">Largeur</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="largeur">
	                                    <option value="width='100%'">100%</option>
										<option value="width='90%'">90%</option>
										<option value="width='80%'">80%</option>
										<option value="width='70%'">70%</option>
										<option value="width='60%'">60%</option>
										<option value="width='50%'">50%</option>
										<option value="width='40%'">40%</option>
										<option value="width='30%'">30%</option>
										<option value="width='20%'">20%</option>
										<option value="width='10%'">10%</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="alignement" class="col-sm-4 control-label">Alignement</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="align">
	                                    <option value="align='center'">Centré</option>
										<option value="align='left'">Gauche</option>
										<option value="align='right'">Droit</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="bordure" class="col-sm-4 control-label">Bordure</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="bordure">
	                                    <option value="dotted">Aucune (visible en édition)</option>
										<option value="solid">Trait</option>
										<option value="dashed">Tirets</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="couleur" class="col-sm-4 control-label">Couleur bordure</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="couleur">
										<option value="black">Noir</option>
										<option value="#d2d6de">Gris claire</option>
	                                    <option value="gray">Gris foncé</option>
										<option value="#111111">Gris anthracite</option>
										<option value="#3c8dbc">Bleu</option>
	                                    <option value="#001F3F">Bleu foncé</option>
										<option value="#39CCCC">Bleu pastel</option>
	                                    <option value="#00c0ef">Bleu ciel</option>
										<option value="#00a65a">Vert</option>
	                                    <option value="#f39c12">Jaune</option>
										<option value="#ff851b">Orange</option>
	                                    <option value="#f56954">Rouge</option>
										<option value="#D81B60">Rose</option>
	                                    <option value="#605ca8">Violet</option>

	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="couleur_fond" class="col-sm-4 control-label">Couleur de fond</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="couleur_fond">
										<option value="white">Blanc</option>
										<option value="#3c8dbc">Bleu</option>
	                                    <option value="#001F3F">Bleu foncé</option>
										<option value="#39CCCC">Bleu pastel</option>
	                                    <option value="#00c0ef">Bleu ciel</option>
										<option value="#00a65a">Vert</option>
	                                    <option value="#f39c12">Jaune</option>
										<option value="#ff851b">Orange</option>
	                                    <option value="#f56954">Rouge</option>
										<option value="#D81B60">Rose</option>
	                                    <option value="#605ca8">Violet</option>
										<option value="#d2d6de">Gris claire</option>
	                                    <option value="gray">Gris foncé</option>
										<option value="#111111">Gris anthracite</option>
										<option value="black">Noir</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="colonnes" class="col-sm-4 control-label">Nombre de colonnes</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="colonnes">
	                                    <option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="lignes" class="col-sm-4 control-label">Nombre de lignes</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="lignes">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
	                                </select>
	                            </div>
	                        </div>

							<div class="form-group">
	                            <label for="hauteur" class="col-sm-4 control-label">hauteur de ligne</label>
	                            <div class="col-sm-8">
	                                <select class="form-control" id="height">
	                                    <option value="height='20px'">20px</option>
										<option value="height='25px'">25px</option>
										<option value="height='30px'">30px</option>
										<option value="height='35px'">35px</option>
	                                </select>
	                            </div>
	                        </div>

						</form>

					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeview">Fermer</button>
			    <button type="button" class="btn btn-primary AjoutTableau"><i class="fa fa-save"></i> Ajouter</button>
			</div>

		</div>
    </div>
</div>
