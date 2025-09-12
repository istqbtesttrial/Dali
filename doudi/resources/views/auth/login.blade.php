<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion — EFC</title>
  <style>
    :root {
      --sky-50: #f0f9ff; --sky-100: #e0f2fe; --sky-200: #bae6fd; --sky-300: #7dd3fc;
      --sky-400: #38bdf8; --sky-500: #0ea5e9; --sky-600: #0284c7;
      --text-900: #0f172a; --text-700: #334155; --text-500: #6b7280; --white: #ffffff; --ring: rgba(14,165,233,.35);
    }
    *{box-sizing:border-box} html,body{height:100%;margin:0;font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;color:var(--text-900);background:linear-gradient(135deg,var(--sky-50),var(--sky-100));}
    .auth-wrap{min-height:100dvh;display:grid;place-items:center;padding:3rem 1rem}
    .card{width:100%;max-width:980px;background:var(--white);border-radius:24px;box-shadow:0 10px 30px rgba(2,132,199,.15);overflow:hidden;display:grid;grid-template-columns:1.2fr 1fr}
    .card-visual{position:relative;padding:48px;background:radial-gradient(1200px 400px at -10% -20%,var(--sky-300),transparent),radial-gradient(800px 260px at 120% 120%,var(--sky-200),transparent),linear-gradient(135deg,var(--sky-100),var(--sky-50));}
    .brand{display:inline-flex;align-items:center;gap:10px;font-weight:800;font-size:1.25rem;color:var(--sky-700)}
    .hero{margin-top:60px}
    .hero h1{font-size:clamp(28px,3.4vw,42px);line-height:1.1;margin:0 0 14px}
    .hero p{color:var(--text-700);margin:0;font-size:1.05rem}
    .bullets{margin-top:28px;display:grid;gap:12px}
    .bullets li{display:flex;gap:10px;align-items:center;color:var(--text-700)}
    .illustration{position:absolute;inset:auto 0 0 0;height:180px;pointer-events:none;background:linear-gradient(180deg,rgba(56,189,248,.18),rgba(56,189,248,0))}
    .card-form{padding:40px 36px;display:grid;align-content:center;gap:22px}
    .form-title{margin:0;font-size:1.75rem}
    .subtext{color:var(--text-500);margin-top:-6px}
    form{display:grid;gap:16px}
    .label{font-weight:600;font-size:.95rem}
    .input{width:100%;padding:12px 14px;border:1px solid #e5e7eb;border-radius:12px;outline:none;transition:border .2s,box-shadow .2s,transform .02s;background:#fff}
    .input:focus{border-color:var(--sky-400);box-shadow:0 0 0 4px var(--ring)}
    .password-wrap{position:relative}
    .toggle-btn{position:absolute;top:50%;right:10px;transform:translateY(-50%);border:0;background:transparent;cursor:pointer}
    .btn{padding:12px 16px;border-radius:12px;font-weight:700;cursor:pointer}
    .btn-primary{background:linear-gradient(180deg,var(--sky-400),var(--sky-500));color:#fff;border:none}
    .footer-note{color:var(--text-500);font-size:.9rem;text-align:center}
    @media(max-width:900px){.card{grid-template-columns:1fr;max-width:540px}.card-visual{display:none}}
  </style>
</head>
<body>
  <main class="auth-wrap">
    <section class="card">
      <aside class="card-visual">
        <div class="brand">📘 SkyLearn</div>
        <div class="hero">
          <h1>Apprenez à votre rythme</h1>
          <p>Rejoignez des milliers d'apprenants et débloquez des cours interactifs.</p>
          <ul class="bullets">
            <li>✔ Progrès sauvegardés</li>
            <li>✔ Certificats partageables</li>
            <li>✔ Interface moderne</li>
          </ul>
        </div>
        <div class="illustration"></div>
      </aside>
      <div class="card-form">
        <h2 class="form-title">Connexion</h2>
        <p class="subtext">Ravi de vous revoir !</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <label class="label">Email</label>
            <input class="input @error('email') is-invalid @enderror" 
                   type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   placeholder="nom@exemple.com" 
                   required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <!-- Password -->
            <label class="label">Mot de passe</label>
            <div class="password-wrap">
                <input class="input @error('password') is-invalid @enderror" 
                       type="password" 
                       name="password" 
                       id="password" 
                       placeholder="••••••••" 
                       required>
                <button class="toggle-btn" type="button" onclick="togglePassword()">👁</button>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <!-- Submit -->
            <button class="btn btn-primary mt-3" type="submit">{{ __('Se connecter') }}</button>

            <!-- Links -->
            <p class="footer-note mt-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                @endif
                <br>
                Nouveau ? <a href="{{ route('register') }}">Créer un compte</a>
            </p>
        </form>
      </div>
    </section>
  </main>
  <script>
    function togglePassword(){
      const pwd=document.getElementById('password');
      pwd.type=pwd.type==='password'?'text':'password';
    }
  </script>
</body>
</html>
