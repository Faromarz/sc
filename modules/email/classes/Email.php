<?php
/**
 * SwiftMailer Email class for Kohana 3.3.0
 * @author Tom Lankhorst (Webhub)
 * @copyright 2013 - Webhub
 */
class Email {
    
    private $_message   = NULL;
    private $_transport = NULL;
    private $_mailer    = NULL;
    
    public $config = NULL;
    
    public function __construct($config_group = 'default')
    {
        $config             = Kohana::$config->load('email');
        $this->config       = $config[$config_group];
        $this->_message     = Swift_Message::newInstance();
        
    }
    
    public static function factory()
    {
        return new Email();
    }
    
    public function getMessage()
    {
        return $this->_message;
    }
    
    public function setSubject($subject)
    {
        $this->_message->setSubject($subject);
        return $this;
    }
    
    public function setTo($to)
    {
        $this->_message->setTo($to);
        return $this;
    }
    
    public function setFrom($from)
    {
        $this->_message->setFrom($from);
        return $this;
    }
    
    public function setFromDefault()
    {
        $this->_message->setFrom($this->config['from']);
        return $this;
    }
    
    public function setSender($sender)
    {
        $this->_message->setSender($sender);
        return $this;
    }
    
    public function setReplyTo($to)
    {
        $this->_message->setReplyTo($to);
        return $this;
    }
    
    public function setBody($body)
    {
        $this->_message->setBody($body, 'text/html');
        return $this;
    }
    
    public function addPart($part)
    {
        $this->_message->addPart($part);
    }
    
    public function attach($path)
    {
        $this->_message->attach(Swift_Attachment::fromPath($path));
    }
    
    public function send()
    {
        $this->_transport   = Swift_SmtpTransport::newInstance($this->config['hostname'], $this->config['port']);
        
        if($this->config['username'] && $this->config['password']){
            $this->_transport->setUsername($this->config['username']);
            $this->_transport->setPassword($this->config['password']);
        }
        
        if($this->config['encryption']){
            $this->_transport->setEncryption($this->config['encryption']);
        }
        
        $this->_mailer      = Swift_Mailer::newInstance($this->_transport);
        return $this->_mailer->send($this->_message);
    }
}