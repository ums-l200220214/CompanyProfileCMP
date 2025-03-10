<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($user))
                    <form action="{{ url('admin/user/' . $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    @else
                        <form action="/admin/user" method="POST">
                @endif



                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Username" value="{{ isset($user) ? $user->name : old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email" value="{{ isset($user) ? $user->email : old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password"
                        class="form-control
                            @error('password') is-invalid @enderror"
                        placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="re_password"
                        class="form-control
                            @error('re_password') is-invalid @enderror"
                        placeholder="Password">
                    @error('re_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>
