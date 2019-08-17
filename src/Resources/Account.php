<?php

namespace GoGetSSL\Resources;

use GoGetSSL\Resources\Abstracts\BaseResource;

class Account extends BaseResource
{
    /**
     * Auth
     * @link https://github.com/gogetssl/api/wiki/Auth
     *
     * @param string $user
     * @param string $pass
     * @return \GoGetSSL\Response\AuthResponse
     */
    public function auth($user, $pass)
    {
        return $this->request('POST', '/auth/', $this->vars(compact(['user', 'pass',])));
    }

    /**
     * getAccountBalance
     * The getAccountBalance method returns available funds for partner account.
     * @link https://github.com/gogetssl/api/wiki/getAccountBalance
     *
     * @return \GoGetSSL\Response\GetAccountBalanceResponse
     */
    public function getAccountBalance()
    {
        return $this->request('GET', '/account/balance/');
    }
}

