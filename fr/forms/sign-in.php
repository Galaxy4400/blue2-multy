<section class="block-25">
	<div class="block-25__container _container">
		<div class="block-25__body">
			<div class="block-25__column block-25__column_image">
				<div class="block-25__content">
					<h2 class="block-25__title">Connectez-vous à votre compte</h2>
					<div class="block-25__footer">
						<figure class="block-25__image">
<img src="<?=$dir_prefix?>assets/img/deco/11.webp" alt="Déco">
						</figure>
					</div>
				</div>
			</div>
			<div class="block-25__column block-25__column_form">
				<form class="signin-form" name="signin" action="./" method="post" data-form data-send="test" data-validation data-after="signinFormAfterSubmit" data-autocomplete-off>
					<div class="signin-form__section">
						<div class="signin-form__row signin-form__row_2">
							<div class="signin-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="email">Nom</label> 
								</div>
<input class="signin-form__input input" type="email" id="email" name="email" required>
							</div>
							<div class="signin-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="password">Mot de passe</label> 
								</div>
<input class="signin-form__input input" type="password" id="password" name="password" required data-min="6">
								<div class="signin-form__link-block">
<a class="signin-form__link" href="<?=$language_suffix?>forgot.php">Vous avez oublié votre mot de passe ?</a> 
								</div>
							</div>
						</div>
					</div>
					<div class="signin-form__section">
						<div class="signin-form__row signin-form__row_2">
							<div class="signin-form__column">
<button class="help-form__btn btn btn_d btn_fw" type="submit">Connectez-vous</button> 
								<p class="signin-form__sub-text">Pas de compte ? <a class="signin-form__sub-link" href="<?=$language_suffix?>sign-up.php">Inscrivez-vous.</a></p>
							</div>
							<div class="form__column form-message">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>