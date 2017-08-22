<?php
  # https://api.slack.com/docs/interactive-message-field-guide#option_fields

  namespace DozStyle\Slack\MessageAttachments

  class ActionManualOption {
    private $text;
    private $value;
    private $description;

    public function __construct($text, $value, $description = '') {
      $this->text = $text;
      $this->value = $value;
      $this->description = $description;
    }

    public function toArray() {
      $option = array(
        'text' => $this->text,
        'value' => $this->value,
        'description' =>  $this->description
      );
      return $option;
    }
  }
?>
