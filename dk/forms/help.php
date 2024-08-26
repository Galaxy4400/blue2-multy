<section class="block-22">
	<div class="block-22__container _container">
		<div class="block-22__body">
			<div class="block-22__column block-22__column_image">
				<div class="block-22__content">
					<h2 class="block-22__title">Hvordan kan vi hjælpe?</h2>
					<div class="block-22__footer">
						<figure class="block-22__image">
<img src="<?=$dir_prefix?>assets/img/deco/11.webp" alt="Deco">
						</figure>
					</div>
				</div>
			</div>
			<div class="block-22__column block-22__column_form">
				<form class="help-form" name="help-form" action="/reg/send2.php" method="post" data-form data-send="ajax" data-validation data-after="helpFormAfterSubmit" data-autocomplete-off>
					<div class="help-form__section">
						<div class="help-form__row">
							<div class="help-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="name">Navn</label> 
								</div>
<input class="help-form__input input" id="name" type="text" name="name" required>
							</div>
							<div class="help-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="email">E-mail</label> 
								</div>
<input class="help-form__input input" id="email" type="email" name="email" required>
							</div>
						</div>
						<div class="help-form__row help-form__row_1">
							<div class="help-form__column">
								<div class="help-form__label-title">
<label class="help-form__label" for="message">Beskriv problemet</label> 
								</div>
<textarea class="help-form__input input" id="message" name="message" required>
</textarea>
							</div>
						</div>
						<!-- <div class="help-form__row help-form__row_1">
						<div class="help-form__column">
							<input type="file" name="file" data-file data-min="1">
						</div>
					</div> -->
					</div>
					<div class="help-form__section">
						<div class="help-form__row">
							<div class="help-form__column">
<button class="help-form__btn btn btn_d btn_fw" type="submit">Sende</button> 
							</div>
							<div class="form__column form-message">
							</div>
						</div>
						<div class="help-form__row help-form__row_1">
							<p class="help-form__sub-text">Ved at indtaste dine personlige oplysninger her og trykke på knappen accepterer du webstedets privatlivspolitik og vilkår og betingelser.</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>