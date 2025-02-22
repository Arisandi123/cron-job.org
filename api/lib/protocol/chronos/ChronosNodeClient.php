<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class ChronosNodeClient implements \chronos\ChronosNodeIf
{
    protected $input_ = null;
    protected $output_ = null;

    protected $seqid_ = 0;

    public function __construct($input, $output = null)
    {
        $this->input_ = $input;
        $this->output_ = $output ? $output : $input;
    }


    public function ping()
    {
        $this->send_ping();
        return $this->recv_ping();
    }

    public function send_ping()
    {
        $args = new \chronos\ChronosNode_ping_args();
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'ping',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('ping', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_ping()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_ping_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_ping_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("ping failed: unknown result");
    }

    public function getJobsForUser($userId)
    {
        $this->send_getJobsForUser($userId);
        return $this->recv_getJobsForUser();
    }

    public function send_getJobsForUser($userId)
    {
        $args = new \chronos\ChronosNode_getJobsForUser_args();
        $args->userId = $userId;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getJobsForUser',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getJobsForUser', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getJobsForUser()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getJobsForUser_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getJobsForUser_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        throw new \Exception("getJobsForUser failed: unknown result");
    }

    public function getJobDetails(\chronos\JobIdentifier $identifier)
    {
        $this->send_getJobDetails($identifier);
        return $this->recv_getJobDetails();
    }

    public function send_getJobDetails(\chronos\JobIdentifier $identifier)
    {
        $args = new \chronos\ChronosNode_getJobDetails_args();
        $args->identifier = $identifier;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getJobDetails',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getJobDetails', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getJobDetails()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getJobDetails_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getJobDetails_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->rnf !== null) {
            throw $result->rnf;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        throw new \Exception("getJobDetails failed: unknown result");
    }

    public function getJobLog(\chronos\JobIdentifier $identifier, $maxEntries)
    {
        $this->send_getJobLog($identifier, $maxEntries);
        return $this->recv_getJobLog();
    }

    public function send_getJobLog(\chronos\JobIdentifier $identifier, $maxEntries)
    {
        $args = new \chronos\ChronosNode_getJobLog_args();
        $args->identifier = $identifier;
        $args->maxEntries = $maxEntries;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getJobLog',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getJobLog', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getJobLog()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getJobLog_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getJobLog_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        if ($result->ia !== null) {
            throw $result->ia;
        }
        throw new \Exception("getJobLog failed: unknown result");
    }

    public function getJobLogDetails($userId, $mday, $month, $jobLogId)
    {
        $this->send_getJobLogDetails($userId, $mday, $month, $jobLogId);
        return $this->recv_getJobLogDetails();
    }

    public function send_getJobLogDetails($userId, $mday, $month, $jobLogId)
    {
        $args = new \chronos\ChronosNode_getJobLogDetails_args();
        $args->userId = $userId;
        $args->mday = $mday;
        $args->month = $month;
        $args->jobLogId = $jobLogId;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getJobLogDetails',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getJobLogDetails', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getJobLogDetails()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getJobLogDetails_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getJobLogDetails_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->rnf !== null) {
            throw $result->rnf;
        }
        if ($result->ad !== null) {
            throw $result->ad;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        if ($result->ia !== null) {
            throw $result->ia;
        }
        throw new \Exception("getJobLogDetails failed: unknown result");
    }

    public function createOrUpdateJob(\chronos\Job $job)
    {
        $this->send_createOrUpdateJob($job);
        $this->recv_createOrUpdateJob();
    }

    public function send_createOrUpdateJob(\chronos\Job $job)
    {
        $args = new \chronos\ChronosNode_createOrUpdateJob_args();
        $args->job = $job;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'createOrUpdateJob',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('createOrUpdateJob', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_createOrUpdateJob()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_createOrUpdateJob_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_createOrUpdateJob_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->rnf !== null) {
            throw $result->rnf;
        }
        if ($result->ad !== null) {
            throw $result->ad;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        if ($result->ia !== null) {
            throw $result->ia;
        }
        return;
    }

    public function getNotifications($userId, $maxEntries)
    {
        $this->send_getNotifications($userId, $maxEntries);
        return $this->recv_getNotifications();
    }

    public function send_getNotifications($userId, $maxEntries)
    {
        $args = new \chronos\ChronosNode_getNotifications_args();
        $args->userId = $userId;
        $args->maxEntries = $maxEntries;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getNotifications',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getNotifications', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getNotifications()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getNotifications_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getNotifications_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        if ($result->ia !== null) {
            throw $result->ia;
        }
        throw new \Exception("getNotifications failed: unknown result");
    }

    public function getTimeSeriesData(\chronos\JobIdentifier $identifier, $p)
    {
        $this->send_getTimeSeriesData($identifier, $p);
        return $this->recv_getTimeSeriesData();
    }

    public function send_getTimeSeriesData(\chronos\JobIdentifier $identifier, $p)
    {
        $args = new \chronos\ChronosNode_getTimeSeriesData_args();
        $args->identifier = $identifier;
        $args->p = $p;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getTimeSeriesData',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getTimeSeriesData', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getTimeSeriesData()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getTimeSeriesData_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getTimeSeriesData_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->rnf !== null) {
            throw $result->rnf;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        throw new \Exception("getTimeSeriesData failed: unknown result");
    }

    public function deleteJob(\chronos\JobIdentifier $identifier)
    {
        $this->send_deleteJob($identifier);
        $this->recv_deleteJob();
    }

    public function send_deleteJob(\chronos\JobIdentifier $identifier)
    {
        $args = new \chronos\ChronosNode_deleteJob_args();
        $args->identifier = $identifier;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'deleteJob',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('deleteJob', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_deleteJob()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_deleteJob_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_deleteJob_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->rnf !== null) {
            throw $result->rnf;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        return;
    }

    public function disableJobsForUser($userId)
    {
        $this->send_disableJobsForUser($userId);
        $this->recv_disableJobsForUser();
    }

    public function send_disableJobsForUser($userId)
    {
        $args = new \chronos\ChronosNode_disableJobsForUser_args();
        $args->userId = $userId;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'disableJobsForUser',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('disableJobsForUser', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_disableJobsForUser()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_disableJobsForUser_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_disableJobsForUser_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        return;
    }

    public function updateUserGroupId($userId, $userGroupId)
    {
        $this->send_updateUserGroupId($userId, $userGroupId);
        $this->recv_updateUserGroupId();
    }

    public function send_updateUserGroupId($userId, $userGroupId)
    {
        $args = new \chronos\ChronosNode_updateUserGroupId_args();
        $args->userId = $userId;
        $args->userGroupId = $userGroupId;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'updateUserGroupId',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('updateUserGroupId', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_updateUserGroupId()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_updateUserGroupId_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_updateUserGroupId_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        return;
    }

    public function submitJobTestRun(\chronos\Job $job, $xForwardedFor)
    {
        $this->send_submitJobTestRun($job, $xForwardedFor);
        return $this->recv_submitJobTestRun();
    }

    public function send_submitJobTestRun(\chronos\Job $job, $xForwardedFor)
    {
        $args = new \chronos\ChronosNode_submitJobTestRun_args();
        $args->job = $job;
        $args->xForwardedFor = $xForwardedFor;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'submitJobTestRun',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('submitJobTestRun', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_submitJobTestRun()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_submitJobTestRun_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_submitJobTestRun_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->ie !== null) {
            throw $result->ie;
        }
        if ($result->ia !== null) {
            throw $result->ia;
        }
        if ($result->na !== null) {
            throw $result->na;
        }
        throw new \Exception("submitJobTestRun failed: unknown result");
    }

    public function getJobTestRunStatus($handle)
    {
        $this->send_getJobTestRunStatus($handle);
        return $this->recv_getJobTestRunStatus();
    }

    public function send_getJobTestRunStatus($handle)
    {
        $args = new \chronos\ChronosNode_getJobTestRunStatus_args();
        $args->handle = $handle;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getJobTestRunStatus',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getJobTestRunStatus', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getJobTestRunStatus()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_getJobTestRunStatus_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_getJobTestRunStatus_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        if ($result->ia !== null) {
            throw $result->ia;
        }
        if ($result->na !== null) {
            throw $result->na;
        }
        throw new \Exception("getJobTestRunStatus failed: unknown result");
    }

    public function deleteJobTestRun($handle)
    {
        $this->send_deleteJobTestRun($handle);
        $this->recv_deleteJobTestRun();
    }

    public function send_deleteJobTestRun($handle)
    {
        $args = new \chronos\ChronosNode_deleteJobTestRun_args();
        $args->handle = $handle;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'deleteJobTestRun',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('deleteJobTestRun', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_deleteJobTestRun()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\chronos\ChronosNode_deleteJobTestRun_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \chronos\ChronosNode_deleteJobTestRun_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->na !== null) {
            throw $result->na;
        }
        return;
    }
}
