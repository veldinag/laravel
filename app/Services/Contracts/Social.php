<?php

declare(strict_types=1);

namespace App\Services\Contracts;

use Laravel\Socialite\Contracts\User as SocialUser;

interface Social
{
    /**
     * @return string
     */
    public function loginAndGetRedirectUrl(SocialUser $socialUser): string;

}
