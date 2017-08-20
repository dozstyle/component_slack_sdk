<?php

if (function_exists('__autoload')) {
    trigger_error("SlackLibAutoLoader: It looks like your code is using an __autoload() function. log4php uses spl_autoload_register() which will bypass your __autoload() function and may break autoloading.", E_USER_WARNING);
}

spl_autoload_register(array('SlackLibAutoLoader', 'autoload'));

class SlackLibAutoLoader {
  private static $base_dir = "/usr/lib/pear/dozstyle/Slack";
  private static $classes = array(
    # InteractiveMessages
    'SlackMessageActionButton' => '/InteractiveMessages/SlackMessageActionButton.class.inc.php',
    'SlackMessageActionButtonConfirm' => '/InteractiveMessages/SlackMessageActionButtonConfirm.class.inc.php',
    'SlackMessageActionManual' => '/InteractiveMessages/SlackMessageActionManual.class.inc.php',
    'SlackMessageActionManualOption' => '/InteractiveMessages/SlackMessageActionManualOption.class.inc.php',
    'SlackMessageActionManualOptionGroup' => '/InteractiveMessages/SlackMessageActionManualOptionGroup.class.inc.php',
    'SlackMessageAttachment' => '/InteractiveMessages/SlackMessageAttachment.class.inc.php',
    'SlackMessageAttachments' => '/InteractiveMessages/SlackMessageAttachments.class.inc.php',
    'SlackMessageField' => '/InteractiveMessages/SlackMessageField.class.inc.php',
  );

  /**
  * Loads a class.
  * @param string $className The name of the class to load.
  */
  public static function autoload($className) {
    if(isset(self::$classes[$className])) {
      include self::$base_dir . self::$classes[$className];
    }
  }
}

?>
