<?php

namespace com\pv138\easyUnion\vip\request;

use com\pv138\easyUnion\vip\Osp\Base\OspStub;
use com\pv138\easyUnion\vip\Osp\Exception\OspException;
use com\pv138\easyUnion\vipOspException;

interface UnionUrlServiceIf
{
    public function genByGoodsId($goodsIdList, $chanTag, $requestId);

    public function genByGoodsIdWithOauth($goodsIdList, $chanTag, $requestId, $statParam);

    public function genByVIPUrl($urlList, $chanTag, $requestId);

    public function genByVIPUrlWithOauth($urlList, $chanTag, $requestId);

    public function healthCheck();

    public function vipLinkCheck(VipLinkCheckReq $vipLinkCheckReq);

    public function vipLinkCheckWithOuth(VipLinkCheckReq $vipLinkCheckReq);
}

class _UnionUrlServiceClient extends OspStub implements UnionUrlServiceIf
{
    public function __construct()
    {
        parent::__construct("com.vip.adp.api.open.service.UnionUrlService", "1.0.0");
    }

    public function genByGoodsId($goodsIdList, $chanTag, $requestId)
    {
        $this->send_genByGoodsId($goodsIdList, $chanTag, $requestId);
        return $this->recv_genByGoodsId();
    }

    public function send_genByGoodsId($goodsIdList, $chanTag, $requestId)
    {
        $this->initInvocation("genByGoodsId");
        $args = new UnionUrlService_genByGoodsId_args();

        $args->goodsIdList = $goodsIdList;

        $args->chanTag = $chanTag;

        $args->requestId = $requestId;

        $this->send_base($args);
    }

