Kohana Swiftmail
================
A 'helper' class to send (multiple) emails from within Kohana 3.3. 

Usage
----------------
Typical usage scenario:

```php
// Create Emailbatch
$batch = new Emailbatch();

// Create two emails
$email = new Email();
$email->setBody('Message 1');
$batch->add($email);

$email = new Email();
$email->setBody('Message 2');
$batch->add($email);

// Set general options
$batch
    ->setSubject('General subject')
    ->setFrom(array('from@email.com' => 'From Name'))
    ->setTo('to@email.com')
    ->send();
```

Webhub 2013