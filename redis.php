<?php

class MRedis
{

    private $redis;

    /**
     * 构造函数
     *
     * @param string $host 主机号
     * @param int $port 端口号
     */
    public function __construct($host = 'redis', $port = 6379)
    {
        $this->redis = new redis();
        $this->redis->connect($host, $port);
    }

    public function expire($key = null, $time = 0)
    {
        return $this->redis->expire($key, $time);
    }
    public function psubscribe($patterns = array(), $callback)
    {
        $this->redis->psubscribe($patterns, $callback);
    }

    public function setOption()
    {
        $this->redis->setOption(Redis::OPT_READ_TIMEOUT, -1);
    }
}
function callback($redis, $pattern, $chan, $msg)
{
    // 回调函数,这里写处理逻辑
    echo "Pattern: $pattern\n";
    echo "Channel: $chan\n";
    echo "Payload: $msg\n";
}

$redis = new MRedis();
//这里输入订阅，以及订阅成功后触发的函数名
$redis->setOption();
$redis->psubscribe(array('__keyevent@0__:expired'), 'callback');


?>
