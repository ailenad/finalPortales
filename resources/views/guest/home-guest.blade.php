@include('navbar-guest')
 <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                        <h3 class="mb-0">Mi Perfil</h3>
                        <a href="{{ route('guest-profiles.edit', ['guest_profile' => $profile->id]) }}"class="m-2"><i class="bi bi-pencil "></i></a>
                        
                    </div>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset($profile->avatar) }}" alt="Avatar" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="mt-2">{{ $profile->first_name }} {{ $profile->last_name }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
 </div>

@include('footer')