<div class="courriel">
    <h2>
        Par Courriel
    </h2>
    <p>
        {{HTML::mailto($contact[0]->courrielgeneral, $contact[0]->courrielgeneral)}}
    </p>
    <p>
        {{HTML::mailto($contact[0]->courrielguy, $contact[0]->courrielguy)}}
    </p>
    <p>
        {{HTML::mailto($contact[0]->courrieldenise, $contact[0]->courrieldenise)}}
    </p>
</div>
<div class="telephone">
    <h2>
        Par Téléphone
    </h2>
    <h3>
        Numéro
    </h3>
    <p>
        {{$contact[0]->telephone}}
    </p>
    <h3>
        Numéro sans frais
    </h3>
    <p>
        {{$contact[0]->sansfrais}}
    </p>
</div>  