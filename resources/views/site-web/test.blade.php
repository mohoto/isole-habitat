<form id="test" method="post" action="test-revenu">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-6">
            <p class="titre_input"><span>6-</span>Votre revenu fiscal de référence <a href="#" class="info-revenu"><i class="ion-ios7-help-outline" data-color="orange"></i></a> :</p>
            <div class="form-group">
                <input type="text" class="form-control" id="revenus_reference" name="telephone" maxlength="20" Placeholder="07">
            </div>
        </div>
        <div class="col-6">
            <p class="titre_input"><span>7-</span>Votre code postal:</p>
            <div class="form-group">
                <input type="text" class="form-control" name="code_postal" maxlength="5" Placeholder="Code postal">
            </div>
        </div>
        <input type="submit">
    </div>
</form>
