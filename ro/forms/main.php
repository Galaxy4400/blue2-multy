<form class="main-form__form form form_main _loading" name="form" method="post" action="/reg/send.php<?= isset($_GET['test']) ? '?test=' . urlencode($_GET['test']) : '' ?>" data-form data-send="ajax" data-validation data-after="mainFormAfterSubmit" data-autocomplete-off>
<input type="hidden" name="id" value="m<?= ++$main_form_counter ?>">
<input type="hidden" name="country" value="<?= $country ?>">
<input type="hidden" name="subid" value="<?= $subid ?>">
<input type="hidden" name="offer_name" value="<?= $offer_name ?>">
<input type="hidden" name="language" value="<?= $language ?>">

	<div class="form__section">
		<div class="form__row">
			<div class="form__column">
				<div class="form__label-title">
<label class="form__label" for="first_name">Prenume</label> 
				</div>
<input class="form__input input" type="text" id="first_name" name="first_name" required>
			</div>
			<div class="form__column">
				<div class="form__label-title">
<label class="form__label" for="first_name">Nume de familie</label> 
				</div>
<input class="form__input input" type="text" id="last_name" name="last_name" required>
			</div>
			<div class="form__column">
				<div class="form__label-title">
<label class="form__label" for="first_name">E-mailul</label> 
				</div>
<input class="form__input input" type="email" id="email" name="email" required>
			</div>
			<div class="form__column">
				<div class="form__label-title">
<label class="form__label" for="first_name">Telefonul</label> 
				</div>
<input class="form__input input" type="tel" id="phone" name="phone" data-phone>
			</div>
			<div class="form__column">
<button class="form__btn btn btn_fw" type="submit">ÎNREGISTREAZĂ-TE GRATUIT</button> 
			</div>
			<div class="form__column form-message">
			</div>
		</div>
	</div>
</form>
<div class="main-form__footer">
	<p>Prin introducerea informațiilor dvs. personale aici și apăsând butonul, sunteți de acord cu politica de confidențialitate și termenii și condițiile site-ului web.</p>
</div>