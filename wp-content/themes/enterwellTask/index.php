<?php get_header();
print_r($_GET["pozdravee"]);
?>

<div id="success-alert" class="hidden-success">
    <img class="success-icon" src="wp-content/themes/enterwellTask/assets/success.svg">
    <p class="success-text">Uspješna prijava</p>
    <p class="success-subtext">Dok čekaš rezultate ovog zadatka opusti se uz neko dobro
    pivo! Kod nas u Enterwellu nema razloga za brigu</p>
    <button type="submit" class="ok-button" style="border: 0; background: transparent">
        <img id="success-img" src="wp-content/themes/enterwellTask/assets/ok-button.svg" style="cursor:pointer;">
    </button>
</div>
<div id="error-alert" class="hidden-error">
    <img class="error-icon" src="wp-content/themes/enterwellTask/assets/alert.svg">
    <p class="error-text">Neuspješna prijava</p>
    <p id="error-msg" class="error-subtext"></p>
    <button type="submit" class="error-button" style="border: 0; background: transparent">
        <img id="error-img" src="wp-content/themes/enterwellTask/assets/error-button.svg" style="cursor:pointer;">
    </button>
</div>
<div class="form">
    <p class="main-text">Prijava na Enterwell nagradnu igru</p>
    <p class="sub-text">U ovoj igri svi dobivamo. Ti ćeš izraditi ovu cool formu, a mi ćemo imati priliku vidjeti tvoje zlatne linije koda</p>

    <div class="inner-shadow-rectangle">
        <!-- svg -->
        <img src="wp-content/themes/enterwellTask/assets/i<3ew.svg" class="I-3-EW">
        <form id="form" enctype="multipart/form-data" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
            <div id="drop-area" class="dragdrop-rectangle">
                <!-- svg -->
                <img id="upload-icon" class="upload-icon" src="wp-content/themes/enterwellTask/assets/upload-icon.svg">
                <small id="pic_id"></small>
                <p id="upload-icon-text" class="drag-drop-file">Povuci i ispusti datoteku
                    kako bi započeo prijenos
                    <br><br> ili
                    <input type="file" id="fileElem" class="input-file" multiple accept="image/*" onchange="handleFiles(this.files)">
                    <label for="fileElem" class="text-style-1">Pretražite računalo</label>
                </p>
            </div>
            <div class="input1 regular-inputs">
                <input name="bill_number" class="input-text-shared input1-text validator" placeholder="Broj racuna*">
                <small id="small-bill_number" hidden="true" class="small-regular">*Obavezna ispuna polja</small>
            </div>

            <div class="divider"></div>

            <fieldset class="input2 legend-inputs">
                <legend class="name-placeholder placeholder-name">Ime*</legend>
                <input name="name" class="input-text-shared input2-text validator" placeholder="Ime*">
                <small id="small-name" hidden="true" class="small-legends">*Obavezna ispuna polja</small>
            </fieldset>


            <fieldset class="input3 legend-inputs">
                <legend class="placeholder placeholder-lastname">Prezime*</legend>
                <input name="lastname" class="input-text-shared input3-text validator" placeholder="Prezime*">
                <small id="small-lastname" hidden="true" class="small-legends">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input4 regular-inputs">
                <input name="address" class="input-text-shared input4-text validator" placeholder="Adresa*">
                <small id="small-address" hidden="true" class="small-regular">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input5 regular-inputs">
                <input name="house_number" class="input-text-shared input5-text validator" placeholder="Kućni broj*">
                <small id="small-house_number" hidden="true" class="small-regular">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input6 legend-inputs">
                <legend class="placeholder placeholder-place">Mjesto*</legend>
                <input name="place" class="input-text-shared input6-text validator" placeholder="Mjesto*">
                <small id="small-place" hidden="true" class="small-legends">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input7 regular-inputs">
                <input name="zip_code" class="input-text-shared input7-text validator" placeholder="Poštanski broj*">
                <small id="small-zip_code" hidden="true" class="small-regular">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input8 legend-inputs">
                <legend class="placeholder placeholder-countries">Država*</legend>
                <select class="input-text-shared input6-text validator flag-class" name="countries">
                    <option value="HR">🇭🇷&emsp;Hrvatska</option>
                    <option value="BIH">🇧🇦&emsp;BiH</option>
                    <option value="SLO">🇸🇮&emsp;Slovenija</option>
                    <option value="SR">🇷🇸&emsp;Srbija</option>
                </select>
                <img class="arrow-down" src="wp-content/themes/enterwellTask/assets/arrow-down.svg">
                <small id="small-countries" hidden="true" class="small-legends">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input9 regular-inputs">
                <input name="contact" type="text" class="input-text-shared input9-text validator" placeholder="Kontakt telefon*">
                <small id="small-contact" hidden="true" class="small-regular">*Obavezna ispuna polja</small>
            </fieldset>

            <fieldset class="input10 regular-inputs">
                <input name="email" type="email" class="input-text-shared input10-text validator" placeholder="Email*">
                <small id="small-email" hidden="true" class="small-regular">*Obavezna ispuna polja</small>
            </fieldset>

            <input type="hidden" name="action" value="enterwell_application_form">


            <button type="submit" class="submit-button" style="border: 0; background: transparent">
                <img src="wp-content/themes/enterwellTask/assets/button.svg" style="cursor:pointer;" alt="submit" />
            </button>
        </form>
    </div>
</div>


<?php
get_footer()
?>