    public function recv_genByGoodsId()
    {
        $result = new UnionUrlService_genByGoodsId_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function genByGoodsIdWithOauth($goodsIdList, $chanTag, $requestId, $statParam)
    {
        $this->send_genByGoodsIdWithOauth($goodsIdList, $chanTag, $requestId, $statParam);
        return $this->recv_genByGoodsIdWithOauth();
    }

    public function send_genByGoodsIdWithOauth($goodsIdList, $chanTag, $requestId, $statParam)
    {
        $this->initInvocation("genByGoodsIdWithOauth");
        $args = new UnionUrlService_genByGoodsIdWithOauth_args();

        $args->goodsIdList = $goodsIdList;

        $args->chanTag = $chanTag;

        $args->requestId = $requestId;

        $args->statParam = $statParam;

        $this->send_base($args);
    }

    public function recv_genByGoodsIdWithOauth()
    {
        $result = new UnionUrlService_genByGoodsIdWithOauth_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function genByVIPUrl($urlList, $chanTag, $requestId)
    {
        $this->send_genByVIPUrl($urlList, $chanTag, $requestId);
        return $this->recv_genByVIPUrl();
    }

    public function send_genByVIPUrl($urlList, $chanTag, $requestId)
    {
        $this->initInvocation("genByVIPUrl");
        $args = new UnionUrlService_genByVIPUrl_args();

        $args->urlList = $urlList;

        $args->chanTag = $chanTag;

        $args->requestId = $requestId;

        $this->send_base($args);
    }

    public function recv_genByVIPUrl()
    {
        $result = new UnionUrlService_genByVIPUrl_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function genByVIPUrlWithOauth($urlList, $chanTag, $requestId)
    {
        $this->send_genByVIPUrlWithOauth($urlList, $chanTag, $requestId);
        return $this->recv_genByVIPUrlWithOauth();
    }

    public function send_genByVIPUrlWithOauth($urlList, $chanTag, $requestId)
    {
        $this->initInvocation("genByVIPUrlWithOauth");
        $args = new UnionUrlService_genByVIPUrlWithOauth_args();

        $args->urlList = $urlList;

        $args->chanTag = $chanTag;

        $args->requestId = $requestId;

        $this->send_base($args);
    }

    public function recv_genByVIPUrlWithOauth()
    {
        $result = new UnionUrlService_genByVIPUrlWithOauth_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function healthCheck()
    {
        $this->send_healthCheck();
        return $this->recv_healthCheck();
    }

    public function send_healthCheck()
    {
        $this->initInvocation("healthCheck");
        $args = new UnionUrlService_healthCheck_args();

        $this->send_base($args);
    }

    public function recv_healthCheck()
    {
        $result = new UnionUrlService_healthCheck_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function vipLinkCheck(VipLinkCheckReq $vipLinkCheckReq)
    {
        $this->send_vipLinkCheck($vipLinkCheckReq);
        return $this->recv_vipLinkCheck();
    }

    public function send_vipLinkCheck(VipLinkCheckReq $vipLinkCheckReq)
    {
        $this->initInvocation("vipLinkCheck");
        $args = new UnionUrlService_vipLinkCheck_args();

        $args->vipLinkCheckReq = $vipLinkCheckReq;

        $this->send_base($args);
    }

    public function recv_vipLinkCheck()
    {
        $result = new UnionUrlService_vipLinkCheck_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }


    public function vipLinkCheckWithOuth(VipLinkCheckReq $vipLinkCheckReq)
    {
        $this->send_vipLinkCheckWithOuth($vipLinkCheckReq);
        return $this->recv_vipLinkCheckWithOuth();
    }

    public function send_vipLinkCheckWithOuth(VipLinkCheckReq $vipLinkCheckReq)
    {
        $this->initInvocation("vipLinkCheckWithOuth");
        $args = new UnionUrlService_vipLinkCheckWithOuth_args();

        $args->vipLinkCheckReq = $vipLinkCheckReq;

        $this->send_base($args);
    }

    public function recv_vipLinkCheckWithOuth()
    {
        $result = new UnionUrlService_vipLinkCheckWithOuth_result();
        $this->receive_base($result);
        if ($result->success !== null) {
            return $result->success;
        }
    }
}


class UnionUrlService_genByGoodsId_args
{
    public static $_TSPEC;
    public $goodsIdList = null;
    public $chanTag = null;
    public $requestId = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'goodsIdList'
                ),
                2 => array(
                    'var' => 'chanTag'
                ),
                3 => array(
                    'var' => 'requestId'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['goodsIdList'])) {
                $this->goodsIdList = $vals['goodsIdList'];
            }


            if (isset($vals['chanTag'])) {
                $this->chanTag = $vals['chanTag'];
            }


            if (isset($vals['requestId'])) {
                $this->requestId = $vals['requestId'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->goodsIdList = array();
            $_size0 = 0;
            $input->readListBegin();
            while (true) {
                try {
                    $elem0 = null;
                    $input->readString($elem0);

                    $this->goodsIdList[$_size0++] = $elem0;
                } catch (\Exception $e) {
                    break;
                }
            }

            $input->readListEnd();
        }


        if (true) {
            $input->readString($this->chanTag);
        }


        if (true) {
            $input->readString($this->requestId);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldBegin('goodsIdList');

        if (!is_array($this->goodsIdList)) {
            throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
        }

        $output->writeListBegin();
        foreach ($this->goodsIdList as $iter0) {
            $xfer += $output->writeString($iter0);
        }

        $output->writeListEnd();

        $xfer += $output->writeFieldEnd();

        if ($this->chanTag !== null) {
            $xfer += $output->writeFieldBegin('chanTag');
            $xfer += $output->writeString($this->chanTag);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldBegin('requestId');
        $xfer += $output->writeString($this->requestId);

        $xfer += $output->writeFieldEnd();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByGoodsIdWithOauth_args
{
    public static $_TSPEC;
    public $goodsIdList = null;
    public $chanTag = null;
    public $requestId = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'goodsIdList'
                ),
                2 => array(
                    'var' => 'chanTag'
                ),
                3 => array(
                    'var' => 'requestId'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['goodsIdList'])) {
                $this->goodsIdList = $vals['goodsIdList'];
            }


            if (isset($vals['chanTag'])) {
                $this->chanTag = $vals['chanTag'];
            }


            if (isset($vals['requestId'])) {
                $this->requestId = $vals['requestId'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->goodsIdList = array();
            $_size0 = 0;
            $input->readListBegin();
            while (true) {
                try {
                    $elem0 = null;
                    $input->readString($elem0);

                    $this->goodsIdList[$_size0++] = $elem0;
                } catch (\Exception $e) {
                    break;
                }
            }

            $input->readListEnd();
        }


        if (true) {
            $input->readString($this->chanTag);
        }


        if (true) {
            $input->readString($this->requestId);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldBegin('goodsIdList');

        if (!is_array($this->goodsIdList)) {
            throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
        }

        $output->writeListBegin();
        foreach ($this->goodsIdList as $iter0) {
            $xfer += $output->writeString($iter0);
        }

        $output->writeListEnd();

        $xfer += $output->writeFieldEnd();

        if ($this->chanTag !== null) {
            $xfer += $output->writeFieldBegin('chanTag');
            $xfer += $output->writeString($this->chanTag);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldBegin('requestId');
        $xfer += $output->writeString($this->requestId);

        $xfer += $output->writeFieldEnd();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByVIPUrl_args
{
    public static $_TSPEC;
    public $urlList = null;
    public $chanTag = null;
    public $requestId = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'urlList'
                ),
                2 => array(
                    'var' => 'chanTag'
                ),
                3 => array(
                    'var' => 'requestId'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['urlList'])) {
                $this->urlList = $vals['urlList'];
            }


            if (isset($vals['chanTag'])) {
                $this->chanTag = $vals['chanTag'];
            }


            if (isset($vals['requestId'])) {
                $this->requestId = $vals['requestId'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->urlList = array();
            $_size0 = 0;
            $input->readListBegin();
            while (true) {
                try {
                    $elem0 = null;
                    $input->readString($elem0);

                    $this->urlList[$_size0++] = $elem0;
                } catch (\Exception $e) {
                    break;
                }
            }

            $input->readListEnd();
        }


        if (true) {
            $input->readString($this->chanTag);
        }


        if (true) {
            $input->readString($this->requestId);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldBegin('urlList');

        if (!is_array($this->urlList)) {
            throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
        }

        $output->writeListBegin();
        foreach ($this->urlList as $iter0) {
            $xfer += $output->writeString($iter0);
        }

        $output->writeListEnd();

        $xfer += $output->writeFieldEnd();

        if ($this->chanTag !== null) {
            $xfer += $output->writeFieldBegin('chanTag');
            $xfer += $output->writeString($this->chanTag);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldBegin('requestId');
        $xfer += $output->writeString($this->requestId);

        $xfer += $output->writeFieldEnd();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByVIPUrlWithOauth_args
{
    public static $_TSPEC;
    public $urlList = null;
    public $chanTag = null;
    public $requestId = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'urlList'
                ),
                2 => array(
                    'var' => 'chanTag'
                ),
                3 => array(
                    'var' => 'requestId'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['urlList'])) {
                $this->urlList = $vals['urlList'];
            }


            if (isset($vals['chanTag'])) {
                $this->chanTag = $vals['chanTag'];
            }


            if (isset($vals['requestId'])) {
                $this->requestId = $vals['requestId'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->urlList = array();
            $_size0 = 0;
            $input->readListBegin();
            while (true) {
                try {
                    $elem0 = null;
                    $input->readString($elem0);

                    $this->urlList[$_size0++] = $elem0;
                } catch (\Exception $e) {
                    break;
                }
            }

            $input->readListEnd();
        }


        if (true) {
            $input->readString($this->chanTag);
        }


        if (true) {
            $input->readString($this->requestId);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldBegin('urlList');

        if (!is_array($this->urlList)) {
            throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
        }

        $output->writeListBegin();
        foreach ($this->urlList as $iter0) {
            $xfer += $output->writeString($iter0);
        }

        $output->writeListEnd();

        $xfer += $output->writeFieldEnd();

        if ($this->chanTag !== null) {
            $xfer += $output->writeFieldBegin('chanTag');
            $xfer += $output->writeString($this->chanTag);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldBegin('requestId');
        $xfer += $output->writeString($this->requestId);

        $xfer += $output->writeFieldEnd();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_healthCheck_args
{
    public static $_TSPEC;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array();
        }

        if (is_array($vals)) {
        }
    }


    public function read($input)
    {
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_vipLinkCheck_args
{
    public static $_TSPEC;
    public $vipLinkCheckReq = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'vipLinkCheckReq'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['vipLinkCheckReq'])) {
                $this->vipLinkCheckReq = $vals['vipLinkCheckReq'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->vipLinkCheckReq = new VipLinkCheckReq();
            $this->vipLinkCheckReq->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldBegin('vipLinkCheckReq');

        if (!is_object($this->vipLinkCheckReq)) {
            throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
        }

        $xfer += $this->vipLinkCheckReq->write($output);

        $xfer += $output->writeFieldEnd();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_vipLinkCheckWithOuth_args
{
    public static $_TSPEC;
    public $vipLinkCheckReq = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'vipLinkCheckReq'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['vipLinkCheckReq'])) {
                $this->vipLinkCheckReq = $vals['vipLinkCheckReq'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->vipLinkCheckReq = new VipLinkCheckReq();
            $this->vipLinkCheckReq->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        $xfer += $output->writeFieldBegin('vipLinkCheckReq');

        if (!is_object($this->vipLinkCheckReq)) {
            throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
        }

        $xfer += $this->vipLinkCheckReq->write($output);

        $xfer += $output->writeFieldEnd();

        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByGoodsId_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new UrlGenResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByGoodsIdWithOauth_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new UrlGenResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByVIPUrl_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new UrlGenResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_genByVIPUrlWithOauth_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new UrlGenResponse();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_healthCheck_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new \com\vip\hermes\core\health\CheckResult();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_vipLinkCheck_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new VipLinkCheckResp();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}


class UnionUrlService_vipLinkCheckWithOuth_result
{
    public static $_TSPEC;
    public $success = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                0 => array(
                    'var' => 'success'
                ),

            );
        }

        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
        }
    }


    public function read($input)
    {
        if (true) {
            $this->success = new VipLinkCheckResp();
            $this->success->read($input);
        }
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin();

        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success');

            if (!is_object($this->success)) {
                throw new OspException('Bad type in structure.', OspException::INVALID_DATA);
            }

            $xfer += $this->success->write($output);

            $xfer += $output->writeFieldEnd();
        }


        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
