
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-3 rounded-lg mt-5">
                                    <div class="card-header text-success"><h3 class="text-center font-weight-light my-2">Login</h3></div>
                                    <div class="card-body">
                                    <div>
                                       @if (session('status'))
                                       <span class="text-success">{{session('status')}}</span>

                                       @endif
                                    </div>
                                        <form wire:click='login' method="post">
                                        @csrf
                                            <div class=" mb-3">
                                                <label for="inputEmail" class="form-lable">Email address</label><i class="fa fa-user float-end"></i>
                                                <input wire:model.live='email' class="form-control @error('email')  is-invalid @enderror" id="inputEmail" type="email" />
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>

                                                @enderror

                                            </div>
                                            <div class=" mb-3">
                                                <label for="inputPassword" class="form-lable" >Password</label><i class="fa fa-lock float-end"></i>
                                                <input wire:model.live='password' class="form-control @error('email')  is-invalid @enderror" id="inputPassword" type="password"  />
                                                  @error('password')
                                                <span class="text-danger">{{$message}}</span>

                                                @enderror
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{url('/forgotpasswrd')}}">Forgot Password?</a>
                                                <a wire:click='login' class="btn btn-primary" href="{{url('/sidebar')}}">Login
                                                <span wire:loading class="spinner-border spinner-border-sm"></span>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-2">
                                        <div class="small"><a href="{{url('/register')}}">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

