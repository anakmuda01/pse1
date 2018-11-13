@extends('layouts.app')

@section('content')
<div class="container full-layar">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verivikasi Alamat Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verivikasi baru telah dikirim ke email anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, silahkan periksa email anda terlebih dahulu untuk verifikasi akun.') }}
                    {{ __('jika anda tidak menerima email pemberitahuan') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini untuk permintaan kirim ulang') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
