<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div>

                                </div>
                                     <div class="card-header text-success "><h3 class="text-center font-weight-light my-2">Create Account</h3>

                                     </div>
                                    <div class="card-body">
                                    @if (session('success'))
                                      <h5 class="text-success justify-text-center">{{session('success')}}</h5>
                                     @endif

                                        <form wire:click='create' method="post">
                                        @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class=" mb-3 mb-md-0">
                                                     <label for="inputFirstName">First name</label>
                                                        <input wire:model='fname' class="form-control @error('email')  is-invalid @enderror" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                      <div>
                                                        @error('fname')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror

                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <label for="inputLastName">Last name</label>
                                                          <input wire:model.live='lname' class="form-control @error('email')  is-invalid @enderror" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                          @error('lname')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror

                                                    </div>
                                            </div>
                                            <div class="mb-3">
                                            <label for="inputEmail">Email address</label>
                                                <input wire:model.live='email' class="form-control @error('email')  is-invalid @enderror" id="inputEmail" type="email"placeholder="name@example.com"  />
                                                @error('email')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror

                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class=" mb-3 mb-md-0">
                                                    <label for="inputPassword">Password</label>
                                                        <input wire:model.live='password' class="form-control @error('email')  is-invalid @enderror" id="inputPassword" type="password" placeholder="Create a password" required />
                                                        @error('password')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                        <input wire:model.live='cpassword' class="form-control @error('email')  is-invalid @enderror" id="inputPasswordConfirm" type="password" placeholder="Confirm password" required/>
                                                        @error('cpassword')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a wire:click='create' class="btn btn-primary btn-block" href="#">Create Account</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-2">
                                        <div class="small"><a href="{{url('/login')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
