<section class="block-25">
	<div class="block-25__container _container">
		<div class="block-25__body">
			<div class="block-25__column block-25__column_image">
				<div class="block-25__content">
					<h2 class="block-25__title">Passwort vergessen</h2>
					<p class="block-25__text">Kein Grund zur Sorge! Geben Sie unten Ihre E-Mail-Adresse ein und wir senden Ihnen einen Code zum Zurücksetzen des Passworts zu.</p>
				</div>
			</div>
			<div class="block-25__column block-25__column_form">
				<form class="forgot-form"
					name="forgot" 
					action="./" 
					method="post" 
					data-form 
					data-send="test"
					data-validation 
					data-after="forgotFormAfterSubmit"
					data-autocomplete-off
				>
					<div class="forgot-form__section">
						<div class="forgot-form__row forgot-form__row_1">
							<div class="help-form__column">
								<div class="help-form__label-title">
									<label class="help-form__label" for="email">Email</label> 
								</div>
								<input class="forgot-form__input input" type="email" name="email" required>
							</div>
						</div>
					</div>
					<div class="forgot-form__section">
						<div class="forgot-form__row forgot-form__row_2">
							<div class="forgot-form__column">
								<button class="help-form__btn btn btn_d btn_fw" type="submit">Ein Konto erstellen</button>
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