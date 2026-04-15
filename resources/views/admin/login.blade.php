@extends('layouts.site')

@section('title', 'Admin Login | Vexsonic')

@section('content')
<div class="page-shell" style="display: flex; align-items: center; justify-content: center; min-height: 100vh;">
    <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h2 style="font-family: var(--font-display); font-size: 2rem; margin-bottom: 20px; color: #17367c; text-align: center;">Vexsonic Admin</h2>
        
        <form method="POST" action="{{ route('login') }}" style="display: grid; gap: 16px;">
            @csrf
            
            <label class="field">
                <span>Email Address</span>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid #ccc;">
                @error('email')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </label>

            <label class="field">
                <span>Password</span>
                <input type="password" name="password" required style="width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid #ccc;">
            </label>

            <button type="submit" class="submit-button" style="margin-top: 10px; width: 100%; background: #17367c; color: white; padding: 14px; border: none; border-radius: 12px; font-weight: bold; cursor: pointer;">
                Login to Dashboard
            </button>
        </form>
    </div>
</div>
@endsection
