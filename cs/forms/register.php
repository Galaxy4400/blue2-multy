<section class="block-24">
	<div class="block-24__container _container">
		<div class="block-24__body">
			<div class="block-24__column block-24__column_image">
				<div class="block-24__content">
					<h2 class="block-24__title">Zaregistrujte se</h2>
					<div class="block-24__footer">
						<figure class="block-24__image">
<img src="<?=$dir_prefix?>assets/img/deco/11.webp" alt="Deco">
						</figure>
					</div>
				</div>
			</div>
			<div class="block-24__column block-24__column_form">
				<form class="register-form _loading" name="register" method="post" action="reg/send.php" data-form data-send="ajax" data-validation data-after="mainFormAfterSubmit" data-autocomplete-off>
<input type="hidden" name="id" value="su">
<input type="hidden" name="country" value="<?= $country ?>">
<input type="hidden" name="subid" value="<?= $subid ?>">
<input type="hidden" name="offer_name" value="<?= $offer_name ?>">
<input type="hidden" name="language" value="<?= $language ?>">

					<div class="register-form__section">
						<div class="register-form__row">
							<div class="register-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="first_name">Křestní jméno</label> 
								</div>
<input class="register-form__input input" type="text" id="first_name" name="first_name" required>
							</div>
							<div class="register-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="last_name">Příjmení</label> 
								</div>
<input class="register-form__input input" type="text" id="last_name" name="last_name" required>
							</div>
							<div class="register-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="phone">Telefon</label> 
								</div>
<input class="register-form__input input" type="tel" id="phone" name="phone" data-phone>
							</div>
							<div class="register-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="email">E-mailem</label> 
								</div>
<input class="register-form__input input" type="email" id="email" name="email" required>
							</div>
							<div class="register-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="password">Heslo</label> 
								</div>
<input class="register-form__input input" type="password" id="password" name="password" required data-min="6" >
							</div>
							
						</div>
					</div>
					
					<div class="register-form__section">
						<div class="register-form__row">
							<div class="register-form__column">
<button class="help-form__btn btn btn_d btn_fw" type="submit">ZAREGISTRUJTE SE ZDARMA</button> 
							</div>
							<div class="register-form__column form-message">
							</div>
						</div>
					</div>
					<div class="register-form__section register-form__section_last">
						<div class="register-form__row register-form__row_1">
							<div class="register-form__column">
								<p class="register-form__sub-text">Máte již účet? <a class="register-form__sub-link" href="<?=$language_suffix?>sign-in.php">Přihlásit se</a></p>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>