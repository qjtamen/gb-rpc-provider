<?php
/**
 * ProviderServiceInterface.php
 *
 * @Author  Zhy
 * @DateTime  2021/12/31/9:28
 */

namespace GbService\Provider;


interface ProviderServiceInterface
{
    /**
     * 新增一条数据
     * @param string $BZKMC 标准库名称
     * @param int $ID 记录ID
     * @return false|string
     */
    public function addRecord(string $BZKMC, int $ID): string;

    /**
     * 获取数据列表
     * @param string $BZKMC
     * @param int $ID
     * @return object
     */
    public function getRecordList(string $BZKMC, int $ID): object;

    /**
     * 获取单条数据
     * @param string $BZKMC
     * @param int $ID
     * @return false|string
     */
    public function getRecord(string $BZKMC, int $ID): string;

    /**
     * 编辑单条数据
     * @param string $BZKMC
     * @param int $ID
     * @return false|string
     */
    public function editRecord(string $BZKMC, int $ID): string;

    /**
     * 删除单条数据（伪）
     * @param string $BZKMC
     * @param int $ID
     * @return false|string
     */
    public function deleteRecord(string $BZKMC, int $ID): string;

    /**
     * 新增配置
     * @return int
     */
    public function addConfig(): int;

    /**
     * 编辑配置
     * @return int
     */
    public function editConfig(): int;

    /**
     * 删除配置
     * @return int
     */
    public function deleteConfig(): int;
}