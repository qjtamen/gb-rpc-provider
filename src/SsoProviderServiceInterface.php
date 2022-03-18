<?php
/**
 * SsoProviderServiceInterface.php
 *
 * @Author  Zhy
 * @DateTime  2022/3/18/14:13
 */

namespace GbService\Provider;

interface SsoProviderServiceInterface
{
    /**
     * 判断用户是否已登录
     * @param string $code 用户sessionId
     * @return string 0未登录1已登录
     */
    public function isUserLogin($code = ''): string;

    /**
     * 通过token获取用户信息
     * @return string
     */
    public function getUserInfo(): string;

    /**
     * 添加用户账号
     * @param array $userInfo 用户信息
     */
    public function addUserAccount($userInfo = []): string;
}
