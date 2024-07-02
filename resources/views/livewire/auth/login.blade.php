<div>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-4">
                    <div class="login-brand">
                        <x-logo />
                    </div>
                
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Masuk ke Akun Anda</h4>
                        </div>

                        <div class="card-body">
                            <form wire:submit.prevent='authenticate' class="needs-validation">
                                <div class="form-group">
                                    <x-inputs.text required label="email" name="email" wire:model.defer='email' />
                                </div>

                                <div class="form-group">
                                    <x-inputs.password required label="password" name="password"
                                        wire:model.defer='password' />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        <span wire:loading.remove>Masuk</span> <span wire:loading>Loading...</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if (env('APP_DEMO'))
                        <div class="alert alert-info">
                            <div class="alert-title">Demo Super Admin</div>
                            <ul class="pl-3">
                                <li>Email: admin@domain.com</li>
                                <li>Password: secret</li>
                            </ul>

                            <div class="alert-title">Demo Operator</div>
                            <ul class="pl-3">
                                <li>Email: operator@domain.com</li>
                                <li>Password: secret</li>
                            </ul>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </section>
</div>
