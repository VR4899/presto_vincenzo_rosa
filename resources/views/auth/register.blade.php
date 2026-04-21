<x-layout title="Registrati">
  

    <div class="container min-vh-100 d-flex align-items-center justify-content-center py-4 heigt-custom">
        <div class="col-12 col-sm-10 col-md-6 col-lg-4">
            
            <div class="card shadow-lg border-0 rounded-4 p-4 p-md-5 bg-white">
                
                <h2 class="text-center mb-2 fw-bold">Benvenuto </h2>
                <p class="text-center text-muted mb-4">Accedi al tuo account</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                     {{-- NOME --}}
                    <div class="mb-3">
                        <label class="form-label small text-muted">Nome</label>
                        <input 
                            id="name"
                            type="name" 
                            name="name" 
                            class="form-control form-control-lg rounded-3"
                            placeholder="inserisci il tuo nome"  
                        >
                    </div>


                    {{-- EMAIL --}}
                    <div class="mb-3">
                        <label class="form-label small text-muted">Email</label>
                        <input 
                            id="email"
                            type="email" 
                            name="email" 
                            class="form-control form-control-lg rounded-3"
                            placeholder="esempio@email.com"  
                        >
                    </div>

                    {{-- PASSWORD --}}
                    <div class="mb-2">
                        <label class="form-label small text-muted">Password</label>
                        <input 
                            id="password"
                            type="password" 
                            name="password" 
                            class="form-control form-control-lg rounded-3"
                            placeholder="••••••••"
                        >
                    </div>
                     {{-- PASSWORD CONFIRMATION --}}
                    <div class="mb-2">
                        <label class="form-label small text-muted">Conferma Password:</label>
                        <input 
                            id="password_confirmation"
                            type="password" 
                            name="password_confirmation" 
                            class="form-control form-control-lg rounded-3"
                            placeholder="reinserisci la password"
                        >
                    </div>

                   

                    {{-- BUTTON --}}
                    <button 
                        type="submit"
                        class="btn btn-primary w-100 rounded-3 fw-bold py-2" 
                    >
                        Registrati
                    </button>

                </form>

                {{-- DIVISORE --}}
                <div class="text-center my-4">
                    <small class="text-muted">oppure</small>
                </div>

                {{-- REGISTER --}}
                <div class="text-center">
                    <p class="mb-2 text-muted">Hai già un account?</p>
                    <a href="{{ route('login') }}" class="btn btn-outline-dark w-100 rounded-3">
                        Accedi
                    </a>
                </div>

            </div>

        </div>
    </div>


</x-layout>