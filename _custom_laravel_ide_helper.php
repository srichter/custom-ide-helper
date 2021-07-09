<?php

namespace Illuminate\Contracts\Auth {
    interface Guard
    {
        /**
         * Get the currently authenticated user.
         *
         * @return \App\Models\User|null
         */
        public function user();

        /**
         * Log the user out of the application.
         *
         * @return void
         */
        public function logout();
    }
}

namespace Illuminate\Session {
    /**
     * @mixin \Illuminate\Session\Store
     */
    class SessionManager
    {

    }
}
