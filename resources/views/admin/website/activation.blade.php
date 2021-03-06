@extends('template/admin/main')

@section('title', 'Aktivasi Website')

@section('content')

<div class="content">
    <div class="bg-white rounded-3 shadow-sm py-3 px-4 mb-4">
        <h5>Aktivasi Website</h5>
        <form method="post" action="/admin/website/activate">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $website->id_website }}">
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Domain</label>
                <div class="col-md-10">
                    <input type="text" name="website_url" class="form-control {{ $errors->has('website_url') ? 'border-danger' : '' }}" value="{{ $website->website_url }}" readonly>
                    @if($errors->has('website_url'))
                    <div class="small text-danger">{{ ucfirst($errors->first('website_url')) }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        <p class="h5">Peringatan!</p>
                        <p>Dengan menekan tombol <strong>Aktivasi</strong>, berarti domain akan benar-benar dapat menggunakan LMS dari Campusnet. Sistem juga akan otomatis meng-generate API Key untuk website ini.
                        <p><button type="submit" class="btn btn-theme-1">Aktivasi</button></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
  
@endsection