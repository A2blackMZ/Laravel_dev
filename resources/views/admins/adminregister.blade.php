<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte | Administrateur</title>
    <link rel="stylesheet" href="{{asset('scss/model.css')}}">
</head>
<body>
    <div class="container">
        <div class="signup-box">
            <h2>CRÉATION DE COMPTE</h2>
            <form method="post" action="{{route('admin.store')}}">
            @csrf
            @method('post')
                <div class="conteneur">
                    <div class="form-group">
                        <input type="text" name="hotel_name" id="nom" class="input   form-control @error('nom_entreprise') is-invalid @enderror" value="{{ old('nom_entreprise') }}">
                        @error('nom_entreprise')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder">Hotel name <span class="required">*</span></label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" id="prenom" class="input form-control @error('nom_recruteur') is-invalid @enderror" value="{{ old('nom_recruteur') }}">
                        @error('nom_recruteur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder2">Lastname <span class="required">*</span></label>
                    </div>
                </div>
                <div class="conteneur">
                    <div class="form-group">
                        <input type="text" name="username" id="nom" class="input form-control @error('prenom_recruteur') is-invalid @enderror" value="{{ old('prenom_recruteur') }}">
                        @error('prenom_recruteur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder">Username <span class="required">*</span></label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="prenom" class="input form-control @error('email_recruteur') is-invalid @enderror" value="{{ old('email_recruteur') }}">
                        @error('email_recruteur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder2">Email <span class="required">*</span></label>
                    </div>
                </div>
                <div class="conteneur">
                    <div class="form-group">
                        <input type="text" name="tel" id="nom" class="input form-control @error('tel_recruteur') is-invalid @enderror" value="{{ old('tel_recruteur') }}">
                        @error('tel_recruteur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder">Téléphone <span class="required">*</span></label>
                    </div>
                    <div class="form-group">
                        <select name="poste" id="prenom" class="input form-control @error('poste_recruteur') is-invalid @enderror" value="{{ old('poste_recruteur') }}">
                            <option value="" selected disabled></option> <!-- Option de placeholder -->
                            <option value="Administrateur">Administrateur</option>
                            <option value="Focal">Focal</option>
                        </select>
                        @error('poste')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder2">Poste <span class="required">*</span></label>
                    </div>
                </div>
                <div class="conteneur">
                    <div class="form-group">
                        <input type="text" name="adresse" id="nom" class="input form-control @error('adresse_entreprise') is-invalid @enderror" value="{{ old('adresse_entreprise') }}">
                        @error('adresse_entreprise')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder">Adresse <span class="required">*</span></label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ville" id="prenom" class="input form-control @error('secteur_activite') is-invalid @enderror" value="{{ old('secteur_activite') }}">
                        @error('secteur_activite')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder2">Ville <span class="required">*</span></label>
                    </div>
                </div>
                <div class="conteneur">
                    <div class="form-group">
                        <input type="text" name="password" id="nom" class="input form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder">Mot de passe <span class="required">*</span></label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="password_confirmation" id="prenom" class="input form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label class="placeholder2">Confirmer le mot de passe <span class="required">*</span></label>
                    </div>
                </div>
                <button type="submit">CRÉER MON COMPTE</button>
            </form>
        </div>
    </div>
</body>
<script src="{{asset('js/create.js')}}"></script>
</html>
