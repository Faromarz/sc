<?php
/**
 * SwiftMailer Email class for Kohana 3.3.0
 * @author Tom Lankhorst (Webhub)
 * @copyright 2013 - Webhub
 */
class Emailbatch {
    
    private $_message_queue   = array();
    private $_transport = NULL;
    private $_mailer    = NULL;
    
    public $config = NULL;
    
    public static function factory()
    {
        return new Email();
    }
    
    public function __construct($config_group = 'default')
    {
        $config             = Kohana::$config->load('email');
        $this->config       = $config[$config_group];
        $this->_transport   = Swift_SmtpTransport::newInstance($this->config['hostname'], $this->config['port']);
        
        if($this->config['username'] && $this->config['password']){
            $this->_transport->setUsername($this->config['username']);
            $this->_transport->setPassword($this->config['password']);
        }
        
        if($this->config['encryption']){
            $this->_transport->setEncryption($this->config['encryption']);
        }
        
        $this->_mailer      = Swift_Mailer::newInstance($this->_transport);
        
    }
    
    public function add($message)
    {
        $this->_message_queue[] = $message;
        return $this;
    }
    
    public function setSubject($subject)
    {
        foreach($this->_message_queue as $message)
        {
            $message->setSubject($subject);
        }
        return $this;
    }
    
    public function setTo($to)
    {
        foreach($this->_message_queue as $message)
        {
            $message->setTo($to);
        }
        return $this;
    }
    
    public function setFrom($from)
    {
        foreach($this->_message_queue as $message)
        {
            $message->setFrom($from);
        }
        return $this;
    }
    
    public function setFromDefault()
    {
        foreach($this->_message_queue as $message)
        {
            $message->setFromDefault();
        }
        return $this;
    }
    
    public function setSender($sender)
    {
        foreach($this->_message_queue as $message)
        {
            $message->setSender($sender);
        }
        return $this;
    }
    
    public function setReplyTo($to)
    {
        foreach($this->_message_queue as $message)
        {
            $message->setReplyTo($to);
        }
        return $this;
    }
    
    public function setBody($body)
    {
        foreach($this->_message_queue as $message)
        {
            $message->setBody($body);
        }
        return $this;
    }
    
    public function addPart($part)
    {
        foreach($this->_message_queue as $message)
        {
            $message->addPart($part);
        }
        return $this;
    }
    
    public function attach($path)
    {
        foreach($this->_message_queue as $message)
        {
            $message->attach(Swift_Attachment::fromPath($path));
        }
        return $this;
    }
    
    public function send()
    {
        foreach($this->_message_queue as $message)
        {
            $this->_mailer->send($message->getMessage());
        }
        return $this;
    }
}