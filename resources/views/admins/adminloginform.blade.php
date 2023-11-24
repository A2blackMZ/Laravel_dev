<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>CONNEXION</title>
      <link rel="stylesheet" href="{{asset('scss/connexion.css')}}">
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
      <div class="wrapper">
        <h1>Se Connecter</h1>
        <p></p>
        <form action="{{route('admin.connexion')}}" method="post">
        @csrf
        @method('post')
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Mot de passe">
          <button type="submit">Connexion</button>
        <div class="not-member">
          Vous n'avez pas de compte? <a href="#">S'inscrire</a>
        </div
        </form>
      </div>
    </body>
    </html>
</span>
