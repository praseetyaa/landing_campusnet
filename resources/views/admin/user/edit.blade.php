@extends('template/admin/main')

@section('title', 'Edit User')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb rounded-3 px-4">
        <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-tachometer-alt"></i></a></li>
        <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
    </ol>
</nav>
<div class="content">
    <div class="card border-0 rounded-3 shadow-sm mb-4">
        <div class="card-header bg-theme-1 rounded-3 shadow border-0 d-flex justify-content-between align-items-center">
            <h5 class="my-2">Edit Pengguna</h5>
        </div>
        <div class="card-body">
        <form method="post" action="/admin/user/update">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id_user }}">
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <div class="col-md-10">
                    <input type="text" name="nama_user" class="form-control {{ $errors->has('nama_user') ? 'border-danger' : '' }}" value="{{ $user->nama_user }}" placeholder="Masukkan Nama User">
                    @if($errors->has('nama_user'))
                    <div class="small text-danger">{{ ucfirst($errors->first('nama_user')) }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Email <span class="text-danger">*</span></label>
                <div class="col-md-10">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'border-danger' : '' }}" value="{{ $user->email }}" placeholder="Masukkan Email">
                    @if($errors->has('email'))
                    <div class="small text-danger">{{ ucfirst($errors->first('email')) }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Nomor HP <span class="text-danger">*</span></label>
                <div class="col-md-10">
                    <input type="text" name="nomor_hp" class="form-control number-only {{ $errors->has('nomor_hp') ? 'border-danger' : '' }}" value="{{ $user->nomor_hp }}" placeholder="Masukkan Nomor HP">
                    @if($errors->has('nomor_hp'))
                    <div class="small text-danger">{{ ucfirst($errors->first('nomor_hp')) }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Username <span class="text-danger">*</span></label>
                <div class="col-md-10">
                    <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'border-danger' : '' }}" value="{{ $user->username }}" placeholder="Masukkan Username">
                    @if($errors->has('username'))
                    <div class="small text-danger">{{ ucfirst($errors->first('username')) }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Password <span class="text-danger">*</span></label>
                <div class="col-md-10">
                    <div class="input-group">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}" placeholder="Masukkan Password">
                        <div class="input-group-append">
                            <a href="#" class="btn btn-toggle-password border-0 btn-theme-1 {{ $errors->has('password') ? 'border-danger' : 'btn-outline-secondary' }}"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="small text-muted">Kosongi saja jika tidak ingin mengganti password.</div>
                    @if($errors->has('password'))
                    <div class="small text-danger">{{ ucfirst($errors->first('password')) }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label"></label>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-theme-1 px-3 rounded-3">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
  
@endsection

@section('js-extra')

<script>
    // Button toggle password
    $(document).on("click", ".btn-toggle-password", function(e){
        e.preventDefault();
        if(!$(this).hasClass("show")){
            $(this).parents(".input-group").find("input").attr("type","text");
            $(this).find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
            $(this).addClass("show");
        }
        else{
            $(this).parents(".input-group").find("input").attr("type","password");
            $(this).find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
            $(this).removeClass("show");
        }
    });

    // Input Hanya Nomor
    $(document).on("keypress", ".number-only", function(e){
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode >= 48 && charCode <= 57) { 
            // 0-9 only
            return true;
        }
        else{
            return false;
        }
    });
</script>

@endsection