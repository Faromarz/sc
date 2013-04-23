<h1>Nieuwsbrief Aanmelding</h1>
<div>
    <?= App::get_content('nieuwsbrief') ?>
</div>
<div id="nl-signup">
        <h3>Aanmelden voor de nieuwsbrief</h3>
        <div class="form-item">
            <label>Naam</label>
            <input type="text" id="nl_name" placeholder="Naam" />
        </div>
        <div class="form-item">
            <label>Plaats</label>
            <input type="text" id="nl_city" placeholder="Plaats" />
        </div>
        <div class="form-item">
            <label>Email</label>
            <input type="text" id="nl_email" placeholder="E-mail" />
        </div>
        <div class="form-item">
            <a href="#" class="btn btn-primary" id="newsletter-submit">Aanmelden</a>
        </div>
    </div>