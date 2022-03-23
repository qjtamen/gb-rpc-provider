<?php
/**
 * BaseServiceInterface.php
 *
 * @Author  Zhy
 * @DateTime  2022/3/23/10:31
 */

namespace GbService\Provider;

interface BaseServiceInterface
{
    /**
     * 数据校验入库审核
     * @param string $jsonArr JSON数据
     * @param int $dataType 数据类型 0教师1学生2组织机构
     * @param int $appId 应用ID
     * @param string $appKey 应用KEY
     * @return object\string
     */
    public function addBaseInfo(string $jsonArr, int $dataType = 0, int $appId, string $appKey): string;

    /**
     * 数据校验更新审核
     * @param string $jsonArr JSON数据
     * @param int $dataType 数据类型 0教师1学生2组织机构
     * @param int $appId 应用ID
     * @param string $appKey 应用KEY
     * @return object\string
     */
    public function updateBaseInfo(string $jsonArr, int $dataType = 0, int $appId, string $appKey): string;
}