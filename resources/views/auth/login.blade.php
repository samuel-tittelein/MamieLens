<x-guest-layout>
    <div class="wrap">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="login-form" action="{{route('login')}}" method="post">
    @csrf
    <div class="form-header">
        <h3>Connexion</h3>
        <p>Accès au tableau de bord</p>
    </div>
    <!--Email Input-->
    <div class="form-group">
        <input type="text" name="email" class="form-input" placeholder="email@example.com">
    </div>
    <!--Password Input-->
    <div class="form-group">
        <input type="password" name="password" class="form-input" placeholder="password">
    </div>
    <!--Remember Me Checkbox-->
    <div class="form-group">
        <input type="checkbox" id="remember-me" name="remember">
        <label for="remember-me">Remember Me</label>
    </div>
    <!--Guest Button-->
    <div class="form-group">
        <button class="form-button" type="submit">Login</button>
    </div>
    <div class="form-footer">
        Vous n'avez pas de compte ? <a href="{{route('register')}}">Enregistrement</a>
    </div>
    </form>
    </div><!--/.wrap-->
</x-guest-layout>
