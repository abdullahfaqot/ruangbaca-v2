<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        // Mendapatkan peran (role) pengguna saat ini
        $userRole = auth()->user()->role; // Ganti dengan cara Anda mendapatkan role

        // Menentukan URL yang sesuai berdasarkan peran pengguna
        switch ($userRole) {
            case 'owner':
                return '/dashboard';
            case 'sekolah':
                return '/dashboard-sekolah';
            default:
                return '/'; // Jika peran tidak dikenali, arahkan ke URL beranda
        }
    }
}
